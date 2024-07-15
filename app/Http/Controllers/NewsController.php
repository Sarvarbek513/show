<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index_client()
    {
        $news = News::latest()->paginate(5);
        return view('client.news',compact('news'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index()
    {
        $news = News::latest()->paginate(5);
        return view('admin.news.index',compact('news'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'description' => 'required|max:255|string',
            'long_description' => 'required',
        ]);
    
        $filename = NULL;
        $path = NULL;
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
    
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $path = 'upload/news/';
                $file->move($path, $filename);
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        News::create([
            'name' => $request->name,
            'image' => $path.$filename,
            'description' => $request->description,
            'long_description' => $request->long_description,
        ]);
    
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }
    
    public function show(News $news)
    {
        return view('admin.news.show',compact('news'));
    }
    public function show_client($id)
    {
        $news = News::findOrFail($id);
        $news->increment('views');
        return view('client.show',compact('news'));
    }
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'description' => 'required|max:255|string',
            'long_description' => 'required',
        ]);
    
        $news = News::findOrFail($id);
    
        $filename = $news->image;
        $path = 'upload/news/';
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
        
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($path, $filename);
            
                // Optionally delete the old image
                if ($news->image && file_exists(public_path($news->image))) {
                    unlink(public_path($news->image));
                }
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        $news->update([
            'name' => $request->name,
            'image' => $path.$filename,
            'description' => $request->description,
            'long_description' => $request->long_description,
        ]);
    
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete the image if it exists
        if ($news->image && Storage::exists($news->image)) {
            Storage::delete($news->image);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }

    // Existing methods...
}

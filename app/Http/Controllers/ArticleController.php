<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index_client()
    {
        $articles = Article::latest()->paginate(9);
        return view('client.maqola.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * 9);
    }
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('admin.maqola.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.maqola.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
            'type' => 'required|max:255|string',
        ]);
    
        $filename = NULL;
        $path = NULL;
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
    
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $path = 'upload/articles/';
                $file->move($path, $filename);
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        Article::create([
            'name' => $request->name,
            'image' => $path.$filename,
            'description' => $request->description,
            'type' => $request->type,
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }
    public function show(Article $articles)
    {
        return view('admin.maqola.show',compact('articles'));
    }
    public function show_client($id)
    {
        $articles = Article::findOrFail($id);
        // $articles->increment('views');
        return view('client.maqola.show',compact('articles'));
    }
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        return view('admin.maqola.edit', compact('articles'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
            'type' => 'required',
        ]);
    
        $news = Article::findOrFail($id);
    
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
            'type' => $request->type,
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }
    public function destroy($id)
    {
        $articles = Article::findOrFail($id);

        // Delete the image if it exists
        if ($articles->image && Storage::exists($articles->image)) {
            Storage::delete($articles->image);
        }

        $articles->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}

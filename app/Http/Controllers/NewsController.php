<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index_last()
    {
        // Fetch the last 6 added news items, assuming 'created_at' is the timestamp column
        $latestNews = News::orderBy('created_at', 'desc')->take(6)->get();

        // Pass the news items to the view
        return view('client.index', compact('latestNews'));
    }
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
            'pdf' => 'nullable|mimes:pdf|max:10000',
        ]);

        $imagePath = NULL;
        $pdfPath = NULL;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageFilename = time() . '_image.' . $imageExtension;
            $imagePath = 'upload/news/image/';
            $image->move($imagePath, $imageFilename);
            $imagePath = $imagePath . $imageFilename;
        }

        // Handle PDF Upload
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfExtension = $pdf->getClientOriginalExtension();
            $pdfFilename = time() . '_pdf.' . $pdfExtension;
            $pdfPath = 'upload/news/pdf/';
            $pdf->move($pdfPath, $pdfFilename);
            $pdfPath = $pdfPath . $pdfFilename;
        }

        // Create News record
        News::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'pdf' => $pdfPath,
        ]);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    
    public function show($id)
    {
        $news = News::findOrFail($id);
        $news->increment('views');
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
    public function downloadPDF($id)
    {
        // Retrieve the news item by ID
        $news = News::findOrFail($id);
    
        // Check if the PDF exists
        if ($news->pdf && file_exists(public_path($news->pdf))) {
            return response()->download(public_path($news->pdf));
        }
    
        return redirect()->back()->with('error', 'PDF file not found.');
    }

    // Existing methods...
}

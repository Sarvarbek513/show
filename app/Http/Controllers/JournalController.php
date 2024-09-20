<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::all();
        return view('admin.journals.index', compact('journals'));
    }
    public function client_index()
    {
        $journals = Journal::all();
        return view('client.journal', compact('journals'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.journals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000',
        ]);
    
        // Handle the image upload if a file is present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'upload/journals/images/';
                
                // Ensure the directory exists, or create it
                if (!File::exists(public_path($path))) {
                    File::makeDirectory(public_path($path), 0755, true);
                }
    
                $file->move(public_path($path), $filename);
                $validatedData['image'] = $path . $filename;
            } else {
                return redirect()->back()->with('error', 'Image upload failed.');
            }
        }
    
        // Handle the PDF upload if a file is present
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'upload/journals/pdfs/';
                
                // Ensure the directory exists, or create it
                if (!File::exists(public_path($path))) {
                    File::makeDirectory(public_path($path), 0755, true);
                }
    
                $file->move(public_path($path), $filename);
                $validatedData['pdf'] = $path . $filename;
            } else {
                return redirect()->back()->with('error', 'PDF upload failed.');
            }
        }
    
        // Create a new Journal entry with the validated data
        Journal::create($validatedData);
    
        // Redirect to the journals index page
        return redirect()->route('journals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $journals = Journal::findOrFail($id);
        $journals->increment('views');
        return view('client.showjurnal',compact('journals'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $journals = Journal::findOrFail($id);

        // Delete the image if it exists
        if ($journals->image && Journal::exists($journals->image)) {
            Storage::delete($journals->image);
        }

        $journals->delete();

        return redirect()->route('journals.index')->with('success', 'Journals deleted successfully.');
    }
}

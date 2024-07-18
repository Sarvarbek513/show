<?php

namespace App\Http\Controllers;

use App\Models\Doktarant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoktarantController extends Controller
{
    public function index_client()
    {
        $doktarants = Doktarant::latest()->paginate(5);
        return view('client.doktarant.index',compact('doktarants'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index()
    {
        $doktarants = Doktarant::latest()->paginate(5);
        return view('admin.doktarant.index',compact('doktarants'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.doktarant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'long_description' => 'required',
        ]);
    
        $filename = NULL;
        $path = NULL;
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
    
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $path = 'upload/doktarant/';
                $file->move($path, $filename);
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        Doktarant::create([
            'name' => $request->name,
            'image' => $path.$filename,
            'long_description' => $request->long_description,
        ]);
    
        return redirect()->route('doktarants.index')->with('success', 'Doktarant created successfully.');
    }
    
    public function show($id)
    {
        $doktarants = Doktarant::findOrFail($id);
        $doktarants->increment('views');
        return view('admin.doktarant.show',compact('doktarants'));
    }
    public function show_client($id)
    {
        $doktarants = Doktarant::findOrFail($id);
        $doktarants->increment('views');
        return view('client.doktarant.show',compact('doktarants'));
    }
    public function edit($id)
    {
        $doktarants = Doktarant::findOrFail($id);
        return view('admin.doktarant.edit', compact('doktarants'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'long_description' => 'required',
        ]);
    
        $doktarants = Doktarant::findOrFail($id);
    
        $filename = $doktarants->image;
        $path = 'upload/doktarant/';
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
        
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move($path, $filename);
            
                // Optionally delete the old image
                if ($doktarants->image && file_exists(public_path($doktarants->image))) {
                    unlink(public_path($doktarants->image));
                }
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        $doktarants->update([
            'name' => $request->name,
            'image' => $path.$filename,
            'long_description' => $request->long_description,
        ]);
    
        return redirect()->route('doktarants.index')->with('success', 'Doktarant updated successfully.');
    }

    public function destroy($id)
    {
        $doktarants = Doktarant::findOrFail($id);

        // Delete the image if it exists
        if ($doktarants->image && Storage::exists($doktarants->image)) {
            Storage::delete($doktarants->image);
        }

        $doktarants->delete();

        return redirect()->route('doktarants.index')->with('success', 'Doktarant deleted successfully.');
    }

}

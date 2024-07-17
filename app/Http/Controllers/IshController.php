<?php

namespace App\Http\Controllers;

use App\Models\Ish;
use Illuminate\Http\Request;

class IshController extends Controller
{
    public function index()
    {
        $works = Ish::latest()->paginate(5);
        return view('admin.work.index',compact('works'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function index_ish()
    {
        $works = Ish::latest()->paginate(5);
        return view('client.boshish',compact('works'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.work.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required',
        ]);
        Ish::create([
            'desc' => $request->desc,
        ]);
    
        return redirect()->route('works.index')->with('success', 'Ish created successfully.');
    }
}

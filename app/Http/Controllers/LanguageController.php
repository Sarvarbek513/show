<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $request->validate([
            'locale' => 'required|string',
        ]);

        $locale = $request->input('locale');
        Session::put('locale', $locale);

        return redirect()->back();
    }
}


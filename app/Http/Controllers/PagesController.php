<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $about = About::all();
        // dd($about);
        return view('about', ['about' => $about]);
    }
}

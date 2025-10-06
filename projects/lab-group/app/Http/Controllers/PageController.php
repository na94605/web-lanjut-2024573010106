<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = "Home Page";
        return view('pages.home', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.about', compact('title'));
    }

    public function contact()
    {
        $title = "Contact";
        return view('pages.contact', compact('title'));
    }
}
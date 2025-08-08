<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('dashboard.pages.about');
    }

    public function products()
    {
        return view('dashboard.pages.products');
    }

    public function wedding()
    {
        return view('dashboard.pages.wedding');
    }

    public function events()
    {
        return view('dashboard.pages.events');
    }

    public function contacts()
    {
        return view('dashboard.pages.contacts');
    }
}

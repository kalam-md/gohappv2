<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\HeroSection;
use App\Models\Product;
use App\Models\WeddingGallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'heroSections' => HeroSection::count(),
            'products' => Product::count(),
            'weddingGalleries' => WeddingGallery::count(),
            'events' => Event::count(),
        ];

        return view('dashboard.home', compact('stats'));
    }
}

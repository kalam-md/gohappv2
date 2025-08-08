<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $hero_section = HeroSection::where('page', 'about')->latest()->first();
    return view('about', compact('hero_section'));
})->name('about');

Route::get('/products', function () {
    $hero_section = HeroSection::where('page', 'products')->latest()->first();
    return view('product', compact('hero_section'));
})->name('products');

Route::get('/wedding', function () {
    $hero_section = HeroSection::where('page', 'wedding')->latest()->first();
    return view('wedding', compact('hero_section'));
})->name('wedding');

Route::get('/event', function () {
    $hero_section = HeroSection::where('page', 'events')->latest()->first();
    return view('event', compact('hero_section'));
})->name('event');

Route::get('/contact', function () {
    $hero_section = HeroSection::where('page', 'contact')->latest()->first();
    return view('contact', compact('hero_section'));
})->name('contact');

// Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'verified'])->group(function () {
Route::prefix('dashboard')->name('dashboard.')->middleware(['guest'])->group(function () {
    // Dashboard Home
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    
    // Hero Sections CRUD
    Route::resource('hero-sections', HeroSectionController::class);
    
    // Pages Management
    Route::prefix('pages')->name('pages.')->group(function () {
        Route::resource('products', ProductController::class)->names([
            'index' => 'products.index',
            'create' => 'products.create',
            'store' => 'products.store',
            'edit' => 'products.edit',
            'update' => 'products.update',
            'destroy' => 'products.destroy'
        ]);
        Route::get('wedding', [PageController::class, 'wedding'])->name('wedding');
        Route::get('events', [PageController::class, 'events'])->name('events');
        Route::get('contacts', [PageController::class, 'contacts'])->name('contacts');
    });
});

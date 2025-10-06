<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselImageController extends Controller
{
    public function index()
    {
        $carouselImages = CarouselImage::latest()->paginate(10);
        return view('dashboard.carousel.index', compact('carouselImages'));
    }

    public function create()
    {
        return view('dashboard.carousel.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:home,event',
            'caption' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('carousel-images', 'public');
        }

        CarouselImage::create($validated);

        return redirect()->route('dashboard.carousel-images.index')
                         ->with('success', 'Carousel image created successfully!');
    }

    public function edit(CarouselImage $carouselImage)
    {
        return view('dashboard.carousel.edit', compact('carouselImage'));
    }

    public function update(Request $request, CarouselImage $carouselImage)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:home,event',
            'caption' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($carouselImage->image) {
                Storage::disk('public')->delete($carouselImage->image);
            }
            $validated['image'] = $request->file('image')->store('carousel-images', 'public');
        }

        $carouselImage->update($validated);

        return redirect()->route('dashboard.carousel-images.index')
                         ->with('success', 'Carousel image updated successfully!');
    }

    public function destroy(CarouselImage $carouselImage)
    {
        if ($carouselImage->image) {
            Storage::disk('public')->delete($carouselImage->image);
        }

        $carouselImage->delete();

        return redirect()->route('dashboard.carousel-images.index')
                         ->with('success', 'Carousel image deleted successfully!');
    }
}
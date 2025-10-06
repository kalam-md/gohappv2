<?php

namespace App\Http\Controllers;

use App\Models\WeddingGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeddingGalleryController extends Controller
{
    public function index()
    {
        $galleries = WeddingGallery::latest()->paginate(10);
        return view('dashboard.wedding-galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('dashboard.wedding-galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('wedding-galleries', 'public');
        }

        WeddingGallery::create($validated);

        return redirect()->route('dashboard.wedding-galleries.index')
                         ->with('success', 'Wedding gallery created successfully!');
    }

    public function edit(WeddingGallery $weddingGallery)
    {
        return view('dashboard.wedding-galleries.edit', compact('weddingGallery'));
    }

    public function update(Request $request, WeddingGallery $weddingGallery)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'order' => 'nullable|integer',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($weddingGallery->image) {
                Storage::disk('public')->delete($weddingGallery->image);
            }
            $validated['image'] = $request->file('image')->store('wedding-galleries', 'public');
        }

        $weddingGallery->update($validated);

        return redirect()->route('dashboard.wedding-galleries.index')
                         ->with('success', 'Wedding gallery updated successfully!');
    }

    public function destroy(WeddingGallery $weddingGallery)
    {
        if ($weddingGallery->image) {
            Storage::disk('public')->delete($weddingGallery->image);
        }

        $weddingGallery->delete();

        return redirect()->route('dashboard.wedding-galleries.index')
                         ->with('success', 'Wedding gallery deleted successfully!');
    }
}
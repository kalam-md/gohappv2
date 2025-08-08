<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::latest()->paginate(10);
        return view('dashboard.hero-sections.index', compact('heroSections'));
    }

    public function create()
    {
        return view('dashboard.hero-sections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('background_image')) {
            $validated['background_image'] = $request->file('background_image')->store('hero-sections', 'public');
        }

        HeroSection::create($validated);

        return redirect()->route('dashboard.hero-sections.index')
                         ->with('success', 'Hero section created successfully!');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('dashboard.hero-sections.edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'page' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('background_image')) {
            // Delete old image
            if ($heroSection->background_image) {
                Storage::disk('public')->delete($heroSection->background_image);
            }
            $validated['background_image'] = $request->file('background_image')->store('hero-sections', 'public');
        }

        $heroSection->update($validated);

        return redirect()->route('dashboard.hero-sections.index')
                         ->with('success', 'Hero section updated successfully!');
    }

    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->background_image) {
            Storage::disk('public')->delete($heroSection->background_image);
        }

        $heroSection->delete();

        return redirect()->route('dashboard.hero-sections.index')
                         ->with('success', 'Hero section deleted successfully!');
    }
}

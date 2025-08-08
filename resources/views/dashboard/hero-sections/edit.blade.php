@extends('dashboard.layouts.main')

@section('title', 'Edit Hero Section')
@section('header', 'Edit Hero Section')

@section('content')
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-6">
        <form action="{{ route('dashboard.hero-sections.update', $heroSection->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="page" class="block text-sm font-medium text-gray-700 mb-1">Page</label>
                    <select id="page" name="page" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                        <option value="home" {{ $heroSection->page == 'home' ? 'selected' : '' }}>Home</option>
                        <option value="about" {{ $heroSection->page == 'about' ? 'selected' : '' }}>About</option>
                        <option value="products" {{ $heroSection->page == 'products' ? 'selected' : '' }}>Products</option>
                        <option value="wedding" {{ $heroSection->page == 'wedding' ? 'selected' : '' }}>Wedding</option>
                        <option value="events" {{ $heroSection->page == 'events' ? 'selected' : '' }}>Events</option>
                        <option value="contact" {{ $heroSection->page == 'contact' ? 'selected' : '' }}>Contact</option>
                    </select>
                </div>
                
                <div>
                    <label for="is_active" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="is_active" name="is_active" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                        <option value="1" {{ $heroSection->is_active ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$heroSection->is_active ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" id="title" name="title" value="{{ $heroSection->title }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
            </div>
            
            <div class="mb-6">
                <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                <textarea id="subtitle" name="subtitle" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>{{ $heroSection->subtitle }}</textarea>
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Image</label>
                <img src="{{ asset('storage/' . $heroSection->background_image) }}" alt="Current Background" class="h-48 w-full object-cover rounded-md">
            </div>
            
            <div class="mb-6">
                <label for="background_image" class="block text-sm font-medium text-gray-700 mb-1">New Background Image (Leave empty to keep current)</label>
                <input type="file" id="background_image" name="background_image" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                <p class="mt-1 text-sm text-gray-500">Recommended size: 1920x1080 pixels</p>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-md transition">
                    Update Hero Section
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
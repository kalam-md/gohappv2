@extends('dashboard.layouts.main')

@section('title', 'Edit Carousel Image')
@section('header', 'Edit Carousel Image')

@section('content')
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-6">
        <form action="{{ route('dashboard.carousel-images.update', $carouselImage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select id="category" name="category" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('category') border-red-500 @enderror" required>
                        <option value="">Select Category</option>
                        <option value="home" {{ old('category', $carouselImage->category) == 'home' ? 'selected' : '' }}>Home</option>
                        <option value="event" {{ old('category', $carouselImage->category) == 'event' ? 'selected' : '' }}>Event</option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="is_active" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="is_active" name="is_active" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                        <option value="1" {{ old('is_active', $carouselImage->is_active) == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $carouselImage->is_active) == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-6">
                <label for="caption" class="block text-sm font-medium text-gray-700 mb-1">Caption (Optional)</label>
                <input type="text" id="caption" name="caption" value="{{ old('caption', $carouselImage->caption) }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('caption') border-red-500 @enderror">
                @error('caption')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Order (Optional)</label>
                <input type="number" id="order" name="order" value="{{ old('order', $carouselImage->order) }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('order') border-red-500 @enderror">
                <p class="mt-1 text-sm text-gray-500">Lower numbers appear first</p>
                @error('order')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Image</label>
                <img src="{{ asset('storage/' . $carouselImage->image) }}" alt="{{ $carouselImage->caption }}" class="h-32 w-48 object-cover rounded mb-2">
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Change Image (Optional)</label>
                <input type="file" id="image" name="image" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('image') border-red-500 @enderror" accept="image/*">
                <p class="mt-1 text-sm text-gray-500">Leave empty to keep current image. Max: 2MB</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end space-x-3">
                <a href="{{ route('dashboard.carousel-images.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-md transition">
                    Cancel
                </a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-md transition">
                    Update Image
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
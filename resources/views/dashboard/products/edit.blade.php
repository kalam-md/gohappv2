@extends('dashboard.layouts.main')

@section('title', 'Edit Product')
@section('header', 'Edit Product')

@section('content')
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-6">
        <form action="{{ route('dashboard.pages.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                </div>
                
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input type="number" id="price" name="price" min="0" step="1000" value="{{ $product->price }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                </div>
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>{{ $product->description }}</textarea>
            </div>
            
            <div class="mb-6">
                <label for="features" class="block text-sm font-medium text-gray-700 mb-1">Features (Add one per line)</label>
                <textarea id="features" name="features" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">{{ implode("\n", $product->features ?? []) }}</textarea>
                <p class="mt-1 text-sm text-gray-500">Each line will become a bullet point feature</p>
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Image</label>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-48 object-cover rounded-md">
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">New Product Image (Leave empty to keep current)</label>
                <input type="file" id="image" name="image" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                <p class="mt-1 text-sm text-gray-500">Recommended size: 800x800 pixels</p>
            </div>
            
            <div class="mb-6">
                <label for="is_active" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select id="is_active" name="is_active" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                    <option value="1" {{ $product->is_active ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$product->is_active ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-md transition">
                    Update Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
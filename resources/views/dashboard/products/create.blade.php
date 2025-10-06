@extends('dashboard.layouts.main')

@section('title', 'Add Product')
@section('header', 'Add New Product')

@section('content')
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-6">
        @if ($errors->any())
            <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.pages.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Package Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                       placeholder="e.g. Basic Package"
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('name') border-red-500 @enderror" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                <textarea id="description" name="description" rows="4" 
                          placeholder="Brief description of the package"
                          class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('description') border-red-500 @enderror" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price (Rp) *</label>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" 
                           placeholder="e.g. 8000000"
                           min="0" step="1000"
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('price') border-red-500 @enderror" required>
                    @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="is_active" class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                    <select id="is_active" name="is_active" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                        <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Package Features</label>
                <div id="features-container">
                    @if(old('features'))
                        @foreach(old('features') as $index => $feature)
                        <div class="feature-item flex gap-2 mb-2">
                            <input type="text" name="features[]" value="{{ $feature }}" 
                                   placeholder="e.g. 8 Hours Coverage"
                                   class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                            <button type="button" onclick="removeFeature(this)" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md transition">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        @endforeach
                    @else
                        <div class="feature-item flex gap-2 mb-2">
                            <input type="text" name="features[]" value=""
                                   placeholder="e.g. 8 Hours Coverage"
                                   class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
                            <button type="button" onclick="removeFeature(this)" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md transition">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    @endif
                </div>
                <button type="button" onclick="addFeature()" class="mt-2 bg-gray-600 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded-md transition">
                    <i class="fas fa-plus mr-2"></i> Add Feature
                </button>
                @error('features')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Package Image *</label>
                <input type="file" id="image" name="image" class="w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500 @error('image') border-red-500 @enderror" required accept="image/*" onchange="previewImage(event)">
                <p class="mt-1 text-sm text-gray-500">Recommended size: 800x600 pixels. Max: 2MB</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <div id="image-preview" class="mt-4 hidden">
                    <img src="" alt="Preview" class="max-w-xs rounded-lg shadow-md">
                </div>
            </div>
            
            <div class="flex justify-end space-x-3">
                <a href="{{ route('dashboard.pages.products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-md transition">
                    Cancel
                </a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2 px-4 rounded-md transition">
                    <i class="fas fa-save mr-2"></i> Save Product
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Debug: Check if script is loaded
console.log('Product form script loaded');

function addFeature() {
    console.log('Adding feature...');
    const container = document.getElementById('features-container');
    const featureItem = document.createElement('div');
    featureItem.className = 'feature-item flex gap-2 mb-2';
    featureItem.innerHTML = `
        <input type="text" name="features[]" value=""
               placeholder="e.g. 8 Hours Coverage"
               class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500">
        <button type="button" onclick="removeFeature(this)" class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md transition">
            <i class="fas fa-times"></i>
        </button>
    `;
    container.appendChild(featureItem);
}

function removeFeature(button) {
    console.log('Removing feature...');
    const container = document.getElementById('features-container');
    if (container.children.length > 1) {
        button.parentElement.remove();
    } else {
        alert('At least one feature field is required');
    }
}

function previewImage(event) {
    console.log('Previewing image...');
    const preview = document.getElementById('image-preview');
    const img = preview.querySelector('img');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            img.src = e.target.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
}

// Debug form submission
document.getElementById('productForm').addEventListener('submit', function(e) {
    console.log('Form is submitting...');
    console.log('Form action:', this.action);
    console.log('Form method:', this.method);
    
    // Check if image is selected
    const imageInput = document.getElementById('image');
    if (!imageInput.files.length) {
        console.error('No image selected!');
        alert('Please select an image!');
        e.preventDefault();
        return false;
    }
    
    // Check required fields
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const price = document.getElementById('price').value;
    
    if (!name || !description || !price) {
        console.error('Missing required fields!');
        alert('Please fill all required fields!');
        e.preventDefault();
        return false;
    }
    
    console.log('All validations passed, submitting...');
});
</script>
@endsection
@extends('main')

@section('title', 'Our Products')

@section('content')
<!-- Hero Section -->
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white" style="background-image: url('{{ $hero_section ? asset('storage/' . $hero_section->background_image) : '' }}'); background-size: cover; background-position: center;">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">OUR PRODUCTS</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            {{ $hero_section->title ?? '' }}
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            {{ $hero_section->subtitle ?? '' }}
        </p>
    </div>
</section>

<!-- Products Section -->
<section class="page-content py-16 md:py-24 px-6 md:px-12 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-12 text-center text-gray-800">
            Our Photography Packages
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($products as $product)
            <!-- Product Card -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="{{ asset('storage/' . $product->image) }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">{{ $product->name }}</h3>
                    <div class="text-amber-600 font-bold text-xl mb-4">{{ $product->formatted_price }}</div>
                    
                    @if($product->description)
                    <p class="text-gray-600 mb-4 text-sm">{{ Str::limit($product->description, 100) }}</p>
                    @endif
                    
                    @if($product->features && count($product->features) > 0)
                    <ul class="text-gray-600 mb-6 space-y-2">
                        @foreach($product->features as $feature)
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20{{ urlencode($product->name) }}%20Gauri%20of%20House" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-lg">No packages available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
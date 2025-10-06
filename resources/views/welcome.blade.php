@extends('main')

@section('title', 'Home')

@section('content')
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">GAURI OF HOUSE</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            MAKE YOUR WEDDING<br>
            <span class="text-white">UNFORGETTABLE</span>
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            Documenting weddings & portraits in Bandung and beyond for those who want timeless photos filled with love & beauty.
        </p>
        <a href="#" class="cta-button inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
            Explore the Work
        </a>
    </div>
</section>

<section class="page-content py-16 md:py-24 px-6 md:px-12 bg-white">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="page-title font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
            Capturing Life's Precious Moments
        </h1>
        <p class="page-description text-gray-600 text-lg">
            Specializing in wedding, portrait, and event photography that tells your unique story through beautiful, timeless images.
        </p>
    </div>
    
    <!-- Auto-scrolling Carousel Gallery -->
    <div class="carousel-container max-w-6xl mx-auto mb-12">
        <div class="carousel-track">
            @if($carousel_images->count() > 0)
                <!-- First loop -->
                @foreach($carousel_images as $image)
                    <div class="carousel-item overflow-hidden rounded-md shadow-md group relative">
                        <img src="{{ asset('storage/' . $image->image) }}" 
                            alt="{{ $image->caption ?? 'Carousel Image' }}" 
                            class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300"></div>
                        
                        <!-- Caption -->
                        @if($image->caption)
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm md:text-base font-medium">{{ $image->caption }}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
                
                <!-- Duplicate for infinite loop effect -->
                @foreach($carousel_images as $image)
                    <div class="carousel-item overflow-hidden rounded-md shadow-md group relative">
                        <img src="{{ asset('storage/' . $image->image) }}" 
                            alt="{{ $image->caption ?? 'Carousel Image' }}" 
                            class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300"></div>
                        
                        <!-- Caption -->
                        @if($image->caption)
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm md:text-base font-medium">{{ $image->caption }}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <!-- Fallback jika belum ada data -->
                <div class="carousel-item overflow-hidden rounded-md shadow-md group relative">
                    <img src="/img/wedding/3.jpg" alt="Default Image" class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300"></div>
                </div>
                <div class="carousel-item overflow-hidden rounded-md shadow-md group relative">
                    <img src="/img/wedding/4.jpg" alt="Default Image" class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300"></div>
                </div>
                <div class="carousel-item overflow-hidden rounded-md shadow-md group relative">
                    <img src="/img/wedding/5.jpg" alt="Default Image" class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300"></div>
                </div>
            @endif
        </div>
    </div>
    
    <div class="text-center mt-12">
        <a href="#" class="cta-button inline-block bg-gray-800 hover:bg-black text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
            Book Your Session
        </a>
    </div>
</section>
@endsection
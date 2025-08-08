@extends('main')

@section('title', 'About Us')

@section('content')
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white" style="background-image: url('{{ $hero_section ? asset('storage/' . $hero_section->background_image) : '' }}'); background-size: cover; background-position: center;">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">ABOUT GAURI OF HOUSE</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            {{ $hero_section->title ?? '' }}
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            {{ $hero_section->subtitle ?? '' }}
        </p>
    </div>
</section>

<section class="page-content py-16 md:py-24 px-6 md:px-12 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="font-playfair text-3xl font-bold mb-6 text-gray-800">Our Journey</h2>
                <p class="text-gray-600 mb-4">
                    Founded in 2015, Gauri of House began as a small photography studio in Bandung with a simple mission: to capture love stories in their most authentic form.
                </p>
                <p class="text-gray-600 mb-4">
                    What started as a passion project has grown into one of the most sought-after wedding photography services in Indonesia, with a team of dedicated professionals who share the same vision.
                </p>
                <p class="text-gray-600">
                    Over the years, we've had the privilege of documenting over 500 weddings, each with its own unique story and personality.
                </p>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="/img/workflow.jpg" alt="Our Team" class="w-full h-auto">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16 md:flex-row-reverse">
            <div class="md:order-2">
                <h2 class="font-playfair text-3xl font-bold mb-6 text-gray-800">Our Philosophy</h2>
                <p class="text-gray-600 mb-4">
                    We believe wedding photography should be more than just posed pictures. Our approach combines photojournalism with fine art to create images that tell your complete story.
                </p>
                <p class="text-gray-600 mb-4">
                    Every smile, every tear, every spontaneous moment of joy - these are the memories we preserve with artistry and care.
                </p>
                <p class="text-gray-600">
                    Our style is timeless, elegant, and focused on the genuine emotions that make your wedding day uniquely yours.
                </p>
            </div>
            <div class="md:order-1 rounded-lg overflow-hidden shadow-lg">
                <img src="/img/bg-about.jpg" alt="Our Philosophy" class="w-full h-auto">
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('contact') }}" class="cta-button inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Get in Touch
            </a>
        </div>
    </div>
</section>
@endsection
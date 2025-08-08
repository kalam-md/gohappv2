@extends('main')

@section('title', 'Wedding Photography')

@section('content')
<!-- Hero Section -->
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white" style="background-image: url('{{ $hero_section ? asset('storage/' . $hero_section->background_image) : '' }}'); background-size: cover; background-position: center;">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">WEDDING PHOTOGRAPHY</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            {{ $hero_section->title ?? '' }}
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            {{ $hero_section->subtitle ?? '' }}
        </p>
        <a href="{{ route('contact') }}" class="cta-button inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
            Book Your Wedding
        </a>
    </div>
</section>

<!-- Wedding Story Section -->
<section class="py-16 md:py-24 px-6 md:px-12 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Our Wedding Photography Approach
            </h2>
            <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div class="order-1">
                <h3 class="font-playfair text-2xl font-bold mb-4 text-gray-800">Documentary Style Storytelling</h3>
                <p class="text-gray-600 mb-4">
                    We specialize in capturing authentic moments as they naturally unfold, creating a visual narrative of your wedding day that you'll cherish forever.
                </p>
                <p class="text-gray-600">
                    Our photographers blend into your celebration, discreetly documenting the laughter, tears, and joy without interrupting the flow of your day.
                </p>
            </div>
            <div class="order-2 rounded-lg overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                     alt="Documentary Wedding Photography" 
                     class="w-full h-auto">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div class="order-2 md:order-1 rounded-lg overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                     alt="Elegant Portraits" 
                     class="w-full h-auto">
            </div>
            <div class="order-1 md:order-2">
                <h3 class="font-playfair text-2xl font-bold mb-4 text-gray-800">Elegant Portraits</h3>
                <p class="text-gray-600 mb-4">
                    While we love candid moments, we also create stunning portraits that showcase you at your best. Our team will guide you through natural poses that highlight your connection.
                </p>
                <p class="text-gray-600">
                    We carefully select locations and lighting to create magazine-worthy images you'll be proud to display in your home.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-1">
                <h3 class="font-playfair text-2xl font-bold mb-4 text-gray-800">Detail Oriented</h3>
                <p class="text-gray-600 mb-4">
                    Your wedding details tell a story - the flowers you chose, the rings you exchanged, the dress you fell in love with. We capture all these elements with artistic precision.
                </p>
                <p class="text-gray-600">
                    From the intricate lace on your gown to the carefully arranged table settings, we preserve every thoughtful detail you've spent months planning.
                </p>
            </div>
            <div class="order-2 rounded-lg overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                     alt="Wedding Details" 
                     class="w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Wedding Gallery Section -->
<section class="py-16 md:py-24 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16 px-6">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Our Wedding Gallery
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Browse through our collection of real weddings we've had the honor to photograph.
            </p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <!-- Masonry Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
            <!-- Gallery Item 1 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Wedding Ceremony" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Traditional Javanese Wedding</h3>
                    <p class="text-gray-500 text-sm">Bandung, 2023</p>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                     alt="Bridal Portrait" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Modern Minimalist Wedding</h3>
                    <p class="text-gray-500 text-sm">Jakarta, 2023</p>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                     alt="Wedding Couple" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Beachfront Wedding</h3>
                    <p class="text-gray-500 text-sm">Bali, 2022</p>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Wedding Details" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Vintage Theme Wedding</h3>
                    <p class="text-gray-500 text-sm">Yogyakarta, 2022</p>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Wedding Party" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Garden Wedding Celebration</h3>
                    <p class="text-gray-500 text-sm">Bogor, 2023</p>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Wedding Reception" 
                     class="w-full h-auto object-cover hover:scale-105 transition duration-500">
                <div class="p-4">
                    <h3 class="font-playfair text-xl font-bold mb-1">Luxury Ballroom Wedding</h3>
                    <p class="text-gray-500 text-sm">Jakarta, 2023</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('contact') }}" class="inline-block bg-gray-800 hover:bg-black text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                View Full Portfolio
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 md:py-24 px-6 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Kind Words From Couples
            </h2>
            <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">Sarah &amp; Kevin</h4>
                        <div class="flex text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Gauri of House captured our wedding day perfectly! They were so unobtrusive yet managed to get every important moment. The photos are absolutely stunning and bring tears to our eyes every time we look at them."
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="David" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">David &amp; Rina</h4>
                        <div class="flex text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "The team made us feel so comfortable in front of the camera. We're not used to being photographed, but they guided us naturally. The results were beyond our expectations - these photos will be family heirlooms!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-6 bg-amber-600 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-6">
            Ready to Capture Your Love Story?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Let's create beautiful memories of your wedding day that you'll treasure forever.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-white hover:bg-gray-100 text-amber-600 font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Get in Touch
            </a>
            <a href="https://wa.me/6287783641312?text=Saya%20ingin%20bertanya%20tentang%20layanan%20pernikahan%20Gauri%20of%20House" 
               target="_blank"
               class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-amber-600 font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Chat via WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
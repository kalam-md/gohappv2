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
            <!-- Product Card 1 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Basic Package" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Basic Package</h3>
                    <div class="text-amber-600 font-bold text-xl mb-4">Rp 8.000.000</div>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            8 Hours Coverage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            300+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            1 Photographer
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Online Gallery
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Basic%20Package%20Gauri%20of%20House" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Premium Package" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Premium Package</h3>
                    <div class="text-amber-600 font-bold text-xl mb-4">Rp 12.000.000</div>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Full Day Coverage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            500+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            2 Photographers
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Engagement Session
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Premium Album
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Premium%20Package%20Gauri%20of%20House" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                         alt="Luxury Package" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-playfair text-2xl font-bold mb-2 text-gray-800">Luxury Package</h3>
                    <div class="text-amber-600 font-bold text-xl mb-4">Rp 18.000.000</div>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Full Day + Next Day Coverage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            800+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            2 Photographers + Videographer
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Pre-Wedding & Engagement Session
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Luxury Photo Album + Video
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Drone Coverage
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Luxury%20Package%20Gauri%20of%20House" 
                       target="_blank"
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="mt-20">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-8 text-center text-gray-800">
                Additional Services
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Service 1 -->
                <div class="bg-gray-50 rounded-lg p-6 flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-camera-retro text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-playfair text-xl font-bold mb-2 text-gray-800">Engagement Session</h3>
                        <p class="text-gray-600 mb-4">Capture your love story before the big day with a romantic engagement photo session.</p>
                        <div class="text-amber-600 font-bold text-lg mb-2">Rp 2.500.000</div>
                        <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Engagement%20Session%20Gauri%20of%20House" 
                           target="_blank"
                           class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition duration-300 text-sm">
                            <i class="fab fa-whatsapp mr-1"></i> Book Now
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-50 rounded-lg p-6 flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-video text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-playfair text-xl font-bold mb-2 text-gray-800">Video Coverage</h3>
                        <p class="text-gray-600 mb-4">Professional wedding video to relive your special moments again and again.</p>
                        <div class="text-amber-600 font-bold text-lg mb-2">Rp 5.000.000</div>
                        <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Video%20Coverage%20Gauri%20of%20House" 
                           target="_blank"
                           class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition duration-300 text-sm">
                            <i class="fab fa-whatsapp mr-1"></i> Book Now
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-50 rounded-lg p-6 flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-book text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-playfair text-xl font-bold mb-2 text-gray-800">Premium Photo Album</h3>
                        <p class="text-gray-600 mb-4">High-quality printed photo album to preserve your memories in physical form.</p>
                        <div class="text-amber-600 font-bold text-lg mb-2">Rp 3.500.000</div>
                        <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Premium%20Photo%20Album%20Gauri%20of%20House" 
                           target="_blank"
                           class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition duration-300 text-sm">
                            <i class="fab fa-whatsapp mr-1"></i> Book Now
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-50 rounded-lg p-6 flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-drone-alt text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-playfair text-xl font-bold mb-2 text-gray-800">Drone Photography</h3>
                        <p class="text-gray-600 mb-4">Breathtaking aerial shots of your wedding venue and surroundings.</p>
                        <div class="text-amber-600 font-bold text-lg mb-2">Rp 2.000.000</div>
                        <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Drone%20Photography%20Gauri%20of%20House" 
                           target="_blank"
                           class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition duration-300 text-sm">
                            <i class="fab fa-whatsapp mr-1"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
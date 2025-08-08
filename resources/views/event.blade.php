@extends('main')

@section('title', 'Event Photography')

@section('content')
<!-- Hero Section -->
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white" style="background-image: url('{{ $hero_section ? asset('storage/' . $hero_section->background_image) : '' }}'); background-size: cover; background-position: center;">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">EVENT PHOTOGRAPHY</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            {{ $hero_section->title ?? '' }}
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            {{ $hero_section->subtitle ?? '' }}
        </p>
        <a href="{{ route('contact') }}" class="cta-button inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
            Book Event Coverage
        </a>
    </div>
</section>

<!-- Event Types Section -->
<section class="py-16 md:py-24 px-6 md:px-12 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Our Event Photography Services
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We cover a wide range of events with professional equipment and experienced photographers.
            </p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Corporate Events -->
            <div class="event-type-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Corporate Events" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="bg-amber-100 text-amber-600 p-2 rounded-full mr-3">
                            <i class="fas fa-briefcase text-lg"></i>
                        </div>
                        <h3 class="font-playfair text-xl font-bold text-gray-800">Corporate Events</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Conferences, seminars, product launches, and corporate gatherings captured professionally.
                    </p>
                    <ul class="text-gray-600 text-sm mb-4 space-y-1">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            High-resolution images
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Fast turnaround
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Professional editing
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20ingin%20bertanya%20tentang%20fotografi%20acara%20korporat" 
                       target="_blank"
                       class="inline-block bg-amber-600 hover:bg-amber-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Private Celebrations -->
            <div class="event-type-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Private Celebrations" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="bg-amber-100 text-amber-600 p-2 rounded-full mr-3">
                            <i class="fas fa-glass-cheers text-lg"></i>
                        </div>
                        <h3 class="font-playfair text-xl font-bold text-gray-800">Private Celebrations</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Birthdays, anniversaries, reunions, and family gatherings captured with warmth and joy.
                    </p>
                    <ul class="text-gray-600 text-sm mb-4 space-y-1">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Candid moments
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Group portraits
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Detail shots
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20ingin%20bertanya%20tentang%20fotografi%20acara%20keluarga" 
                       target="_blank"
                       class="inline-block bg-amber-600 hover:bg-amber-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300">
                        Inquire Now
                    </a>
                </div>
            </div>

            <!-- Special Occasions -->
            <div class="event-type-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Special Occasions" 
                         class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="bg-amber-100 text-amber-600 p-2 rounded-full mr-3">
                            <i class="fas fa-star text-lg"></i>
                        </div>
                        <h3 class="font-playfair text-xl font-bold text-gray-800">Special Occasions</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Cultural events, religious ceremonies, and unique celebrations documented with sensitivity.
                    </p>
                    <ul class="text-gray-600 text-sm mb-4 space-y-1">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Custom packages
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Multi-photographer option
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Full event coverage
                        </li>
                    </ul>
                    <a href="https://wa.me/6287783641312?text=Saya%20ingin%20bertanya%20tentang%20fotografi%20acara%20khusus" 
                       target="_blank"
                       class="inline-block bg-amber-600 hover:bg-amber-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300">
                        Inquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Gallery Section -->
<section class="py-16 md:py-24 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Event Gallery
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                A glimpse of our recent event photography work.
            </p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <!-- Auto-scrolling Carousel -->
        <div class="carousel-container mb-12">
            <div class="carousel-track">
                <!-- Event Images -->
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1540317580384-e5d500436cd9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Corporate Conference" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Corporate Conference</p>
                    </div>
                </div>
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Music Festival" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Music Festival</p>
                    </div>
                </div>
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Product Launch" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Product Launch</p>
                    </div>
                </div>
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Gala Dinner" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Gala Dinner</p>
                    </div>
                </div>
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Charity Event" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Charity Event</p>
                    </div>
                </div>
                <div class="carousel-item overflow-hidden rounded-lg shadow-md">
                    <img src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="Birthday Party" 
                         class="w-full h-64 object-cover">
                    <div class="p-4 bg-white">
                        <p class="text-sm text-gray-500">Birthday Party</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('contact') }}" class="inline-block bg-gray-800 hover:bg-black text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                View More Events
            </a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-16 md:py-24 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                Event Photography Packages
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Flexible options to suit different event needs and budgets.
            </p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Package -->
            <div class="package-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="font-playfair text-xl font-bold mb-2 text-center text-gray-800">Basic Coverage</h3>
                    <div class="text-amber-600 font-bold text-3xl text-center mb-4">Rp 5.000.000</div>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            4 Hours Coverage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            1 Photographer
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            200+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Online Gallery
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Basic%20Coverage%20Event%20Package" 
                       target="_blank"
                       class="block w-full bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-md text-center transition duration-300">
                        Book This Package
                    </a>
                </div>
            </div>

            <!-- Standard Package -->
            <div class="package-card bg-gray-50 rounded-lg overflow-hidden shadow-lg border-2 border-amber-500 transform hover:-translate-y-1 transition duration-300">
                <div class="p-6 border-b border-gray-200">
                    <div class="bg-amber-500 text-white text-xs font-bold uppercase px-3 py-1 rounded-full inline-block mb-3">
                        Most Popular
                    </div>
                    <h3 class="font-playfair text-xl font-bold mb-2 text-center text-gray-800">Standard Coverage</h3>
                    <div class="text-amber-600 font-bold text-3xl text-center mb-4">Rp 8.000.000</div>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            6 Hours Coverage
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            1-2 Photographers
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            350+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Online Gallery + USB
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            10 Printed Photos (6x8)
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Standard%20Coverage%20Event%20Package" 
                       target="_blank"
                       class="block w-full bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-md text-center transition duration-300">
                        Book This Package
                    </a>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="package-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="font-playfair text-xl font-bold mb-2 text-center text-gray-800">Premium Coverage</h3>
                    <div class="text-amber-600 font-bold text-3xl text-center mb-4">Rp 12.000.000</div>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Full Day Coverage (10 Hours)
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            2 Professional Photographers
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            500+ Edited Photos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Premium Album
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            20 Printed Photos (8x12)
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-amber-500 mr-2"></i>
                            Fast 48-Hour Preview
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <a href="https://wa.me/6287783641312?text=Saya%20tertarik%20dengan%20Premium%20Coverage%20Event%20Package" 
                       target="_blank"
                       class="block w-full bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-md text-center transition duration-300">
                        Book This Package
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 px-6 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-6">
            Have Questions About Our Event Services?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-300">
            We're happy to discuss your specific event needs and create a customized photography package.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Contact Us
            </a>
            <a href="https://wa.me/6287783641312?text=Saya%20ingin%20bertanya%20tentang%20layanan%20fotografi%20event" 
               target="_blank"
               class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
            </a>
        </div>
    </div>
</section>
@endsection
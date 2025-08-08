@extends('main')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="hero-section pt-32 pb-20 md:pt-40 md:pb-32 px-6 md:px-12 text-white" style="background-image: url('{{ $hero_section ? asset('storage/' . $hero_section->background_image) : '' }}'); background-size: cover; background-position: center;">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="name font-playfair text-lg md:text-xl text-amber-200 mb-2">GET IN TOUCH</div>
        <h1 class="tagline font-playfair text-4xl md:text-6xl font-bold mb-6 leading-tight">
            {{ $hero_section->title ?? '' }}<br>
            <span class="text-white">GAURI OF HOUSE</span>
        </h1>
        <p class="description text-white text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            {{ $hero_section->subtitle ?? '' }}
        </p>
    </div>
</section>

<!-- Contact Content Section -->
<section class="py-16 md:py-24 px-6 md:px-12 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Information -->
        <div class="contact-info">
            <h2 class="font-playfair text-3xl font-bold mb-6 text-gray-800">Our Studio</h2>
            
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 mb-1">Address</h3>
                        <p class="text-gray-600">Jalan Cibogo No. 49. Sukawarna, Sukajadi. <br>Bandung, Jawa Barat<br>Indonesia 40164</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 mb-1">Phone</h3>
                        <p class="text-gray-600">
                            <a href="tel:+622112345678" class="hover:text-amber-600 transition">(62) 821.2666.5541</a>
                        </p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="bg-amber-100 text-amber-600 p-3 rounded-full mr-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 mb-1">Email</h3>
                        <p class="text-gray-600">
                            <a href="mailto:info@gauriofhouse.com" class="hover:text-amber-600 transition">thehouseofgauri@gmail.com</a>
                        </p>
                    </div>
                </div>
                
                <div class="pt-4">
                    <h3 class="font-bold text-gray-800 mb-3">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon bg-gray-100 hover:bg-amber-600 hover:text-white text-gray-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon bg-gray-100 hover:bg-amber-600 hover:text-white text-gray-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon bg-gray-100 hover:bg-amber-600 hover:text-white text-gray-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="contact-form">
            <h2 class="font-playfair text-3xl font-bold mb-6 text-gray-800">Send Us a Message</h2>
            
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" required>
                    </div>
                </div>
                
                <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                    <select id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                        <option value="">Select a subject</option>
                        <option value="wedding">Wedding</option>
                        <option value="event">Event</option>
                        <option value="portrait">Photo Session</option>
                        <option value="other">Other Inquiry</option>
                    </select>
                </div>
                
                <div>
                    <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent" required></textarea>
                </div>
                
                <div>
                    <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-md transition duration-300 shadow-md">
                        Send Message
                    </button>
                </div>
            </form>
            
            <div class="mt-8 text-center">
                <p class="text-gray-600 mb-4">Prefer to chat directly?</p>
                <a href="https://wa.me/6287783641312" 
                   target="_blank"
                   class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md transition duration-300 shadow-md">
                    <i class="fab fa-whatsapp mr-2 text-xl"></i> Chat via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section h-96 w-full">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.923346365525!2d107.60873431529424!3d-6.897895769346693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64a945b61f7%3A0x3a7e2d1b4c92f8e2!2sJl.%20Photografi%20No.123%2C%20Bandung!5e0!3m2!1sen!2sid!4v1621234567890!5m2!1sen!2sid" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"
        class="filter grayscale hover:grayscale-0 transition duration-500">
    </iframe>
</section>

<!-- CTA Section -->
<section class="py-20 px-6 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold mb-6">
            Ready to Book Your Session?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-300">
            We're excited to work with you! Contact us today to discuss your photography needs.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="tel:+6287783641312" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                <i class="fas fa-phone-alt mr-2"></i> Call Now
            </a>
            <a href="https://wa.me/6282126665541" 
               target="_blank"
               class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 font-medium py-3 px-8 rounded-full transition duration-300 shadow-lg">
                <i class="fab fa-whatsapp mr-2"></i> WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
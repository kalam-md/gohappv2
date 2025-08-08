<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gauri of House - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        /* Hero image background */
        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        /* Navbar scroll effect */
        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Hamburger menu animation */
        .hamburger span {
            transition: all 0.3s ease;
            display: block;
            width: 25px;
            height: 2px;
            background-color: #333;
            margin-bottom: 5px;
        }
        
        .hamburger.open span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.open span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        /* Mobile menu animation */
        .mobile-menu {
            transition: all 0.3s ease;
            max-height: 0;
            overflow: hidden;
        }
        
        .mobile-menu.open {
            max-height: 500px;
        }
        
        /* WhatsApp float button hover effect */
        .whatsapp-float:hover .whatsapp-text {
            opacity: 1;
        }
        
        /* Carousel styles */
        .carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .carousel-track {
            display: flex;
            animation: scroll 30s linear infinite;
            width: calc(250px * 12); /* Adjust based on number of items */
        }
        
        .carousel-item {
            flex: 0 0 250px;
            margin: 0 15px;
            transition: transform 0.3s ease;
        }
        
        .carousel-item:hover {
            transform: scale(1.05);
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 6)); /* Half of total width */
            }
        }
        
        /* Pause animation on hover */
        .carousel-container:hover .carousel-track {
            animation-play-state: paused;
        }
        
        /* Gradient fade effect on sides */
        .carousel-container::before,
        .carousel-container::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            z-index: 2;
            pointer-events: none;
        }
        
        .carousel-container::before {
            left: 0;
            background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
        }
        
        .carousel-container::after {
            right: 0;
            background: linear-gradient(to left, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
        }
    </style>
    @stack('styles')
</head>
<body class="font-sans text-gray-800">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar fixed w-full z-50 py-4 px-6 md:px-12 flex justify-between items-center bg-white">
        <a href="/" class="logo">
            <img src="/img/gauri1.png" alt="GAURI OF HOUSE Logo" class="h-12">
        </a>
        
        <div class="nav-links hidden md:flex space-x-8 font-playfair">
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-black font-medium transition">About</a>
            <a href="{{ route('products') }}" class="text-gray-700 hover:text-black font-medium transition">Product</a>
            <a href="{{ route('wedding') }}" class="text-gray-700 hover:text-black font-medium transition">Wedding</a>
            <a href="{{ route('event') }}" class="text-gray-700 hover:text-black font-medium transition">Event</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-black font-medium transition">Contact</a>
        </div>
        
        <div class="hamburger md:hidden cursor-pointer" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu md:hidden bg-white w-full fixed top-20 left-0 z-40 shadow-md" id="mobileMenu">
        <div class="flex flex-col space-y-0 p-0">
            <a href="{{ route('about') }}" class="text-gray-700 hover:bg-gray-100 px-6 py-3 border-b border-gray-100">About</a>
            <a href="{{ route('products') }}" class="text-gray-700 hover:bg-gray-100 px-6 py-3 border-b border-gray-100">Product</a>
            <a href="{{ route('wedding') }}" class="text-gray-700 hover:bg-gray-100 px-6 py-3 border-b border-gray-100">Wedding</a>
            <a href="{{ route('event') }}" class="text-gray-700 hover:bg-gray-100 px-6 py-3 border-b border-gray-100">Event</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:bg-gray-100 px-6 py-3">Contact</a>
        </div>
    </div>

    <!-- Main Content -->
    @yield('content')
    
    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/6287783641312?text=Selamat%20datang%20di%20Gauri%20of%20House,%20ada%20yang%20bisa%20kami%20bantu?" 
           target="_blank"
           class="flex items-center justify-center w-14 h-14 md:w-16 md:h-16 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 relative">
            <i class="fab fa-whatsapp text-2xl md:text-3xl"></i>
            <div class="whatsapp-text absolute bottom-full right-0 mb-3 bg-white text-gray-800 text-sm p-3 rounded-md shadow-md w-48 opacity-0 transition-opacity duration-300">
                Selamat datang di Gauri of House, ada yang bisa kami bantu?
                <div class="absolute top-full right-3 w-0 h-0 border-l-8 border-r-8 border-b-8 border-l-transparent border-r-transparent border-b-white"></div>
            </div>
        </a>
    </div>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 px-6 md:px-12">
        <div class="footer-content max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="footer-column">
                <h3 class="font-playfair text-xl font-bold mb-4">About Us</h3>
                <p class="text-gray-400 mb-4">
                    GAURI OF HOUSE is a premium wedding and event photography service dedicated to capturing your most precious moments with elegance and artistry.
                </p>
                <div class="social-links flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-tiktok text-xl"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3 class="font-playfair text-xl font-bold mb-4">Quick Links</h3>
                <ul class="footer-links space-y-2">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-white transition">Our Products</a></li>
                    <li><a href="{{ route('wedding') }}" class="text-gray-400 hover:text-white transition">Wedding Services</a></li>
                    <li><a href="{{ route('event') }}" class="text-gray-400 hover:text-white transition">Event Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="font-playfair text-xl font-bold mb-4">Contact Info</h3>
                <div class="space-y-3 text-gray-400">
                    <p class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-3"></i> Bandung, Indonesia
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-phone mr-3"></i> (62) 821.2666.5541
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-envelope mr-3"></i> thehouseofgauri@gmail.com
                    </p>
                </div>
            </div>
        </div>
        
        <div class="copyright border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
            <p>&copy; <span id="currentYear"></span> GAURI OF HOUSE. All Rights Reserved.</p>
        </div>
    </footer>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
        
        // Hamburger menu functionality
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        
        hamburger.addEventListener('click', function() {
            this.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            
            // Toggle body overflow when menu is open
            if (mobileMenu.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close menu when clicking on a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });

        // Optional: Dynamic carousel item duplication for true infinite scroll
        document.addEventListener('DOMContentLoaded', function() {
            const carouselTrack = document.querySelector('.carousel-track');
            if (carouselTrack) {
                const items = carouselTrack.children;
                const itemCount = items.length;
                
                // Clone items for seamless looping
                for (let i = 0; i < itemCount; i++) {
                    const clone = items[i].cloneNode(true);
                    carouselTrack.appendChild(clone);
                }
                
                // Adjust animation duration based on item count
                const style = document.createElement('style');
                style.textContent = `
                    @keyframes scroll {
                        0% { transform: translateX(0); }
                        100% { transform: translateX(calc(-250px * ${itemCount})); }
                    }
                `;
                document.head.appendChild(style);
            }
        });
        
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
    @stack('scripts')
</body>
</html>
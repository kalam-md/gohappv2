<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-gray-100 font-sans">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <!-- Mobile sidebar toggle -->
        <div class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 lg:hidden" id="sidebarBackdrop"></div>
        
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 z-50 w-64 transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out bg-gray-800 text-white" id="sidebar">
            <div class="flex items-center justify-between px-4 py-3 border-b border-gray-700">
                <div class="flex items-center">
                    <img src="/img/gauri1.png" alt="Logo" class="h-8 mr-2">
                    <span class="text-xl font-semibold">Gauri Admin</span>
                </div>
                <button class="lg:hidden text-gray-400 hover:text-white focus:outline-none" id="closeSidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <nav class="mt-6">
                <div class="px-4 mb-6">
                    <p class="text-gray-400 uppercase text-xs font-semibold tracking-wider">Main</p>
                </div>
                
                <a href="{{ route('dashboard.home') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>

                <a href="/" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                    <i class="fas fa-globe mr-3"></i>
                    Landing Page
                </a>
                
                <div class="px-4 mt-6 mb-2">
                    <p class="text-gray-400 uppercase text-xs font-semibold tracking-wider">Content Management</p>
                </div>
                
                <a href="{{ route('dashboard.hero-sections.index') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
                    <i class="fas fa-image mr-3"></i>
                    Hero Sections
                </a>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-64">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-3">
                    <div class="flex items-center">
                        <button class="lg:hidden text-gray-500 focus:outline-none" id="openSidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="ml-4 text-xl font-semibold text-gray-800">@yield('header')</h1>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="relative">
                            <button class="flex items-center focus:outline-none" id="userMenuButton">
                                <span class="mr-2 text-gray-700">Admin User</span>
                                <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin+User" alt="Admin User">
                            </button>
                            
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden z-50" id="userMenu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                {{-- <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-6">
                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('openSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.remove('-translate-x-full');
            document.getElementById('sidebarBackdrop').classList.remove('hidden');
        });
        
        document.getElementById('closeSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
            document.getElementById('sidebarBackdrop').classList.add('hidden');
        });
        
        document.getElementById('sidebarBackdrop').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
            this.classList.add('hidden');
        });
        
        // Toggle user dropdown
        document.getElementById('userMenuButton').addEventListener('click', function() {
            document.getElementById('userMenu').classList.toggle('hidden');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('userMenu');
            const userMenuButton = document.getElementById('userMenuButton');
            
            if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
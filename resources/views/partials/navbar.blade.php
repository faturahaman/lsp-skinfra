<nav class="w-full py-6 px-4 md:px-8 flex items-center fixed z-50   transition-all duration-300">
    <div class="flex-1">
        <div class="inline-block rounded-lg overflow-hidden">
            <a href="{{ route('home') }}">
                <img src="{{ asset('asset/logos.png') }}" alt="Logo Brand" class="h-12 w-auto">
            </a>
        </div>
    </div>

    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2">
        <div class="bg-custom-cream border border-custom-border rounded-full px-8 py-2 flex space-x-8 shadow-sm">
            
            <a href="{{ route('home') }}" 
               class="{{ request()->routeIs('home') ? 'text-amber-600' : 'text-gray-700' }} font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Beranda
            </a>

            <a href="{{ route('profile') }}" 
               class="{{ request()->routeIs('profile') ? 'text-amber-600' : 'text-gray-700' }} font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Profil
            </a>

            <a href="{{ route('services') }}" 
               class="{{ request()->routeIs('services') ? 'text-amber-600' : 'text-gray-700' }} font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Layanan
            </a>

            <a href="{{ route('articles') }}" 
               class="{{ request()->routeIs('articles*') ? 'text-amber-600' : 'text-gray-700' }} font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Artikel
            </a>
             <a href="{{ url('/#gallery') }}" 
               class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Galeri
            </a>

            <a href="{{ url('/#contact') }}" 
               class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
               hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
               before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
               before:transition-all before:duration-300 hover:before:w-3/4">
                Kontak
            </a>
        </div>
    </div>

    <div class="flex-1 flex justify-end md:hidden">
        <button id="menu-btn" class="text-gray-700 focus:outline-none p-2 rounded hover:bg-gray-100">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>

<div id="mobile-menu" class="hidden fixed inset-0 bg-white/95 backdrop-blur-md z-[60] flex flex-col justify-center items-center space-y-8 text-xl md:hidden transition-opacity duration-300">
    <button id="close-menu-btn" class="absolute top-6 right-6 text-gray-700 hover:text-red-500 p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <a href="{{ route('home') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Beranda</a>
    <a href="{{ route('profile') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Profil</a>
    <a href="{{ route('services') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Layanan</a>
    <a href="{{ route('articles') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Artikel</a>
    <a href="{{ url('/#gallery') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Kontak</a>
    <a href="{{ url('/#contact') }}" class="text-gray-700 hover:text-custom-gold font-bold transition duration-300 text-2xl">Kontak</a>
</div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    function toggleMenu() {
        mobileMenu.classList.toggle('hidden');
    }

    menuBtn.addEventListener('click', toggleMenu);
    closeMenuBtn.addEventListener('click', toggleMenu);
</script>
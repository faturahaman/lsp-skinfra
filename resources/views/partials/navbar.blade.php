<nav class="w-full py-6 px-4 md:px-8 flex items-center fixed z-50">
    <!-- Logo -->
    <div class="flex-1">
      <div class="inline-block rounded-lg overflow-hidden" style="">
    <img src="asset/logos.png" alt="Logo Brand" class="h-12 w-auto">
</div>

    </div>

    <!-- Menu Desktop (Center) -->
   <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2">
    <div class="bg-custom-cream border border-custom-border rounded-full px-8 py-2 flex space-x-8 shadow-sm">
       <a href="#" class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
           hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
           before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
           before:transition-all before:duration-300 hover:before:w-3/4">
            Beranda
</a>
<a href="#" class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
           hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
           before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
           before:transition-all before:duration-300 hover:before:w-3/4">
            Profil
</a>
<a href="#" class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
           hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
           before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
           before:transition-all before:duration-300 hover:before:w-3/4">
            Layanan
</a>
<a href="#" class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
           hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
           before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
           before:transition-all before:duration-300 hover:before:w-3/4">
            Artikel
</a>
<a href="#" class="text-gray-700 font-medium px-4 py-2 rounded-lg transition-all duration-300 relative
           hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 hover:text-amber-600 hover:shadow-md hover:scale-105
           before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:w-0 before:h-0.5 before:bg-amber-500 
           before:transition-all before:duration-300 hover:before:w-3/4">
            Kontak
</a>
    </div>
</div>


    <!-- Hamburger / Mobile Button -->
    <div class="flex-1 flex justify-end md:hidden">
        <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-0 left-0 w-full h-full bg-white bg-opacity-95 z-40 flex flex-col justify-center items-center space-y-6 text-xl md:hidden">
    <a href="#" class="text-gray-700 hover:text-custom-gold font-semibold transition duration-300">Beranda</a>
    <a href="#" class="text-gray-700 hover:text-custom-gold font-semibold transition duration-300">Profil</a>
    <a href="#" class="text-gray-700 hover:text-custom-gold font-semibold transition duration-300">Layanan</a>
    <a href="#" class="text-gray-700 hover:text-custom-gold font-semibold transition duration-300">Artikel</a>
    <a href="#" class="text-gray-700 hover:text-custom-gold font-semibold transition duration-300">Kontak</a>
</div>

<!-- Script Toggle Mobile -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

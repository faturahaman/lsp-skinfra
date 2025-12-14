<section id="about" class="relative bg-custom-gold pt-32 pb-20 mt-12 md:mt-0">
    
    <div class="absolute left-1/2 top-0 transform -translate-x-1/2 -translate-y-1/2 z-30 w-[90%] md:w-[900px]">
        <div class="bg-[#FDF5E8] border border-[#E6CDA6] rounded-2xl p-6 md:p-8 shadow-xl flex flex-col md:flex-row justify-between items-center gap-6 text-center md:text-left">
            <div>
                <h4 class="text-gray-900 font-bold text-lg mb-1">Hubungi Kami jika ingin konsultasi</h4>
                <p class="text-gray-600 text-sm">Tim kami siap membantu Anda 24/7 melalui berbagai saluran komunikasi</p>
            </div>
             <x-button variant="primary" onclick="window.location.href='{{ url('/#contact') }}'">
                Hubungi kami
            </x-button>
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-12">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            
            <div class="w-full lg:w-1/2 text-white">
                <div class="mb-4">
                     @if($profiles && $profiles->logo)
                        <img src="{{ asset('storage/' . $profiles->logo) }}" alt="Logo" class="h-12 w-auto "> 
                     @else
                        <h2 class="text-2xl font-bold">LOGO</h2>
                     @endif
                </div>

                <h2 class="text-3xl md:text-4xl font-bold mb-6">Tentang Perusahaan Kami</h2>
                
                <div class="mb-8 text-yellow-50 leading-relaxed text-sm md:text-base prose prose-invert max-w-none">
                    @if($profiles)
                        {!! $profiles->deskripsi !!}
                    @else
                        <p>Silakan isi deskripsi perusahaan di Admin Panel.</p>
                    @endif
                </div>

                <a href="{{ route('profile') }}" class="inline-block bg-white text-custom-gold font-bold px-8 py-3 rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                    Profil Lengkap
                </a>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-xl overflow-hidden border-2 border-white/30 shadow-lg h-40 md:h-48">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=500&auto=format&fit=crop" 
                             alt="Hiasan 1" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                    <div class="rounded-xl overflow-hidden border-2 border-white/30 shadow-lg h-40 md:h-48">
                        <img src="https://images.unsplash.com/photo-1558252277-c9fd8d348a21?q=80&w=500&auto=format&fit=crop" 
                             alt="Hiasan 2" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                    <div class="rounded-xl overflow-hidden border-2 border-white/30 shadow-lg h-40 md:h-48">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=500&auto=format&fit=crop" 
                             alt="Hiasan 3" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                    <div class="rounded-xl overflow-hidden border-2 border-white/30 shadow-lg h-40 md:h-48">
                        <img src="https://images.unsplash.com/photo-1598555849842-70b784a6256f?q=80&w=500&auto=format&fit=crop" 
                             alt="Hiasan 4" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
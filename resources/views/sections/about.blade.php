<section id="about" class="relative bg-custom-gold 
    pt-24 md:pt-32 pb-16 md:pb-20 
    mt-16 md:mt-0">

    {{-- CTA CARD --}}
    <div class="md:absolute md:left-1/2 md:top-0 md:-translate-x-1/2 md:-translate-y-1/2 
                z-30 w-full md:w-[900px] px-4 md:px-0">
        <div class="bg-[#FDF5E8] border border-[#E6CDA6] 
                    rounded-xl md:rounded-2xl 
                    p-5 md:p-8 shadow-xl 
                    flex flex-col md:flex-row 
                    justify-between items-center 
                    gap-4 md:gap-6 
                    text-center md:text-left">
            <div>
                <h4 class="text-gray-900 font-bold text-base md:text-lg mb-1">
                    Hubungi Kami jika ingin konsultasi
                </h4>
                <p class="text-gray-600 text-xs md:text-sm">
                    Tim kami siap membantu Anda 24/7 melalui berbagai saluran komunikasi
                </p>
            </div>

            <x-button variant="primary"
                onclick="window.location.href='{{ url('/#contact') }}'">
                Hubungi kami
            </x-button>
        </div>
    </div>
    <div class="container mx-auto px-4 md:px-12 mt-8 md:mt-0">
        <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20">

            {{-- TEXT --}}
            <div class="w-full lg:w-1/2 text-white">

                <div class="mb-4 flex justify-center lg:justify-start">
                    @if($profiles && $profiles->logo)
                        <img src="{{ asset('storage/' . $profiles->logo) }}" 
                             alt="Logo" class="h-10 md:h-12 w-auto">
                    @else
                        <h2 class="text-xl font-bold">LOGO</h2>
                    @endif
                </div>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-5 md:mb-6 text-center lg:text-left">
                    Tentang Perusahaan Kami
                </h2>

                <div class="mb-6 md:mb-8 
                            text-yellow-50 
                            leading-relaxed 
                            text-sm sm:text-base 
                            prose prose-invert max-w-none">
                    @if($profiles)
                        {!! $profiles->deskripsi !!}
                    @else
                        <p>Silakan isi deskripsi perusahaan di Admin Panel.</p>
                    @endif
                </div>

                <div class="text-center lg:text-left">
                    <a href="{{ route('profile') }}"
                       class="inline-block bg-white text-custom-gold 
                              font-bold px-6 md:px-8 py-3 
                              rounded-lg shadow-md 
                              hover:bg-gray-100 transition">
                        Profil Lengkap
                    </a>
                </div>

            </div>

            {{-- IMAGE GRID --}}
            {{-- IMAGE GRID --}}
<div class="w-full lg:w-1/2">
    <div class="grid grid-cols-2 gap-3 md:gap-4">

        <div class="rounded-lg md:rounded-xl overflow-hidden 
                    border border-white/30 shadow-lg 
                    h-28 sm:h-32 md:h-48">
            <img src="/assetLSP/1.jpeg" alt="About Image 1"
                 class="w-full h-full object-cover 
                        hover:scale-110 transition duration-500">
        </div>

        <div class="rounded-lg md:rounded-xl overflow-hidden 
                    border border-white/30 shadow-lg 
                    h-28 sm:h-32 md:h-48">
            <img src="/assetLSP/2.jpeg" alt="About Image 2"
                 class="w-full h-full object-cover 
                        hover:scale-110 transition duration-500">
        </div>

        <div class="rounded-lg md:rounded-xl overflow-hidden 
                    border border-white/30 shadow-lg 
                    h-28 sm:h-32 md:h-48">
            <img src="/assetLSP/3.jpeg" alt="About Image 3"
                 class="w-full h-full object-cover 
                        hover:scale-110 transition duration-500">
        </div>

        <div class="rounded-lg md:rounded-xl overflow-hidden 
                    border border-white/30 shadow-lg 
                    h-28 sm:h-32 md:h-48">
            <img src="/assetLSP/4.jpeg" alt="About Image 4"
                 class="w-full h-full object-cover 
                        hover:scale-110 transition duration-500">
        </div>

    </div>
</div>


        </div>
    </div>
</section>

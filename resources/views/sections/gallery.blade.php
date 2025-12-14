<section id="gallery" class="py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 text-center">

        <!-- Header -->
        <div class="mb-16">
            <h3 class="text-3xl md:text-4xl font-bold text-custom-gold inline-block relative pb-2 mb-4">
                Galeri
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-custom-gold/50 rounded-full"></span>
            </h3>
            <p class="text-custom-gold text-lg font-medium">
                Temukan dokumentasi proyek terbaru kami
            </p>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-6 max-w-6xl mx-auto">

            @foreach($galeries as $index => $gal)
                @php
                    $colspan = $index < 3 ? 2 : 3;
                @endphp

                <div class="relative rounded-lg overflow-hidden border-4 border-custom-gold shadow-md 
                            h-64 md:h-80 col-span-{{ $colspan }} group">

                    {{-- IMAGE --}}
                    @if($gal->gambar)
                        <img src="{{ asset('storage/' . $gal->gambar) }}"
                             alt="{{ $gal->judul }}"
                             class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500">
                            No Image
                        </div>
                    @endif

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/10 transition-all duration-700 group-hover:bg-black/40"></div>

                    <!-- Title -->
                    <div class="absolute bottom-4 left-4 text-white font-bold text-lg z-10 
                                transition-all duration-500 transform group-hover:-translate-y-2">
                        {{ $gal->judul }}
                    </div>

                </div>
            @endforeach

        </div>
    </div>
</section>

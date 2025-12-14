@php
    // Dummy data galeri
    $galeries = [
        [
            'src' => 'https://images.unsplash.com/photo-1599819777150-14e304f58f50?q=80&w=600&auto=format&fit=crop',
            'title' => 'Image 1',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=600&auto=format&fit=crop',
            'title' => 'Image 2',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop',
            'title' => 'Image 3',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1558905545-04de8ce392b6?q=80&w=1000&auto=format&fit=crop',
            'title' => 'Image 4',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1557429287-b2e26467fc2b?q=80&w=600&auto=format&fit=crop',
            'title' => 'Image 5',
        ],
    ];
@endphp

<section id="gallery" class="py-24 bg-white">
    <div class="container mx-auto px-4 md:px-12 text-center">
        <!-- Header -->
        <div class="mb-16">
            <h3 class="text-3xl md:text-4xl font-bold text-custom-gold inline-block relative pb-2 mb-4">
                Galeri
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-custom-gold/50 rounded-full"></span>
            </h3>
            <p class="text-custom-gold text-lg font-medium">
                Temukan Artikel Menarik Terbaru kami
            </p>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-2 md:grid-cols-6 gap-4 md:gap-6 max-w-6xl mx-auto">

            @foreach(array_slice($galeries, 0, 5) as $index => $gal)
                @php
                    // Mengatur col-span sesuai layout manual
                    $colspan = ($index < 3) ? 2 : 3;
                @endphp
                <div class="relative rounded-lg overflow-hidden border-4 border-custom-gold shadow-md h-64 md:h-80 col-span-{{ $colspan }} group">
                    <img src="{{ $gal['src'] }}" 
                         alt="{{ $gal['title'] }}" 
                         class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/10 transition-all duration-700 ease-in-out group-hover:bg-black/40"></div>
                    <!-- Teks -->
                    <div class="absolute bottom-4 left-4 text-white font-bold text-lg z-10 transition-all duration-500 ease-out transform group-hover:-translate-y-2 group-hover:opacity-100 opacity-90">
                        {{ $gal['title'] }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

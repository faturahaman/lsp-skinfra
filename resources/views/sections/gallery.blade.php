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
                    $colspan = 2;
                @endphp

            @include('partials.card-galery')
            @endforeach

        </div>
    </div>
</section>

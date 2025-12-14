<section id="articles" class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h3 class="text-3xl md:text-4xl font-bold text-custom-gold inline-block relative pb-2 mb-4">
                Artikel
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-custom-gold/50 rounded-full"></span>
            </h3>
            <p class="text-custom-gold text-lg font-medium">
                Temukan artikel-artikel menarik terbaru kami
            </p>
        </div>

        <!-- Artikel Cards -->
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-0 max-w-6xl mx-auto mb-16 relative">
            
         

            @foreach($articles as $index => $item)
                @php
                    $isCenter = $index === 1;

                    $sideClasses = "w-full md:w-[30%] z-0 scale-100 md:scale-90 opacity-90 hover:opacity-100 transition duration-500";
                    $centerClasses = "w-full md:w-[35%] z-20 scale-100 md:scale-110 shadow-2xl my-6 md:my-0 ring-4 ring-white";
                @endphp

                <div class="relative flex-shrink-0 {{ $isCenter ? $centerClasses : $sideClasses }}">
                    <div class="bg-custom-gold shadow-lg overflow-hidden {{ $isCenter ? 'rounded-lg' : 'rounded-md' }}">
                        
                        <!-- Gambar -->
                        <div class="relative h-56 md:h-64 overflow-hidden">
                            <img src="{{ asset('storage/' . $item['gambar']) }}" 
                                 alt="{{ $item->judul }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>

                      <!-- Konten -->
                    <div class="p-6 text-white text-left">
                        <h4 class="text-xl font-bold mb-2">
                            {{ $item->judul }}
                        </h4>

                        <div class="text-white/90 text-sm font-light leading-relaxed 
                                    line-clamp-3 prose prose-invert max-w-none">
                            {!! $item->konten !!}
                        </div>
                    </div>

                    </div>
                </div>
            @endforeach

        </div>
        
        <div class="flex justify-center">
            <a href="/articles">

                <x-button 
                variant="outline" 
                class="!px-10 !py-3 !border-custom-gold !text-custom-gold hover:!bg-custom-gold hover:!text-white transition-transform transform hover:scale-105" >
                Lihat Lebih banyak!
            </x-button>
        </a>
        </div>

    </div>
</section>

<section id="articles" class="py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        
        <div class="text-center mb-16">
            <h3 class="text-3xl md:text-4xl font-bold text-custom-gold inline-block relative pb-2 mb-4">
                Artikel
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-custom-gold/50 rounded-full"></span>
            </h3>
            <p class="text-custom-gold text-lg font-medium">
                Temukan artikel-artikel menarik terbaru kami
            </p>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-0 max-w-6xl mx-auto mb-16 relative">
            
            @foreach($articles as $index => $item)
                @php
                    // Logika Styling Layout Asli Kamu
                    $isCenter = $index === 1;

                    // Class untuk Wrapper (Posisi & Ukuran)
                    $wrapperClasses = $isCenter 
                        ? "w-full md:w-[35%] z-20 scale-100 md:scale-110 my-6 md:my-0 ring-4 ring-white shadow-2xl rounded-lg" 
                        : "w-full md:w-[30%] z-0 scale-100 md:scale-90 opacity-90 hover:opacity-100 transition duration-500";
                    
                    // Class  Style Component (Border Radius & Shadow)
                    $cardStyle = $isCenter 
                        ? "rounded-lg shadow-none" 
                        : "rounded-md shadow-lg"; 
                @endphp

                <div class="relative flex-shrink-0 {{ $wrapperClasses }}">
                    {{-- MEMANGGIL PARTIAL --}}
                    @include('partials.card-article', [
                        'item' => $item, 
                        'extraClasses' => $cardStyle
                    ])
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
{{-- File: resources/views/partials/card-article.blade.php --}}

{{-- Kita terima variabel $extraClasses (opsional) untuk menampung class dinamis --}}
<div class="bg-custom-gold overflow-hidden flex flex-col h-full group transition-all duration-300 {{ $extraClasses ?? 'rounded-lg shadow-lg hover:shadow-2xl' }}">
    
    <a href="{{ url('/articles/' . $item->id) }}" class="flex flex-col h-full">
        
        {{-- GAMBAR --}}
        <div class="relative h-56 md:h-64 overflow-hidden">
            @if(isset($item['gambar']) && $item['gambar'])
                <img src="{{ asset('storage/' . $item['gambar']) }}" 
                     alt="{{ $item->judul }}" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            @else
                <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500">
                    No Image
                </div>
            @endif
            
            {{-- Overlay halus saat hover --}}
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
        </div>

        {{-- KONTEN --}}
        <div class="p-6 text-white text-left flex-grow flex flex-col">
            <h4 class="text-xl font-bold mb-2 line-clamp-2 leading-tight">
                {{ $item->judul }}
            </h4>

            <div class="text-white/90 text-sm font-light leading-relaxed line-clamp-3 prose prose-invert max-w-none flex-grow mb-4">
                {!! $item->konten !!}
            </div>

            <div class="mt-auto border-t border-white/20 pt-4">
                <span class="text-white text-sm font-semibold inline-flex items-center gap-2 group-hover:gap-3 transition-all">
                    Baca Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </span>
            </div>
        </div>
    </a>
</div>
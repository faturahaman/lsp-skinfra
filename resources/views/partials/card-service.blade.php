{{-- File: resources/views/partials/card-service.blade.php --}}

<div class="bg-white p-2 rounded-2xl shadow-xl transform hover:-translate-y-2 transition duration-300 border border-gray-100 h-full flex flex-col relative group">
    
    <div class="relative h-[500px] rounded-xl overflow-hidden w-full">

        {{-- IMAGE LOGIC --}}
        @if($service->gambar)  
            <img src="{{ asset('storage/' . $service->gambar) }}"
                 alt="{{ $service->nama }}"
                 class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
        @else
            {{-- Fallback jika tidak ada gambar --}}
            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 flex-col gap-2">
                <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="text-sm font-medium">No Image</span>
            </div>
        @endif

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90"></div>

        {{-- CONTENT --}}
        <div class="absolute bottom-0 left-0 w-full p-6 md:p-8 text-left flex flex-col justify-end h-full">
            
            <h4 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight drop-shadow-md">
                {{ $service->nama }}
            </h4>

            <div class="w-12 h-1 bg-custom-gold mb-4"></div>

            <p class="text-gray-200 text-sm md:text-base leading-relaxed mb-8 line-clamp-3 opacity-90">
                {{ $service->deskripsi }}
            </p>

            <div>
                {{-- Menggunakan link WhatsApp agar seragam dan langsung action --}}
                <div 
                   class="inline-flex items-center gap-3 bg-white text-custom-gold font-bold px-6 py-3 rounded-lg hover:bg-custom-gold hover:text-white transition-all duration-300 shadow-lg group-hover:shadow-custom-gold/50">
               Rerata   Rp {{ number_format($service->harga ?? 0, 0, ',', '.') }}
                </div>
            </div>
        </div>

    </div>
</div>
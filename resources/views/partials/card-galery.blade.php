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
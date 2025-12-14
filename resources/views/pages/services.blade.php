@extends('layouts.app')

@section('content')

    <div class="pt-32 pb-20 min-h-screen bg-gray-50">
        <div class="container mx-auto px-4 md:px-12">
            
            <div class="text-center mb-10 max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-custom-gold mb-6">
                    Layanan & Solusi
                </h1>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Kami menyediakan berbagai layanan konstruksi dan properti dengan standar kualitas tinggi 
                    untuk mewujudkan visi infrastruktur impian Anda.
                </p>
                <div class="w-24 h-1 bg-custom-gold mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="flex justify-center mb-16">
                <form action="{{ url()->current() }}" method="GET" class="w-full max-w-3xl relative">
                    <input type="text" 
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari layanan..." 
                           class="w-full bg-[#E0B769] text-white placeholder-white/90 py-4 pl-8 pr-16 rounded-lg focus:outline-none focus:ring-4 focus:ring-custom-gold/50 text-lg shadow-md transition placeholder:font-medium">
                    
                    <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

                @forelse($services as $service)
                    <div class="bg-white p-2 rounded-2xl shadow-xl transform hover:-translate-y-2 transition duration-300 border border-gray-100 h-full flex flex-col">
                        
                        <div class="relative h-[500px] rounded-xl overflow-hidden group w-full">

                            {{-- IMAGE --}}
                            @if($service->gambar)  
                                <img src="{{ asset('storage/' . $service->gambar) }}"
                                     alt="{{ $service->nama }}"
                                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 flex-col gap-2">
                                    <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span>No Image</span>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90"></div>

                            {{-- CONTENT --}}
                            <div class="absolute bottom-0 left-0 w-full p-8 text-left flex flex-col justify-end h-full">
                                
                                <h4 class="text-3xl font-bold text-white mb-3 leading-tight drop-shadow-md">
                                    {{ $service->nama }}
                                </h4>

                                <div class="w-12 h-1 bg-custom-gold mb-4"></div>

                                <p class="text-gray-200 text-sm md:text-base leading-relaxed mb-8 line-clamp-3 opacity-90">
                                    {{ $service->deskripsi }}
                                </p>

                                <div>
                                    <a href="https://wa.me/628123456789?text=Halo,%20saya%20tertarik%20dengan%20layanan%20{{ urlencode($service->nama) }}" target="_blank"
                                       class="inline-flex items-center gap-3 bg-white text-custom-gold font-bold px-6 py-3 rounded-lg hover:bg-custom-gold hover:text-white transition-all duration-300 shadow-lg group-hover:shadow-custom-gold/50">
                                        Konsultasi Sekarang
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-3 text-center py-20">
                        <div class="inline-block p-4 rounded-full bg-gray-100 mb-4">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-600">
                            {{ request('search') ? 'Layanan "'.request('search').'" tidak ditemukan.' : 'Belum ada layanan yang ditambahkan.' }}
                        </h3>
                        @if(request('search'))
                            <a href="{{ url()->current() }}" class="text-custom-gold mt-2 inline-block font-semibold hover:underline">Reset Pencarian</a>
                        @endif
                    </div>
                @endforelse

            </div>

        </div>
    </div>

@endsection
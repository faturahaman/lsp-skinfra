@extends('layouts.app')

@section('content')

    <section class="py-24 min-h-screen bg-white">
        <div class="container mx-auto px-4 md:px-8">
            
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-custom-gold inline-block relative pb-2 mb-4">
                    Artikel & Berita Terbaru
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-custom-gold/50 rounded-full"></span>
                </h3>
                <p class="text-custom-gold text-lg font-medium max-w-2xl mx-auto">
                    Temukan wawasan mendalam, tips praktis, dan berita terkini seputar dunia konstruksi dan properti.
                </p>
            </div>

            <div class="flex justify-center mb-16">
                <form action="{{ route('articles') }}" method="GET" class="w-full max-w-3xl relative">
                    <input type="text" 
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Cari artikel..." 
                           class="w-full bg-[#E0B769] text-white placeholder-white/80 py-4 pl-8 pr-16 rounded-full focus:outline-none focus:ring-4 focus:ring-custom-gold/50 text-lg shadow-md transition placeholder:font-medium">
                    
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16 max-w-7xl mx-auto">
                @forelse($articles as $item)
                    <div class="bg-custom-gold shadow-lg rounded-lg overflow-hidden flex flex-col h-full hover:shadow-2xl transition-shadow duration-300 group">
                        <a href="/articles/{{$item->id}}" class="flex flex-col h-full">
                            
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ asset('storage/' . $item['gambar']) }}" 
                                     alt="{{ $item->judul }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>

                            <div class="p-6 text-white text-left flex-grow flex flex-col">
                                <h4 class="text-xl font-bold mb-3 line-clamp-2">
                                    {{ $item->judul }}
                                </h4>

                                <div class="text-white/90 text-sm font-light leading-relaxed line-clamp-3 prose prose-invert max-w-none mb-4 flex-grow">
                                    {!! $item->konten !!}
                                </div>
                                
                                <span class="text-white text-sm font-semibold underline decoration-white/50 group-hover:decoration-white transition mt-auto inline-block">
                                    Baca Selengkapnya
                                </span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-3 text-center py-10">
                        <p class="text-gray-500 text-lg">Tidak ada artikel ditemukan.</p>
                    </div>
                @endforelse
            </div>

            @if ($articles->hasPages())
            <div class="flex justify-center items-center gap-2 select-none">
                
                {{-- Tombol Previous --}}
                @if ($articles->onFirstPage())
                    <button disabled class="w-10 h-10 flex items-center justify-center rounded bg-[#E0B769]/50 text-white cursor-not-allowed">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                @else
                    <a href="{{ $articles->previousPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded bg-[#E0B769] text-white hover:bg-custom-gold transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </a>
                @endif

                {{-- Nomor Halaman (Looping) --}}
                @foreach ($articles->links()->elements[0] as $page => $url)
                    @if ($page == $articles->currentPage())
                        {{-- Halaman Aktif (Warna Emas Pekat + Shadow) --}}
                        <span class="w-10 h-10 flex items-center justify-center rounded bg-custom-gold text-white font-bold shadow-md ring-2 ring-white/50 cursor-default">
                            {{ $page }}
                        </span>
                    @else
                        {{-- Halaman Tidak Aktif --}}
                        <a href="{{ $url }}" class="w-10 h-10 flex items-center justify-center rounded bg-[#E0B769] text-white hover:bg-custom-gold transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach

                {{-- Tombol Next --}}
                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded bg-[#E0B769] text-white hover:bg-custom-gold transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                @else
                    <button disabled class="w-10 h-10 flex items-center justify-center rounded bg-[#E0B769]/50 text-white cursor-not-allowed">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                @endif
                
            </div>
            @endif
            </div>
    </section>

@endsection
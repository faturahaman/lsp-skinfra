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

            {{-- SEARCH BAR (Tetap sama) --}}
            <div class="flex justify-center mb-16">
                <form action="{{ route('articles') }}" method="GET" class="w-full max-w-3xl relative">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..." class="w-full bg-[#E0B769] text-white placeholder-white/80 py-4 pl-8 pr-16 rounded-full focus:outline-none focus:ring-4 focus:ring-custom-gold/50 text-lg shadow-md transition placeholder:font-medium">
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </button>
                </form>
            </div>

            {{-- GRID ARTIKEL --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16 max-w-7xl mx-auto">
                @forelse($articles as $item)
                    
                    {{-- PANGGIL PARTIAL COMPONENT --}}
                    {{-- Di sini kita tidak perlu kirim 'extraClasses', dia akan pakai default rounded-lg --}}
                    @include('partials.card-article', ['item' => $item])

                @empty
                    <div class="col-span-1 md:col-span-3 text-center py-10">
                        <p class="text-gray-500 text-lg">Tidak ada artikel ditemukan.</p>
                    </div>
                @endforelse
            </div>

            {{-- PAGINATION --}}
            @if ($articles->hasPages())
                {{-- (Kode Pagination kamu tetap sama, copy paste dari sebelumnya) --}}
                <div class="flex justify-center items-center gap-2 select-none">
                     {{ $articles->appends(request()->query())->links('pagination::tailwind') }} 
                     {{-- Atau gunakan kode manual pagination kamu sebelumnya --}}
                </div>
            @endif

        </div>
    </section>

@endsection
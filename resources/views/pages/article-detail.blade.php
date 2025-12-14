@extends('layouts.app')

@section('content')

    <div class="pt-32 pb-20 min-h-screen bg-white">
        
        <div class="container mx-auto px-4 md:px-8">
            
            <div class="mb-6 max-w-5xl mx-auto">
                <a href="{{ route('articles') }}" class="inline-flex items-center text-custom-gold font-bold hover:underline gap-2 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Kembali ke Daftar Artikel
                </a>
            </div>

            <div class="bg-custom-gold rounded-[40px] p-6 md:p-12 lg:p-16 shadow-2xl max-w-5xl mx-auto relative overflow-hidden">
                
                <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white opacity-5 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-60 h-60 bg-black opacity-5 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4 border-b border-white/20 pb-6">
                    <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight flex-1">
                        {{ $article->judul }}
                    </h1>
                    <span class="text-white/80 font-medium italic text-lg whitespace-nowrap">
                        {{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}
                    </span>
                </div>

                <div class="w-full h-64 md:h-[450px] bg-gray-300 rounded-2xl overflow-hidden shadow-inner mb-10">
                    <img src="{{ asset('storage/' . $article['gambar']) }}" 
                         alt="{{ $article->judul }}" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-700">
                </div>

                <div class="text-white text-base md:text-lg leading-relaxed space-y-6 text-justify opacity-95 font-light prose prose-invert max-w-none">
                    {!! $article->konten !!}
                </div>

                <div class="mt-12 pt-8 border-t border-white/20 flex justify-between items-center">
                    </div>

            </div>

        </div>
    </div>

@endsection
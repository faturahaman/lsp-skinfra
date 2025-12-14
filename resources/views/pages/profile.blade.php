@extends('layouts.app')

@section('content')

    <div class="pt-32 pb-20 min-h-screen flex items-center justify-center bg-white">
        
        <div class="container mx-auto px-4 md:px-8">
            
            <div class="bg-custom-gold rounded-[40px] p-8 md:p-16 shadow-2xl overflow-hidden relative">
                
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    
                    <div class="w-full lg:w-1/2 text-white">
                        
                        <h1 class="text-3xl md:text-5xl font-bold mb-8">
                            Profil Perusahaan
                        </h1>

                        <div class="space-y-6 text-base md:text-lg leading-relaxed font-medium opacity-95">
                            @if($profiles && $profiles->deskripsi)
                                {!! $profiles->deskripsi !!}
                            @else

                            @endif
                        </div>

                        <div class="mt-10 space-y-2 text-sm md:text-base font-light italic opacity-90 border-t border-white/20 pt-6">
                                <p>{{ $profiles->alamat }}</p>
                                <p>No Telp: {{ $profiles->telepon }}</p>
                                <p>{{ $profiles->email }}</p>
                           
                        </div>

                    </div>

                    <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                        
                        <div class="bg-white p-3 rounded-3xl shadow-lg w-full max-w-md h-auto aspect-square flex items-center justify-center">
                            
                            <div class="bg-black w-full h-full rounded-2xl flex flex-col items-center justify-center text-center p-6">
                                
                                <div class="mb-4 relative w-32 h-32">
                                    @if($profiles && $profiles->logo)
                                        <img src="{{ asset('storage/' . $profiles->logo) }}" 
                                             alt="Logo" 
                                             class="w-full h-full object-contain">
                                    @else
                                        <svg viewBox="0 0 100 100" class="w-full h-full text-custom-gold fill-current">
                                            <path d="M50 10 L90 90 H10 Z" stroke="white" stroke-width="5" />
                                        </svg>
                                    @endif
                                </div>
                                
                                <h2 class="text-custom-gold font-bold text-2xl tracking-widest uppercase">
                                    {{ $profiles->nama  }}
                                </h2>
                              
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

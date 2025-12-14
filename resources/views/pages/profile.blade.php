@extends('layouts.app')

@section('content')

<div class="pt-24 md:pt-32 pb-16 md:pb-20 min-h-screen bg-white">
    <div class="container mx-auto px-4 md:px-8">

        <div class="bg-custom-gold rounded-3xl md:rounded-[40px] 
                    p-6 sm:p-8 md:p-16 
                    shadow-2xl overflow-hidden relative">

            <div class="flex flex-col lg:flex-row gap-10 lg:gap-20">

                {{-- TEXT --}}
                <div class="w-full lg:w-1/2 text-white">

                    <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-6 md:mb-8">
                        Profil Perusahaan
                    </h1>

                    <div class="space-y-4 md:space-y-6 
                                text-sm sm:text-base md:text-lg 
                                leading-relaxed font-medium opacity-95">
                        @if($profiles && $profiles->deskripsi)
                            {!! $profiles->deskripsi !!}
                        @else
                            <p>Profil perusahaan belum tersedia.</p>
                        @endif
                    </div>

                    <div class="mt-8 md:mt-10 
                                space-y-1 md:space-y-2 
                                text-xs sm:text-sm md:text-base 
                                font-light italic opacity-90 
                                border-t border-white/20 pt-4 md:pt-6">
                        <p>{{ $profiles->alamat }}</p>
                        <p>No Telp: {{ $profiles->telepon }}</p>
                        <p>{{ $profiles->email }}</p>
                    </div>

                </div>

                {{-- LOGO CARD --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">

                    <div class="bg-white p-3 rounded-2xl md:rounded-3xl 
                                shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md">

                        <div class="bg-black rounded-xl md:rounded-2xl 
                                    flex flex-col items-center justify-center 
                                    text-center p-6 aspect-square">

                            <div class="mb-4 w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32">
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

                            <h2 class="text-custom-gold font-bold 
                                       text-lg sm:text-xl md:text-2xl 
                                       tracking-widest uppercase">
                                {{ $profiles->nama }}
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="pt-32 pb-20 min-h-screen bg-gray-50">
        <div class="container mx-auto px-4 md:px-12">
            
            {{-- Header Section --}}
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

            {{-- Search Bar --}}
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

            {{-- Grid Services --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

                @forelse($services as $service)
                    @include('partials.card-service', ['service' => $service])
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
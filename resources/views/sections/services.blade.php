<section id="services" class="py-20 bg-custom-gold">
    <div class="container mx-auto px-4 md:px-12">
        
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-white inline-block border-b-2 border-white/50 pb-2 mb-3">
                Layanan Kami
            </h3>
            <p class="text-white text-lg font-medium opacity-90">
                Pilihan Cerdas untuk Hunian Berkualitas
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-12">

            @forelse($services as $service)
                {{-- partials content --}}
                @include('partials.card-service', ['service' => $service])
            @empty
                <p class="text-white text-center col-span-3 py-10 font-medium">
                    Data layanan belum tersedia
                </p>
            @endforelse

        </div>

        <div class="flex justify-center">
            <a href="{{ route('services') }}"
               class="bg-white text-custom-gold font-bold px-8 py-3 rounded-lg shadow-md hover:bg-gray-50 transition duration-300 transform hover:scale-105">
                Lebih Lengkap
            </a>
        </div>

    </div>
</section>
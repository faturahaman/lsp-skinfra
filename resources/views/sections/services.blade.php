<section id="services" class="py-20 bg-custom-gold">
    <div class="container mx-auto px-4 md:px-12">
        
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-white inline-block border-b-2 border-white/50 pb-2 mb-3">
                Layanan kami
            </h3>
            <p class="text-white text-lg font-medium opacity-90">
                Pilihan Cerdas untuk Hunian Berkualitas.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-12">
            
            {{-- Array Dummy Data untuk simulasi Layanan --}}
            @php
                $services = [
                    [
                        'title' => 'Dekorasi Luar Ruangan',
                        'desc'  => 'Keterangan Layanan',
                        'image' => 'https://images.unsplash.com/photo-1558905545-04de8ce392b6?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Desain Interior Modern',
                        'desc'  => 'Keterangan Layanan',
                        'image' => 'https://images.unsplash.com/photo-1558905545-04de8ce392b6?q=80&w=600&auto=format&fit=crop'
                    ],
                    [
                        'title' => 'Renovasi Taman',
                        'desc'  => 'Keterangan Layanan',
                        'image' => 'https://images.unsplash.com/photo-1558905545-04de8ce392b6?q=80&w=600&auto=format&fit=crop'
                    ]
                ];
            @endphp

            @foreach($services as $service)
            <div class="bg-white p-2 rounded-2xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                <div class="relative h-[500px] rounded-xl overflow-hidden group">
                    
                    <img src="{{ $service['image'] }}" 
                         alt="{{ $service['title'] }}" 
                         class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                        <h4 class="text-2xl font-bold text-white mb-1 leading-tight">
                            {{ $service['title'] }}
                        </h4>
                        <p class="text-gray-300 text-sm italic mb-6">
                            {{ $service['desc'] }}
                        </p>

                        <a href="#" class="inline-flex items-center gap-2 bg-white text-custom-gold font-bold px-6 py-2.5 rounded-lg hover:bg-gray-100 transition shadow-sm">
                            Konsultasi
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="flex justify-center">
            <a href="#" class="bg-white text-custom-gold font-bold px-8 py-3 rounded-lg shadow-md hover:bg-gray-50 transition duration-300 transform hover:scale-105">
                Lebih lengkap
            </a>
        </div>

    </div>
</section>
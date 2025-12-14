<section id="contact" class="py-20 bg-white">
    <div class="container  mx-auto px-4 md:px-8">
        
        <div class="bg-custom-gold rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
            
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-black opacity-5 rounded-full blur-2xl pointer-events-none"></div>

            <div class="flex flex-col lg:flex-row gap-10 items-center">
                
                <div class="w-full lg:w-1/2 h-[300px] md:h-[350px] bg-gray-200 rounded-2xl overflow-hidden shadow-lg border-4 border-white/20">
                    <iframe 
                        src="https://maps.google.com/maps?q=Jl.%20Bukit%20Cimanggu%20City%20Raya,%20Bogor&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

                <div class="w-full lg:w-1/2 text-white">
                    
                    <h2 class="text-3xl font-bold mb-4 relative inline-block">
                        Kontak Kami
                        <span class="absolute -bottom-2 left-0 w-2/3 h-1 bg-white rounded-full"></span>
                    </h2>

                    <div class="mt-8 space-y-6">
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white/70 text-sm">Email</p>
                                <a href="mailto:{{ $profiles->email }}" class="font-semibold text-lg hover:text-yellow-100 transition">{{$profiles->email}}</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white/70 text-sm">Nomor Telepon</p>
                                <a href="https://wa.me/{{ $profiles->telepon }} " class="font-semibold text-lg hover:text-yellow-100 transition">{{$profiles->telepon}}</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-white/20 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white/70 text-sm">Alamat Kantor</p>
                                <p class="font-medium leading-relaxed">
                                    {{ $profiles->alamat }}
                                </p>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
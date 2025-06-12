<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- Hero Banner Slider -->
    {{-- <!-- LARAVEL: Ganti dengan @foreach($banners as $banner) untuk data dari database --> --}}
    <body>
        <h1 class="text-3xl font-bold mb-6">Welcome, {{ auth()->check() ? auth()->user()->name : 'Guest' }}!</h1>
    </body>
    <section class="relative h-96 md:h-[500px] overflow-hidden">
        <div id="slider" class="relative w-full h-full">
            <!-- Banner 1 -->
            <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000 pointer-events-none">
                <div class="gradient-bg h-full flex items-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1578991624414-276ef23a534f?q=80&w=3127&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover; pointer-events: none;">
                    <div class="max-w-7xl mx-auto px-4 text-white pointer-events-auto">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">Layanan Kesehatan Terpercaya</h1>
                            <p class="text-xl mb-8">Reservasi rumah sakit dengan mudah dan cepat melalui sistem terintegrasi Kemenkes</p>
                            <a href="{{ auth()->check() ? url('/reservation') : route('login.form') }}" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-block z-20 pointer-events-auto" aria-label="Mulai reservasi rumah sakit">Mulai Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 2 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <div class="gradient-bg h-full flex items-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1599045118108-bf9954418b76?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover;">
                    <div class="max-w-7xl mx-auto px-4 text-white">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">24/7 Pelayanan Darurat</h1>
                            <p class="text-xl mb-8">Tim medis profesional siap melayani kebutuhan kesehatan Anda kapan saja</p>
                            <button class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                                Panggil Ambulans
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 3 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <div class="gradient-bg h-full flex items-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=3072&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover;">
                    <div class="max-w-7xl mx-auto px-4 text-white">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">Konsultasi Online</h1>
                            <p class="text-xl mb-8">Konsultasi dengan dokter spesialis dari rumah dengan teknologi telemedicine</p>
                            <button class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                                Konsultasi Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Controls -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100" data-slide="0"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100" data-slide="1"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100" data-slide="2"></button>
        </div>
    </section>

    <!-- Quick Services -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Unggulan</h2>
                <p class="text-gray-600 text-lg">Akses cepat ke layanan kesehatan terbaik</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-6">
                <div class="health-card bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center">
                    <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1b76yjewWsFhXKyPTUBFIAN6ey37cQilOVw&s" 
                        alt="Rumah Sakit" 
                        class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Reservasi RS</h3>
                    <p class="text-gray-600 text-sm">Booking rumah sakit terdekat</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl text-center">
                    <div class="bg-green-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlIySTVwnF8dkrti7WHLxE6uQgOyO7MRX7vA&s" 
                        alt="Dokter Spesialis" 
                        class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Dokter Spesialis</h3>
                    <p class="text-gray-600 text-sm">Konsultasi dengan ahli</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl text-center">
                    <div class="bg-purple-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="data:image/jpeg;base64,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" 
                        alt="Apotek Online" 
                        class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Apotek Online</h3>
                    <p class="text-gray-600 text-sm">Pesan obat dengan resep</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl text-center">
                    <div class="bg-red-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL2lftr0V5F5OTbOni8ADUAcmCdM7ZI9AWsQ&s" 
                        alt="Ambulance" 
                        class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Ambulans</h3>
                    <p class="text-gray-600 text-sm">Layanan darurat 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-16 gradient-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 text-center text-white">
                <div class="slide-up">
                    <h3 class="text-4xl font-bold mb-2">1,200+</h3>
                    <p class="text-lg opacity-90">Rumah Sakit Partner</p>
                </div>
                <div class="slide-up">
                    <h3 class="text-4xl font-bold mb-2">50,000+</h3>
                    <p class="text-lg opacity-90">Pasien Terlayani</p>
                </div>
                <div class="slide-up">
                    <h3 class="text-4xl font-bold mb-2">5,000+</h3>
                    <p class="text-lg opacity-90">Dokter Berpengalaman</p>
                </div>
                <div class="slide-up">
                    <h3 class="text-4xl font-bold mb-2">24/7</h3>
                    <p class="text-lg opacity-90">Layanan Darurat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Artikel Kesehatan Terbaru</h2>
            <p class="text-gray-600 text-lg">Informasi kesehatan terpercaya dari para ahli</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.1s;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop" 
                         alt="Kesehatan Umum" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Kesehatan Umum
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Tips Menjaga Kesehatan di Musim Hujan
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Pelajari cara menjaga daya tahan tubuh dan mencegah penyakit umum yang sering muncul saat musim hujan dengan langkah-langkah praktis.
                    </p>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Published: 28 Mei 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Updated: 30 Mei 2025</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-400">
                        Created: 25 Mei 2025
                    </div>
                </div>
            </article>
            
            <!-- Article 2 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.2s;">
                <div class="relative overflow-hidden">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1595219274/attached_image/memenuhi-gizi-seimbang-dengan-panduan-piring-makan.jpg" 
                         alt="Nutrisi" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Nutrisi
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Panduan Gizi Seimbang untuk Keluarga
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Memahami pentingnya nutrisi seimbang dan cara praktis menerapkannya dalam kehidupan sehari-hari untuk keluarga yang lebih sehat.
                    </p>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Published: 26 Mei 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Updated: 29 Mei 2025</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-400">
                        Created: 24 Mei 2025
                    </div>
                </div>
            </article>
            
            <!-- Article 3 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.3s;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=250&fit=crop" 
                         alt="Mental Health" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Mental Health
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Mengelola Stres dalam Kehidupan Modern
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Strategi efektif untuk mengatasi stres dan menjaga kesehatan mental di era digital dengan pendekatan yang praktis dan terbukti.
                    </p>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Published: 25 Mei 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Updated: 27 Mei 2025</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-400">
                        Created: 23 Mei 2025
                    </div>
                </div>
            </article>
        </div>
        
        <div class="text-center mt-10">
            <a href="{{ auth()->check() ? url('/articles') : route('login.form') }}" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                Lihat Semua Artikel
            </a>
        </div>
    </div>
</section>
    

</x-layout>
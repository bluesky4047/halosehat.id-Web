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
            <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
                <div class="gradient-bg h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 text-white">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">Layanan Kesehatan Terpercaya</h1>
                            <p class="text-xl mb-8">Reservasi rumah sakit dengan mudah dan cepat melalui sistem terintegrasi Kemenkes</p>
                            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                                Mulai Reservasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 2 -->
            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
                <div class="bg-gradient-to-r from-green-500 to-blue-600 h-full flex items-center">
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
                <div class="bg-gradient-to-r from-purple-500 to-pink-600 h-full flex items-center">
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
                        <i class="fas fa-hospital text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Reservasi RS</h3>
                    <p class="text-gray-600 text-sm">Booking rumah sakit terdekat</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl text-center">
                    <div class="bg-green-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-md text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Dokter Spesialis</h3>
                    <p class="text-gray-600 text-sm">Konsultasi dengan ahli</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl text-center">
                    <div class="bg-purple-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pills text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Apotek Online</h3>
                    <p class="text-gray-600 text-sm">Pesan obat dengan resep</p>
                </div>
                
                <div class="health-card bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl text-center">
                    <div class="bg-red-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ambulance text-white text-2xl"></i>
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
    {{-- <!-- LARAVEL: Ganti dengan @foreach($articles as $article) untuk data dari database --> --}}
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Artikel Kesehatan Terbaru</h2>
                <p class="text-gray-600 text-lg">Informasi kesehatan terpercaya dari para ahli</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Article 1 - LARAVEL: Ganti dengan data dinamis -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden health-card">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Kesehatan Umum</span>
                            <span class="text-gray-500 text-sm ml-auto">2 hari lalu</span>
                        </div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Tips Menjaga Kesehatan di Musim Hujan</h3>
                        <p class="text-gray-600 mb-4">Pelajari cara menjaga daya tahan tubuh dan mencegah penyakit umum yang sering muncul saat musim hujan...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Baca Selengkapnya →</a>
                    </div>
                </article>
                
                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden health-card">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full">Nutrisi</span>
                            <span class="text-gray-500 text-sm ml-auto">4 hari lalu</span>
                        </div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Panduan Gizi Seimbang untuk Keluarga</h3>
                        <p class="text-gray-600 mb-4">Memahami pentingnya nutrisi seimbang dan cara praktis menerapkannya dalam kehidupan sehari-hari...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Baca Selengkapnya →</a>
                    </div>
                </article>
                
                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden health-card">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-100 text-purple-600 text-xs px-3 py-1 rounded-full">Mental Health</span>
                            <span class="text-gray-500 text-sm ml-auto">1 minggu lalu</span>
                        </div>
                        <h3 class="font-bold text-xl mb-3 text-gray-800">Mengelola Stres dalam Kehidupan Modern</h3>
                        <p class="text-gray-600 mb-4">Strategi efektif untuk mengatasi stres dan menjaga kesehatan mental di era digital...</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Baca Selengkapnya →</a>
                    </div>
                </article>
            </div>
            
            <div class="text-center mt-10">
                <a href="/readarticle" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                    Lihat Semua Artikel
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Dapatkan Tips Kesehatan Terbaru</h2>
            <p class="text-gray-600 text-lg mb-8">Berlangganan newsletter kami untuk mendapatkan informasi kesehatan terpercaya</p>
            
            <div class="flex flex-col md:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-4 py-3 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                    Berlangganan
                </button>
            </div>
        </div>
    </section>    
    

</x-layout>
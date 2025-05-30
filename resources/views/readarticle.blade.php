<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <section class="pt-20 pb-12">
        <div class="container mx-auto px-6">
            <!-- Article Meta -->
            <div class="max-w-4xl mx-auto mb-8 animate-slide-up">
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span class="glass-effect text-gray-700 px-4 py-2 rounded-full text-sm font-medium">
                        Technology
                    </span>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Published: 28 Mei 2025</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Updated: 30 Mei 2025</span>
                    </div>
                    <div class="text-sm text-gray-500">
                        <span>5 min read</span>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight animate-slide-up" style="animation-delay: 0.2s;">
                    Modern Web Development with Laravel 12
                </h1>

                <!-- Author Info -->
                <div class="flex items-center gap-4 mb-8 animate-slide-right" style="animation-delay: 0.3s;">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                         alt="Author" 
                         class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h3 class="font-semibold text-gray-900">Ahmad Rizki</h3>
                        <p class="text-sm text-gray-600">Senior Laravel Developer</p>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="max-w-5xl mx-auto mb-12 animate-fade-in" style="animation-delay: 0.4s;">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                         alt="Modern Web Development" 
                         class="w-full h-64 md:h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <main class="pb-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                    <!-- Main Content -->
                    <article class="lg:col-span-3 animate-slide-up" style="animation-delay: 0.5s;">
                        <div class="prose-custom text-lg">
                            <p class="text-xl text-gray-700 mb-8 font-medium leading-relaxed">
                                Laravel 12 membawa revolusi baru dalam pengembangan web modern dengan fitur-fitur canggih yang akan mengubah cara kita membangun aplikasi web. Dalam artikel ini, kita akan mengeksplorasi berbagai peningkatan dan inovasi terbaru.
                            </p>

                            <h2>Fitur-Fitur Terbaru Laravel 12</h2>
                            
                            <p>
                                Laravel 12 hadir dengan berbagai peningkatan signifikan yang membuatnya menjadi framework PHP terdepan. Beberapa fitur utama yang patut disorot adalah sistem routing yang lebih efisien, optimisasi database query, dan integrasi AI yang lebih baik.
                            </p>

                            <blockquote>
                                "Laravel 12 tidak hanya sekadar update, tetapi transformasi fundamental dalam cara kita mengembangkan aplikasi web modern." - Taylor Otwell
                            </blockquote>

                            <h3>1. Enhanced Performance</h3>
                            <p>
                                Performa Laravel 12 meningkat drastis dengan optimisasi pada level core framework. Kecepatan loading halaman meningkat hingga 40% dibandingkan versi sebelumnya, terutama untuk aplikasi dengan traffic tinggi.
                            </p>

                            <ul>
                                <li>Query optimization yang lebih intelligent</li>
                                <li>Caching mechanism yang diperbaharui</li>
                                <li>Memory usage yang lebih efisien</li>
                                <li>Lazy loading untuk component yang tidak digunakan</li>
                            </ul>

                            <h3>2. New Blade Components</h3>
                            <p>
                                Blade templating engine mendapat update besar dengan komponen-komponen baru yang memudahkan pengembangan UI. Komponen ini dirancang untuk meningkatkan reusability dan maintainability kode.
                            </p>

                            <p>
                                Contoh penggunaan komponen baru:
                            </p>
                            <code>&lt;x-dynamic-form :fields="$formFields" :validation="$rules" /&gt;</code>

                            <h3>3. AI Integration</h3>
                            <p>
                                Salah satu fitur paling menarik adalah integrasi AI native yang memungkinkan pengembang untuk dengan mudah mengimplementasikan machine learning dan natural language processing dalam aplikasi Laravel.
                            </p>

                            <ol>
                                <li>Text analysis dan sentiment detection</li>
                                <li>Image recognition dan processing</li>
                                <li>Automated testing dengan AI</li>
                                <li>Smart caching berdasarkan user behavior</li>
                            </ol>

                            <h2>Migrasi dari Laravel 11</h2>
                            
                            <p>
                                Proses migrasi dari Laravel 11 ke Laravel 12 telah disederhanakan dengan tools otomatis yang disediakan. Tim Laravel telah memastikan backward compatibility untuk sebagian besar fitur, sehingga proses upgrade menjadi lebih smooth.
                            </p>

                            <p>
                                Langkah-langkah migrasi yang disarankan meliputi backup database, update dependencies, dan testing menyeluruh sebelum deployment ke production. Documentation lengkap tersedia di situs resmi Laravel.
                            </p>

                            <h2>Kesimpulan</h2>
                            
                            <p>
                                Laravel 12 membuktikan komitmen framework ini untuk terus berinovasi dan memberikan tools terbaik bagi para developer. Dengan fitur-fitur canggih dan performa yang ditingkatkan, Laravel 12 siap menjadi fondasi untuk aplikasi web masa depan.
                            </p>

                            <p>
                                Bagi developer yang ingin tetap kompetitif di industri teknologi, mempelajari Laravel 12 adalah investasi yang sangat berharga. Framework ini tidak hanya mempermudah development process, tetapi juga membuka peluang untuk mengeksplorasi teknologi-teknologi cutting-edge.
                            </p>
                        </div>

                        <!-- Tags -->
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Tags:</h4>
                            <div class="flex flex-wrap gap-3">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors cursor-pointer">Laravel</span>
                                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors cursor-pointer">PHP</span>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium hover:bg-green-200 transition-colors cursor-pointer">Web Development</span>
                                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium hover:bg-orange-200 transition-colors cursor-pointer">Framework</span>
                                <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm font-medium hover:bg-indigo-200 transition-colors cursor-pointer">Backend</span>
                            </div>
                        </div>

                        <!-- Share Buttons -->
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Share this article:</h4>
                            <div class="flex gap-4">
                                <button class="share-btn bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </button>
                                <button class="share-btn bg-blue-800 text-white p-3 rounded-full hover:bg-blue-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </button>
                                <button class="share-btn bg-blue-500 text-white p-3 rounded-full hover:bg-blue-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                                <button class="share-btn bg-green-600 text-white p-3 rounded-full hover:bg-green-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1 animate-slide-right" style="animation-delay: 0.6s;">
                        <!-- Table of Contents -->
                        {{-- <div class="glass-effect rounded-2xl p-6 mb-8 sticky top-24">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Table of Contents</h4>
                            <nav class="space-y-2">
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300">Fitur-Fitur Terbaru Laravel 12</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300 ml-4">Enhanced Performance</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300 ml-4">New Blade Components</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300 ml-4">AI Integration</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300">Migrasi dari Laravel 11</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-gradient hover:translate-x-2 transition-all duration-300">Kesimpulan</a>
                            </nav>
                        </div> --}}

                        <!-- Author Card -->
                        <div class="glass-effect rounded-2xl p-6 mb-8">
                            <div class="text-center">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                                     alt="Author" 
                                     class="w-20 h-20 rounded-full mx-auto mb-4 object-cover animate-float">
                                <h4 class="font-semibold text-gray-900 mb-2">Ahmad Rizki</h4>
                                <p class="text-sm text-gray-600 mb-4">Senior Laravel Developer dengan 8+ tahun pengalaman dalam web development</p>
                                <div class="flex justify-center gap-3">
                                    <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-blue-800 hover:text-blue-900 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.751-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001.017 0z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Related Articles -->
                        <div class="glass-effect rounded-2xl p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Related Articles</h4>
                            <div class="space-y-4">
                                <a href="#" class="block group">
                                    <div class="flex gap-3">
                                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                             alt="Related Article" 
                                             class="w-16 h-16 rounded-lg object-cover">
                                        <div>
                                            <h5 class="text-sm font-medium text-gray-900 group-hover:text-gradient transition-colors">Advanced Data Analytics Techniques</h5>
                                            <p class="text-xs text-gray-600 mt-1">26 Mei 2025</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block group">
                                    <div class="flex gap-3">
                                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                             alt="Related Article" 
                                             class="w-16 h-16 rounded-lg object-cover">
                                        <div>
                                            <h5 class="text-sm font-medium text-gray-900 group-hover:text-gradient transition-colors">UI/UX Design Principles for 2025</h5>
                                            <p class="text-xs text-gray-600 mt-1">24 Mei 2025</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block group">
                                    <div class="flex gap-3">
                                        <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                             alt="Related Article" 
                                             class="w-16 h-16 rounded-lg object-cover">
                                        <div>
                                            <h5 class="text-sm font-medium text-gray-900 group-hover:text-gradient transition-colors">Digital Marketing Strategies</h5>
                                            <p class="text-xs text-gray-600 mt-1">22 Mei 2025</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>


</x-layout>
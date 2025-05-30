<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-40">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('articles.index') }}" class="flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span class="font-medium">Kembali</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="shareArticle()" class="p-2 text-gray-500 hover:text-gray-700 transition-colors">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <button onclick="printArticle()" class="p-2 text-gray-500 hover:text-gray-700 transition-colors">
                        <i class="fas fa-print"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <article class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Article Header -->
            <header class="p-8 pb-6">
                <!-- Article Meta -->
                <div class="flex items-center space-x-4 text-sm text-gray-600 mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-calendar mr-2"></i>
                        <time datetime="{{ $article->published_at ?? $article->created_at }}">
                            {{ \Carbon\Carbon::parse($article->published_at ?? $article->created_at)->format('d F Y') }}
                        </time>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        <span id="readingTime">5 menit baca</span>
                    </div>
                    <div class="flex items-center">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">
                            {{ ucfirst($article->status ?? 'published') }}
                        </span>
                    </div>
                </div>

                <!-- Article Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-6">
                    {{ $article->title ?? 'Contoh Judul Artikel yang Menarik dan Informatif untuk Pembaca' }}
                </h1>

                <!-- Featured Image -->
                @if($article->featured_image ?? true)
                <div class="mb-8">
                    <img 
                        src="{{ $article->featured_image ?? 'https://images.unsplash.com/photo-1586953208448-b95a79798f07?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80' }}" 
                        alt="{{ $article->title ?? 'Featured Image' }}"
                        class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg"
                    >
                </div>
                @endif
            </header>

            <!-- Article Content -->
            <div class="px-8 pb-8">
                <div class="prose prose-lg max-w-none">
                    <div id="articleContent">
                        {!! $article->content ?? '
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        
                        <h2>Subjudul Pertama</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                        <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-700 my-6">
                            "Ini adalah contoh quote yang menarik untuk memperkuat argumen dalam artikel."
                        </blockquote>
                        
                        <h3>Sub-subjudul</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        
                        <ul>
                            <li>Poin penting pertama</li>
                            <li>Poin penting kedua</li>
                            <li>Poin penting ketiga</li>
                        </ul>
                        
                        <h2>Kesimpulan</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        ' !!}
                    </div>
                </div>
            </div>

            <!-- Article Footer -->
            <footer class="px-8 py-6 border-t border-gray-200 bg-gray-50">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                    <!-- Tags/Categories (if you have them) -->
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">#teknologi</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">#web-development</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">#laravel</span>
                    </div>

                    <!-- Share Buttons -->
                    <div class="flex items-center space-x-3">
                        <span class="text-sm text-gray-600 mr-2">Bagikan:</span>
                        <button onclick="shareToFacebook()" class="p-2 text-blue-600 hover:bg-blue-50 rounded-full transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button onclick="shareToTwitter()" class="p-2 text-blue-400 hover:bg-blue-50 rounded-full transition-colors">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button onclick="shareToWhatsApp()" class="p-2 text-green-600 hover:bg-green-50 rounded-full transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </button>
                        <button onclick="copyLink()" class="p-2 text-gray-600 hover:bg-gray-100 rounded-full transition-colors">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div>
            </footer>
        </article>

        <!-- Related Articles (Optional) -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Artikel Terkait</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Related Article Card (Repeat for each related article) -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <img 
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Related Article"
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors">
                            <a href="#">Artikel Terkait Pertama</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <div class="text-xs text-gray-500">
                            <i class="fas fa-calendar mr-1"></i>
                            15 Mei 2025
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <img 
                        src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Related Article"
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors">
                            <a href="#">Artikel Terkait Kedua</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">Sed do eiusmod tempor incididunt ut labore et dolore...</p>
                        <div class="text-xs text-gray-500">
                            <i class="fas fa-calendar mr-1"></i>
                            12 Mei 2025
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                    <img 
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                        alt="Related Article"
                        class="w-full h-48 object-cover"
                    >
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2 hover:text-blue-600 transition-colors">
                            <a href="#">Artikel Terkait Ketiga</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-3">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        <div class="text-xs text-gray-500">
                            <i class="fas fa-calendar mr-1"></i>
                            10 Mei 2025
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-full transition-transform duration-300">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span id="toastMessage">Link berhasil disalin!</span>
        </div>
    </div>


</x-layout>
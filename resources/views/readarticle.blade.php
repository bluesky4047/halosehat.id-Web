<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="pt-20 pb-12">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto mb-8 animate-slide-up">
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    @if ($article->category)
                        <span class="glass-effect text-gray-700 px-4 py-2 rounded-full text-sm font-medium">
                            {{ $article->category }}
                        </span>
                    @endif
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Published: {{ $article->created_at->format('d M Y') }}</span>
                    </div>
                </div>
                <h1 class="text-4xl font-extrabold text-gray-900 leading-tight mb-4 animate-slide-up">
                    {{ $article->title }}
                </h1>
                <div class="flex items-center gap-4 text-gray-700 text-sm animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8 rounded-full object-cover" src="https://source.unsplash.com/random/100x100?person" alt="Author">
                        <span>Oleh: Administrator</span> {{-- Ganti ini dengan nama penulis jika ada --}}
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l3 3a1 1 0 001.414-1.414L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ ceil(str_word_count(strip_tags($article->content)) / 200) }} menit baca</span> {{-- Estimasi waktu baca --}}
                    </div>
                    @if ($article->updated_at && $article->updated_at != $article->created_at)
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Diperbarui: {{ $article->updated_at->format('d M Y') }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="relative w-full h-80 md:h-96 rounded-xl overflow-hidden shadow-lg mb-12 animate-zoom-in">
                @if ($article->featured_image)
                    <img src="{{ asset($article->featured_image) }}"
                         alt="{{ $article->title }}"
                         class="w-full h-full object-cover">
                @else
                    <img src="https://via.placeholder.com/1000x600?text=No+Image"
                         alt="Default Image"
                         class="w-full h-full object-cover">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <div class="max-w-4xl mx-auto flex flex-col lg:flex-row gap-12">
                <article class="flex-grow text-gray-800 leading-relaxed text-lg prose prose-blue max-w-none animate-fade-in-up">
                    {!! $article->content !!} 
                </article>

                <div class="lg:w-80 flex-shrink-0 animate-fade-in-up" style="animation-delay: 0.4s;">
                    <aside class="bg-white rounded-xl shadow-xl p-6 border border-gray-200">
                        <h4 class="text-xl font-bold text-gray-900 mb-6 border-b pb-4">Artikel Terkait</h4>
                        <div class="space-y-6">
                            <a href="{{ route('articles.index') }}" class="block group">
                                <div class="flex gap-3">
                                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                         alt="Related Article"
                                         class="w-16 h-16 rounded-lg object-cover">
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-900 group-hover:text-gradient transition-colors">Modern Web Development with Laravel 12</h5>
                                        <p class="text-xs text-gray-600 mt-1">28 Mei 2025</p>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('articles.index') }}" class="block group">
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
                            <a href="{{ route('articles.index') }}" class="block group">
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
                            <a href="{{ route('articles.index') }}" class="block group">
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
                    </aside>
                </div>
            </div>
        </div>
    </main>
</x-layout>
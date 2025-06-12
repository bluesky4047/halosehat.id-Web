<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="container mx-auto px-6 py-12">
        <div class="mb-8 text-right">
            <a href="{{ route('articles.create') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300">
                <i class="fas fa-plus-circle mr-2"></i>
                Buat Artikel Baru
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8 max-w-7xl mx-auto">
            @forelse ($articles as $article)
                <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.1s;">
                    <div class="relative overflow-hidden">
                        @if ($article->featured_image)
                            <img src="{{ asset($article->featured_image) }}"
                                 alt="{{ $article->title }}"
                                 class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                        @else
                            <img src="/storage/article_images/default-article.jpg"
                                 alt="Default Image"
                                 class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        @if ($article->category)
                            <div class="absolute top-4 left-4">
                                <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $article->category }}
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4 cursor-pointer transition-all duration-300">
                            <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-gradient">
                                {{ $article->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ Str::limit(strip_tags($article->content), 150) }} {{-- Ambil ringkasan dari konten --}}
                        </p>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Published: {{ $article->created_at->format('d M Y') }}</span>
                            </div>
                            @if ($article->updated_at && $article->updated_at != $article->created_at)
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Updated: {{ $article->updated_at->format('d M Y') }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="text-xs text-gray-400">
                            Created: {{ $article->created_at->format('d M Y H:i') }}
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-center text-gray-600 col-span-full">Belum ada artikel. Ayo buat yang pertama!</p>
            @endforelse
        </div>
    </main>
</x-layout>
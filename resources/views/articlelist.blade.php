<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8 max-w-7xl mx-auto">
            <!-- Article 1 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.1s;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Web Development" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Technology
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Modern Web Development with Laravel 12
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Explore the latest features and improvements in Laravel 12, including enhanced performance, 
                        new Blade components, and revolutionary database optimizations that will transform your development workflow.
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
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Data Analytics" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Analytics
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Advanced Data Analytics Techniques
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Dive deep into cutting-edge data analytics methodologies, machine learning integration, 
                        and predictive modeling that will revolutionize how you interpret and utilize business data.
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
                        Created: 20 Mei 2025
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.3s;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="UI Design" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Design
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        UI/UX Design Principles for 2025
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Master the art of creating intuitive, accessible, and visually stunning user interfaces 
                        with the latest design trends, micro-interactions, and user experience methodologies.
                    </p>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Published: 24 Mei 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Updated: 28 Mei 2025</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-400">
                        Created: 18 Mei 2025
                    </div>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white rounded-3xl shadow-xl overflow-hidden card-hover animate-slide-up" style="animation-delay: 0.4s;">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Digital Marketing" 
                         class="w-full h-64 object-cover transition-transform duration-700 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="glass-effect text-white px-3 py-1 rounded-full text-sm font-medium">
                            Marketing
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 hover:text-gradient cursor-pointer transition-all duration-300">
                        Digital Marketing Strategies
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Unlock the power of digital marketing with AI-driven campaigns, social media automation, 
                        and data-driven strategies that deliver measurable results and sustainable growth.
                    </p>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-4">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Published: 22 Mei 2025</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Updated: 27 Mei 2025</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-400">
                        Created: 15 Mei 2025
                    </div>
                </div>
            </article>
        </div>

</x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Articles - InkFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <!-- Animated Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/20 backdrop-blur-lg border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">InkFlow</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a>
                    <a href="#" class="text-white border-b-2 border-blue-400">Articles</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Categories</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">About</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-2 rounded-full hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-6">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Home</a>
                <span class="text-gray-600">/</span>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Categories</a>
                <span class="text-gray-600">/</span>
                <span class="text-blue-400">Technology</span>
            </div>

            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-4xl md:text-5xl font-bold">
                                <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Technology</span>
                            </h1>
                            <p class="text-gray-400 mt-1">142 articles</p>
                        </div>
                    </div>
                    <p class="text-xl text-gray-300 max-w-2xl">
                        Explore the latest in AI, web development, cybersecurity, and emerging technologies shaping our digital future
                    </p>
                </div>

                <button class="bg-gradient-to-r from-blue-600 to-cyan-600 px-6 py-3 rounded-full font-semibold hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    Follow Category
                </button>
            </div>
        </div>
    </section>

    <!-- Filters and Sorting -->
    <section class="px-6 pb-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                    <!-- Search -->
                    <div class="relative flex-1 max-w-md w-full">
                        <input type="text" placeholder="Search in Technology..." class="w-full px-6 py-3 pl-12 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:bg-white/20 transition-all duration-300">
                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <!-- Filters -->
                    <div class="flex flex-wrap gap-3">
                        <select class="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white focus:outline-none focus:border-blue-400 cursor-pointer">
                            <option value="">Sort By</option>
                            <option value="latest">Latest</option>
                            <option value="popular">Most Popular</option>
                            <option value="oldest">Oldest</option>
                        </select>

                        <select class="px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white focus:outline-none focus:border-blue-400 cursor-pointer">
                            <option value="">All Tags</option>
                            <option value="ai">AI</option>
                            <option value="web">Web Dev</option>
                            <option value="mobile">Mobile</option>
                        </select>

                        <button class="px-4 py-2 rounded-full bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-300 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                            Filters
                        </button>
                    </div>
                </div>

                <!-- Active Tags -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="text-sm text-gray-400">Active filters:</span>
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm flex items-center gap-2">
                        AI
                        <button class="hover:text-blue-300">×</button>
                    </span>
                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm flex items-center gap-2">
                        Latest
                        <button class="hover:text-cyan-300">×</button>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Article List -->
    <section class="px-6 pb-20">
        <div class="max-w-7xl mx-auto">
            <!-- Featured Article -->
            <div class="mb-12">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                        <div class="h-80 lg:h-auto bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 relative">
                            <div class="absolute top-6 left-6">
                                <span class="bg-yellow-500 text-black px-4 py-2 rounded-full text-sm font-semibold">Featured</span>
                            </div>
                            <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-24 h-24 text-white/30 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-sm">AI</span>
                                <span class="text-gray-400 text-sm">December 15, 2024</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold mb-4 hover:text-blue-400 transition-colors duration-300 cursor-pointer">
                                The Future of AI in Content Creation: A Deep Dive
                            </h2>
                            <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                                Exploring how artificial intelligence is revolutionizing the way we create and consume digital content in the modern era. From automated writing to sophisticated image generation.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center font-semibold">
                                        SC
                                    </div>
                                    <div>
                                        <p class="font-semibold">Sarah Chen</p>
                                        <p class="text-sm text-gray-400">5 min read • 2.3k views</p>
                                    </div>
                                </div>
                                <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-3 rounded-full font-semibold hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                                    Read Article
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Grid -->
            <div class="space-y-6">
                <!-- Article Item 1 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-0">
                        <div class="h-48 md:h-auto bg-gradient-to-br from-cyan-600 to-blue-600 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                        </div>
                        <div class="md:col-span-3 p-6">
                            <div class="flex items-start justify-between gap-4 mb-3">
                                <div class="flex items-center gap-3 flex-wrap">
                                    <span class="bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full text-sm">Web Dev</span>
                                    <span class="text-gray-400 text-sm">December 14, 2024</span>
                                </div>
                                <button class="p-2 hover:bg-white/10 rounded-full transition-all duration-300">
                                    <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                </button>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 group-hover:text-cyan-400 transition-colors duration-300 cursor-pointer">
                                Building Scalable Web Applications with Modern Frameworks
                            </h3>
                            <p class="text-gray-400 mb-4 line-clamp-2">
                                A comprehensive guide to architecting web applications that can handle millions of users. Learn about microservices, load balancing, and database optimization strategies.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center text-sm font-semibold">
                                        MJ
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">Marcus Johnson</p>
                                        <p class="text-xs text-gray-400">12 min read • 1.8k views</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span class="text-sm">234</span>
                                    </button>
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        <span class="text-sm">42</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article Item 2 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-0">
                        <div class="h-48 md:h-auto bg-gradient-to-br from-indigo-600 to-purple-600 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                        </div>
                        <div class="md:col-span-3 p-6">
                            <div class="flex items-start justify-between gap-4 mb-3">
                                <div class="flex items-center gap-3 flex-wrap">
                                    <span class="bg-indigo-500/20 text-indigo-400 px-3 py-1 rounded-full text-sm">Mobile</span>
                                    <span class="text-gray-400 text-sm">December 13, 2024</span>
                                </div>
                                <button class="p-2 hover:bg-white/10 rounded-full transition-all duration-300">
                                    <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                </button>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 group-hover:text-indigo-400 transition-colors duration-300 cursor-pointer">
                                Cross-Platform Mobile Development: Native vs React Native vs Flutter
                            </h3>
                            <p class="text-gray-400 mb-4 line-clamp-2">
                                An in-depth comparison of mobile development approaches. Understand the pros and cons of each framework and choose the right one for your next project.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center text-sm font-semibold">
                                        LK
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">Lisa Kim</p>
                                        <p class="text-xs text-gray-400">10 min read • 2.1k views</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span class="text-sm">189</span>
                                    </button>
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        <span class="text-sm">38</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article Item 3 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-0">
                        <div class="h-48 md:h-auto bg-gradient-to-br from-teal-600 to-green-600 relative">
                            <div class="absolute inset-0 bg-black/20"></div>
                        </div>
                        <div class="md:col-span-3 p-6">
                            <div class="flex items-start justify-between gap-4 mb-3">
                                <div class="flex items-center gap-3 flex-wrap">
                                    <span class="bg-teal-500/20 text-teal-400 px-3 py-1 rounded-full text-sm">AI</span>
                                    <span class="text-gray-400 text-sm">December 12, 2024</span>
                                </div>
                                <button class="p-2 hover:bg-white/10 rounded-full transition-all duration-300">
                                    <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                </button>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 group-hover:text-teal-400 transition-colors duration-300 cursor-pointer">
                                Machine Learning Operations: Deploying Models at Scale
                            </h3>
                            <p class="text-gray-400 mb-4 line-clamp-2">
                                Best practices for MLOps including model versioning, monitoring, and continuous deployment. Learn how to take your ML models from development to production.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-teal-500 to-green-500 rounded-full flex items-center justify-center text-sm font-semibold">
                                        DR
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm">David Rodriguez</p>
                                        <p class="text-xs text-gray-400">15 min read • 1.5k views</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span class="text-sm">156</span>
                                    </button>
                                    <button class="flex items-center gap-1 text-gray-400 hover:text-white transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                        <span class="text-sm">29</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <footer class="py-16 px-6 border-t border-white/10">
                    <div class="max-w-7xl mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                            <div>
                                <div class="flex items-center space-x-2 mb-4">
                                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <span class="text-xl font-bold">InkFlow</span>
                                </div>
                                <p class="text-gray-400">Where stories come alive and ideas flourish.</p>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-4">Categories</h3>
                                <ul class="space-y-2 text-gray-400">
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Technology</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Design</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Lifestyle</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Business</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-4">Company</h3>
                                <ul class="space-y-2 text-gray-400">
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">About</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Team</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Careers</a></li>
                                    <li><a href="#" class="hover:text-white transition-colors duration-300">Contact</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-4">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-8 border-t border-white/10 text-center text-gray-400">
                            <p>&copy; 2025 InkFlow. All rights reserved.</p>
                        </div>
                    </div>
                </footer>

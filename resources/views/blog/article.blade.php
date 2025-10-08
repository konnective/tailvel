<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Future of AI in Content Creation - InkFlow</title>
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
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">About</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-2 rounded-full hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Article Hero -->
    <section class="pt-32 pb-16 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="mb-6">
                <div class="flex items-center space-x-4 mb-4">
                    <span class="bg-blue-500/80 text-white px-4 py-2 rounded-full text-sm">Technology</span>
                    <span class="text-gray-400">December 15, 2024</span>
                    <span class="text-gray-400">•</span>
                    <span class="text-gray-400">5 min read</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    The Future of <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">AI in Content Creation</span>
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed">
                    Exploring how artificial intelligence is revolutionizing the way we create and consume digital content in the modern era
                </p>
            </div>

            <!-- Author Info -->
            <div class="flex items-center space-x-4 py-6 border-y border-white/10">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                    <span class="text-xl font-bold">SC</span>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Sarah Chen</h3>
                    <p class="text-gray-400">Senior Technology Writer & AI Researcher</p>
                </div>
                <div class="ml-auto flex space-x-3">
                    <button class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </button>
                    <button class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="px-6 pb-16">
        <div class="max-w-4xl mx-auto">
            <!-- Featured Image -->
            <div class="h-96 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 rounded-2xl mb-12 relative overflow-hidden">
                <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-24 h-24 text-white/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-white/70">AI-Generated Content Visualization</p>
                    </div>
                </div>
            </div>

            <!-- Article Body -->
            <div class="prose prose-lg prose-invert max-w-none">
                <p class="text-xl text-gray-300 leading-relaxed mb-8">
                    Artificial Intelligence has emerged as one of the most transformative technologies of our time, fundamentally reshaping how we approach content creation across industries. From automated writing assistants to sophisticated image generation tools, AI is not just changing the tools we use—it's revolutionizing our entire creative process.
                </p>

                <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    The Current Landscape
                </h2>

                <p class="text-gray-300 leading-relaxed mb-6">
                    Today's content creators have access to an unprecedented array of AI-powered tools. These range from simple grammar checkers to sophisticated platforms that can generate entire articles, create stunning visuals, and even produce video content. The democratization of these technologies means that high-quality content creation is no longer limited to those with extensive technical expertise or substantial budgets.
                </p>

                <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 border border-blue-500/20 rounded-2xl p-8 my-8">
                    <h3 class="text-2xl font-bold mb-4 text-blue-400">Key Statistics</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>• 73% of content creators now use AI tools in their workflow</li>
                        <li>• AI-generated content has increased productivity by an average of 40%</li>
                        <li>• The AI content creation market is projected to reach $1.2 billion by 2026</li>
                    </ul>
                </div>

                <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Transforming Creative Workflows
                </h2>

                <p class="text-gray-300 leading-relaxed mb-6">
                    The integration of AI into creative workflows is happening at multiple levels. Writers use AI for brainstorming, research, and first drafts. Designers leverage AI for rapid prototyping and ideation. Video creators employ AI for editing, voice synthesis, and even script generation. This isn't about replacing human creativity—it's about amplifying it.
                </p>

                <p class="text-gray-300 leading-relaxed mb-6">
                    The most successful content creators are those who understand how to collaborate with AI tools effectively. They use AI to handle repetitive tasks, generate initial concepts, and overcome creative blocks, while focusing their human expertise on strategy, emotional resonance, and brand voice.
                </p>

                <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">
                    Challenges and Considerations
                </h2>

                <p class="text-gray-300 leading-relaxed mb-6">
                    While the benefits are substantial, the rise of AI in content creation also presents challenges. Questions of authenticity, originality, and ethical use are at the forefront of industry discussions. Content creators must navigate issues of transparency, ensuring their audiences understand when AI tools have been used in the creative process.
                </p>

                <div class="bg-gradient-to-r from-orange-500/10 to-red-500/10 border border-orange-500/20 rounded-2xl p-8 my-8">
                    <h3 class="text-2xl font-bold mb-4 text-orange-400">Best Practices</h3>
                    <ol class="space-y-3 text-gray-300 list-decimal list-inside">
                        <li>Always disclose when AI tools have been used in content creation</li>
                        <li>Use AI as a collaborative tool, not a replacement for human creativity</li>
                        <li>Maintain editorial oversight and fact-checking for AI-generated content</li>
                        <li>Develop clear guidelines for AI use within your organization</li>
                    </ol>
                </div>

                <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">
                    Looking Ahead
                </h2>

                <p class="text-gray-300 leading-relaxed mb-6">
                    The future of AI in content creation is incredibly promising. We're moving toward more sophisticated tools that can understand context, maintain brand consistency, and even adapt to audience preferences in real-time. The next generation of AI content tools will likely offer unprecedented personalization capabilities, allowing creators to tailor content for specific audiences at scale.
                </p>

                <p class="text-gray-300 leading-relaxed mb-8">
                    As these technologies continue to evolve, the most successful content creators will be those who embrace AI as a powerful ally in their creative journey. The future belongs to those who can seamlessly blend human creativity with artificial intelligence, creating content that is both efficient to produce and deeply engaging for audiences.
                </p>
            </div>

            <!-- Article Actions -->
            <div class="flex items-center justify-between py-8 border-y border-white/10 my-12">
                <div class="flex items-center space-x-6">
                    <button class="flex items-center space-x-2 px-4 py-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <span>142</span>
                    </button>
                    <button class="flex items-center space-x-2 px-4 py-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>28</span>
                    </button>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="text-gray-400">Share:</span>
                    <button class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </button>
                    <button class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </button>
                    <button class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Related Articles -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold mb-8">Related Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                        <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-purple-500/80 text-white px-3 py-1 rounded-full text-sm">Design</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition-colors duration-300">Minimalist Design Principles</h3>
                            <p class="text-gray-400 mb-4">Understanding the power of simplicity in modern web design...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">8 min read</span>
                                <button class="text-purple-400 hover:text-purple-300 transition-colors duration-300">Read More →</button>
                            </div>
                        </div>
                    </article>

                    <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500">
                        <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 relative">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-500/80 text-white px-3 py-1 rounded-full text-sm">Lifestyle</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 group-hover:text-green-400 transition-colors duration-300">Digital Wellness in 2025</h3>
                            <p class="text-gray-400 mb-4">Strategies for maintaining mental health in our digital world...</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">6 min read</span>
                                <button class="text-green-400 hover:text-green-300 transition-colors duration-300">Read More →</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </article>

    <!-- Newsletter Section -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 backdrop-blur-sm rounded-3xl p-12 border border-white/10">
                <h2 class="text-4xl font-bold mb-6">
                    Stay Updated with <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">InkFlow</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Get the latest articles and insights delivered to your inbox
                </p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input 
                        type="email" 
                        placeholder="Enter your email" 
                        class="flex-1 px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:bg-white/20 transition-all duration-300"
                    >
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-4 rounded-full font-semibold hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InkFlow - Where Stories Come Alive</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
                            '100%': { boxShadow: '0 0 30px rgba(59, 130, 246, 0.8)' }
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
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white overflow-x-hidden">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-pink-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -1.5s;"></div>
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
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Articles</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Categories</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">About</a>
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-2 rounded-full hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                        Subscribe
                    </button>
                </div>
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-6 pt-20">
        <div class="max-w-6xl mx-auto text-center">
            <div class="animate-slide-up">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Where <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent animate-glow">Stories</span> Come Alive
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Discover captivating articles, insightful perspectives, and inspiring narratives that ignite your imagination and expand your horizons.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                        Start Reading
                    </button>
                    <button class="border-2 border-white/20 px-8 py-4 rounded-full text-lg font-semibold hover:bg-white/10 hover:border-white/40 transition-all duration-300 transform hover:scale-105">
                        Explore Categories
                    </button>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 animate-fade-in">
                <div class="text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <div class="text-3xl font-bold text-blue-400 mb-2">10K+</div>
                    <div class="text-gray-300">Articles Published</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <div class="text-3xl font-bold text-purple-400 mb-2">50K+</div>
                    <div class="text-gray-300">Active Readers</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                    <div class="text-3xl font-bold text-pink-400 mb-2">100+</div>
                    <div class="text-gray-300">Expert Writers</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Articles -->
    <section class="py-20 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Featured <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Articles</span>
                </h2>
                <p class="text-xl text-gray-300">Discover our most popular and trending content</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article Card 1 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-blue-500/80 text-white px-3 py-1 rounded-full text-sm">Technology</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400 transition-colors duration-300">The Future of AI in Content Creation</h3>
                        <p class="text-gray-400 mb-4 line-clamp-3">Exploring how artificial intelligence is revolutionizing the way we create and consume digital content...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">5 min read</span>
                            <button class="text-blue-400 hover:text-blue-300 transition-colors duration-300">Read More →</button>
                        </div>
                    </div>
                </article>

                <!-- Article Card 2 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-purple-500/80 text-white px-3 py-1 rounded-full text-sm">Design</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition-colors duration-300">Minimalist Design Principles</h3>
                        <p class="text-gray-400 mb-4 line-clamp-3">Understanding the power of simplicity in modern web design and user experience...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">8 min read</span>
                            <button class="text-purple-400 hover:text-purple-300 transition-colors duration-300">Read More →</button>
                        </div>
                    </div>
                </article>

                <!-- Article Card 3 -->
                <article class="group bg-white/5 backdrop-blur-sm rounded-2xl overflow-hidden border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-green-500/80 text-white px-3 py-1 rounded-full text-sm">Lifestyle</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3 group-hover:text-green-400 transition-colors duration-300">Digital Wellness in 2025</h3>
                        <p class="text-gray-400 mb-4 line-clamp-3">Strategies for maintaining mental health and productivity in our hyper-connected world...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">6 min read</span>
                            <button class="text-green-400 hover:text-green-300 transition-colors duration-300">Read More →</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 px-6 relative">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 backdrop-blur-sm rounded-3xl p-12 border border-white/10">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Never Miss a <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Story</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Subscribe to our newsletter and get the latest articles delivered straight to your inbox
                </p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input 
                        type="email" 
                        placeholder="Enter your email" 
                        class="flex-1 px-6 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:bg-white/20 transition-all duration-300"
                    >
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-4 rounded-full font-semibold hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
                <p class="text-sm text-gray-400 mt-4">No spam, unsubscribe at any time</p>
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

    <script>
        // Add smooth scrolling and intersection observer for animations
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);

            // Observe all article cards
            document.querySelectorAll('article').forEach(card => {
                observer.observe(card);
            });

            // Add parallax effect to background elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelectorAll('.animate-float');
                const speed = 0.5;

                parallax.forEach(element => {
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                });
            });

            // Add hover effects to buttons
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05) translateY(-2px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1) translateY(0)';
                });
            });
        });
    </script>
</body>
</html>
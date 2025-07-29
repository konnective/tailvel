<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful Musings | Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#6366F1',
                        dark: '#1E293B',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-pattern {
            background-color: #4F46E5;
            background-image: radial-gradient(at 10% 20%, rgba(99, 102, 241, 0.8) 0px, transparent 50%),
                            radial-gradient(at 80% 0%, rgba(79, 70, 229, 0.8) 0px, transparent 50%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-dark">Mindful Musings</span>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-8">
                    <a href="#" class="px-3 py-2 text-sm font-medium text-dark hover:text-primary">Home</a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-dark hover:text-primary">Blog</a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-dark hover:text-primary">Categories</a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-dark hover:text-primary">About</a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-dark hover:text-primary">Contact</a>
                </div>
                <div class="flex items-center">
                    <button class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:scale-105">Subscribe</button>
                    <button class="ml-4 sm:hidden">
                        <svg class="h-6 w-6 text-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-pattern text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Discover Insights That Transform Your Perspective</h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90">Thoughtful articles on mindfulness, productivity, and personal growth to help you live a more intentional life.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <button class="bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition duration-300 ease-in-out transform hover:scale-105">Start Reading</button>
                        <button class="border border-white text-white hover:bg-white hover:text-primary px-6 py-3 rounded-md font-medium transition duration-300 ease-in-out">Learn More</button>
                    </div>
                </div>
                <div class="hidden md:block">
                    <svg class="w-full h-auto" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="70" y="50" width="360" height="300" rx="8" fill="white" />
                        <rect x="100" y="90" width="300" height="160" rx="4" fill="#E2E8F0" />
                        <rect x="100" y="270" width="180" height="16" rx="2" fill="#94A3B8" />
                        <rect x="100" y="300" width="240" height="12" rx="2" fill="#CBD5E1" />
                        <rect x="100" y="320" width="220" height="12" rx="2" fill="#CBD5E1" />
                        <circle cx="140" cy="70" r="8" fill="#10B981" />
                        <circle cx="170" cy="70" r="8" fill="#FBBF24" />
                        <circle cx="200" cy="70" r="8" fill="#EF4444" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Posts -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-dark mb-4">Featured Articles</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Explore our most popular and thought-provoking content that readers love.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Featured Post 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-gray-200 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Mindfulness</span>
                        <span class="text-gray-500 text-sm ml-auto">5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">The Art of Mindful Living in a Distracted World</h3>
                    <p class="text-gray-600 mb-4">Discover practical techniques to stay present and focused in an increasingly chaotic environment.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Sarah Johnson</p>
                            <p class="text-xs text-gray-500">June 12, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>

            <!-- Featured Post 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-gray-200 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Productivity</span>
                        <span class="text-gray-500 text-sm ml-auto">8 min read</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">Deep Work: Achieving Flow State in Your Daily Routine</h3>
                    <p class="text-gray-600 mb-4">Learn how to structure your day for maximum focus and productivity without burnout.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Michael Chen</p>
                            <p class="text-xs text-gray-500">May 28, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>

            <!-- Featured Post 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="h-48 bg-gray-200 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Personal Growth</span>
                        <span class="text-gray-500 text-sm ml-auto">6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">Building Resilience: Turning Challenges into Opportunities</h3>
                    <p class="text-gray-600 mb-4">Strategies for developing mental toughness and adapting to life's inevitable changes.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Alex Rivera</p>
                            <p class="text-xs text-gray-500">June 3, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md font-medium transition duration-300 ease-in-out">View All Articles</button>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Explore Categories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Find content that matches your interests and helps you grow.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center">
                    <div class="bg-blue-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Mindfulness</h3>
                    <p class="text-gray-600 text-sm mb-3">42 articles</p>
                    <a href="#" class="text-primary hover:text-secondary text-sm font-medium">Browse →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center">
                    <div class="bg-green-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Productivity</h3>
                    <p class="text-gray-600 text-sm mb-3">37 articles</p>
                    <a href="#" class="text-primary hover:text-secondary text-sm font-medium">Browse →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center">
                    <div class="bg-purple-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Personal Growth</h3>
                    <p class="text-gray-600 text-sm mb-3">29 articles</p>
                    <a href="#" class="text-primary hover:text-secondary text-sm font-medium">Browse →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 text-center">
                    <div class="bg-yellow-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Relationships</h3>
                    <p class="text-gray-600 text-sm mb-3">24 articles</p>
                    <a href="#" class="text-primary hover:text-secondary text-sm font-medium">Browse →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-primary rounded-xl overflow-hidden shadow-xl">
            <div class="px-6 py-12 md:p-12 md:flex items-center">
                <div class="md:w-2/3 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold text-white mb-4">Join Our Newsletter</h2>
                    <p class="text-blue-100 mb-6">Get our latest articles, resources, and insights delivered straight to your inbox every week.</p>
                    <div class="flex flex-col sm:flex-row">
                        <input type="email" placeholder="Your email address" class="px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300 mb-3 sm:mb-0 sm:mr-3 flex-grow" />
                        <button class="bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition duration-300 ease-in-out">Subscribe</button>
                    </div>
                    <p class="text-blue-100 text-sm mt-4">We respect your privacy. Unsubscribe at any time.</p>
                </div>
                <div class="md:w-1/3">
                    <svg class="w-full h-auto" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M160 40H40C26.7 40 16 50.7 16 64v72c0 13.3 10.7 24 24 24h120c13.3 0 24-10.7 24-24V64c0-13.3-10.7-24-24-24z" fill="white" fill-opacity="0.1"/>
                        <path d="M40 56h120M40 80h120M40 104h80" stroke="white" stroke-width="4" stroke-linecap="round"/>
                        <circle cx="140" cy="104" r="12" fill="white" fill-opacity="0.3"/>
                        <path d="M100 40L160 160H40L100 40z" fill="white" fill-opacity="0.1" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-xl font-bold">Mindful Musings</span>
                    </div>
                    <p class="text-gray-400 mb-4">Thoughtful content for mindful living and personal growth.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Featured Articles</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Mindfulness</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Productivity</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Personal Growth</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Relationships</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Creativity</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>hello@mindfulmusings.com</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>123 Mindful Street<br>San Francisco, CA 94103</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2023 Mindful Musings. All rights reserved.</p>
                <div class="mt-4 md:mt-0">
                    <ul class="flex space-x-6 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('button.ml-4.sm\\:hidden');
            const mobileMenu = document.createElement('div');
            mobileMenu.className = 'fixed inset-0 bg-dark bg-opacity-90 z-50 transform transition-transform duration-300 ease-in-out translate-x-full';
            mobileMenu.innerHTML = `
                <div class="flex justify-end p-4">
                    <button class="text-white" id="closeMenu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col items-center justify-center h-full">
                    <a href="#" class="text-white text-xl font-medium py-3">Home</a>
                    <a href="#" class="text-white text-xl font-medium py-3">Blog</a>
                    <a href="#" class="text-white text-xl font-medium py-3">Categories</a>
                    <a href="#" class="text-white text-xl font-medium py-3">About</a>
                    <a href="#" class="text-white text-xl font-medium py-3">Contact</a>
                    <button class="mt-6 bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md text-lg font-medium transition duration-300 ease-in-out">Subscribe</button>
                </div>
            `;
            document.body.appendChild(mobileMenu);
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('translate-x-full');
            });
            
            document.getElementById('closeMenu').addEventListener('click', function() {
                mobileMenu.classList.add('translate-x-full');
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966471b144979a4a',t:'MTc1MzcwNjQxNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

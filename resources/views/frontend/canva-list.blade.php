<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Mindful Musings</title>
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
        .page-header {
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
                    <a href="#" class="px-3 py-2 text-sm font-medium text-primary border-b-2 border-primary">Blog</a>
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

    <!-- Page Header -->
    <div class="page-header text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Blog</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Explore our collection of articles on mindfulness, productivity, and personal growth.</p>
            </div>
        </div>
    </div>

    <!-- Blog Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Search and Filter -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 space-y-4 md:space-y-0">
            <div class="w-full md:w-auto">
                <div class="relative">
                    <input type="text" placeholder="Search articles..." class="w-full md:w-80 pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                    <div class="absolute left-3 top-2.5">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap gap-2">
                <div class="relative">
                    <select class="appearance-none bg-white border border-gray-300 rounded-md pl-4 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary text-sm">
                        <option>All Categories</option>
                        <option>Mindfulness</option>
                        <option>Productivity</option>
                        <option>Personal Growth</option>
                        <option>Relationships</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative">
                    <select class="appearance-none bg-white border border-gray-300 rounded-md pl-4 pr-10 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary text-sm">
                        <option>Latest First</option>
                        <option>Oldest First</option>
                        <option>Most Popular</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button id="grid-view" class="p-2 bg-primary text-white rounded-md">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </button>
                    <button id="list-view" class="p-2 bg-white border border-gray-300 text-gray-600 rounded-md">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Category Pills -->
        <div class="flex flex-wrap gap-2 mb-8">
            <button class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium">All</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-100">Mindfulness</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-100">Productivity</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-100">Personal Growth</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-100">Relationships</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-100">Creativity</button>
        </div>

        <!-- Featured Post -->
        <div class="mb-12">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                <div class="md:flex">
                    <div class="md:w-1/3 h-64 md:h-auto bg-gray-200 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 md:w-2/3">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Featured</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">Personal Growth</span>
                            <span class="text-gray-500 text-sm ml-auto">June 15, 2023</span>
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-dark">The Transformative Power of Daily Reflection: A 30-Day Journey</h2>
                        <p class="text-gray-600 mb-4">Discover how setting aside just 10 minutes each day for intentional reflection can dramatically improve your mental clarity, decision-making, and overall well-being. This comprehensive guide walks you through a month-long practice with prompts and techniques.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-dark">Emma Rodriguez</p>
                                    <p class="text-xs text-gray-500">Lead Mindfulness Coach</p>
                                </div>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="flex items-center mr-4">
                                    <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    2.4K
                                </span>
                                <span class="flex items-center">
                                    <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                    </svg>
                                    128
                                </span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-primary hover:text-secondary font-medium">
                                Read Full Article
                                <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid View (Default) -->
        <div id="grid-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post 1 -->
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
                        <span class="text-gray-500 text-sm ml-auto">June 12, 2023</span>
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

            <!-- Post 2 -->
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
                        <span class="text-gray-500 text-sm ml-auto">May 28, 2023</span>
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

            <!-- Post 3 -->
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
                        <span class="text-gray-500 text-sm ml-auto">June 3, 2023</span>
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

            <!-- Post 4 -->
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
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Relationships</span>
                        <span class="text-gray-500 text-sm ml-auto">May 20, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">The Five Languages of Appreciation in the Workplace</h3>
                    <p class="text-gray-600 mb-4">How understanding different communication styles can transform your professional relationships.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Priya Sharma</p>
                            <p class="text-xs text-gray-500">May 20, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>

            <!-- Post 5 -->
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
                        <span class="text-gray-500 text-sm ml-auto">June 8, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">Mindful Eating: Transform Your Relationship with Food</h3>
                    <p class="text-gray-600 mb-4">Practical techniques to bring awareness to your eating habits and develop healthier patterns.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">David Wilson</p>
                            <p class="text-xs text-gray-500">June 8, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>

            <!-- Post 6 -->
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
                        <span class="bg-pink-100 text-pink-800 text-xs font-medium px-2.5 py-0.5 rounded">Creativity</span>
                        <span class="text-gray-500 text-sm ml-auto">May 15, 2023</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-dark">Unlocking Your Creative Potential Through Daily Practice</h3>
                    <p class="text-gray-600 mb-4">Simple exercises to nurture your creativity and overcome creative blocks.</p>
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Jordan Taylor</p>
                            <p class="text-xs text-gray-500">May 15, 2023</p>
                        </div>
                        <button class="ml-auto text-primary hover:text-secondary">Read more →</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- List View (Hidden by Default) -->
        <div id="list-container" class="hidden space-y-6">
            <!-- List Item 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 flex flex-col md:flex-row">
                    <div class="md:w-1/4 h-40 md:h-auto bg-gray-200 rounded-lg mb-4 md:mb-0 md:mr-6 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="md:w-3/4">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Mindfulness</span>
                            <span class="text-gray-500 text-sm ml-auto">June 12, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-dark">The Art of Mindful Living in a Distracted World</h3>
                        <p class="text-gray-600 mb-4">Discover practical techniques to stay present and focused in an increasingly chaotic environment. Learn how to incorporate mindfulness into your daily routines and transform your relationship with technology.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-dark">Sarah Johnson</p>
                                    <p class="text-xs text-gray-500">Mindfulness Coach</p>
                                </div>
                            </div>
                            <button class="text-primary hover:text-secondary">Read more →</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- List Item 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 flex flex-col md:flex-row">
                    <div class="md:w-1/4 h-40 md:h-auto bg-gray-200 rounded-lg mb-4 md:mb-0 md:mr-6 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="md:w-3/4">
                        <div class="flex items-center mb-2">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Productivity</span>
                            <span class="text-gray-500 text-sm ml-auto">May 28, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-dark">Deep Work: Achieving Flow State in Your Daily Routine</h3>
                        <p class="text-gray-600 mb-4">Learn how to structure your day for maximum focus and productivity without burnout. This article explores techniques used by top performers to achieve consistent states of flow.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-dark">Michael Chen</p>
                                    <p class="text-xs text-gray-500">Productivity Expert</p>
                                </div>
                            </div>
                            <button class="text-primary hover:text-secondary">Read more →</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- List Item 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 flex flex-col md:flex-row">
                    <div class="md:w-1/4 h-40 md:h-auto bg-gray-200 rounded-lg mb-4 md:mb-0 md:mr-6 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="md:w-3/4">
                        <div class="flex items-center mb-2">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Personal Growth</span>
                            <span class="text-gray-500 text-sm ml-auto">June 3, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-dark">Building Resilience: Turning Challenges into Opportunities</h3>
                        <p class="text-gray-600 mb-4">Strategies for developing mental toughness and adapting to life's inevitable changes. Discover how resilient people view setbacks as temporary and opportunities for growth.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-dark">Alex Rivera</p>
                                    <p class="text-xs text-gray-500">Life Coach</p>
                                </div>
                            </div>
                            <button class="text-primary hover:text-secondary">Read more →</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- List Item 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="p-6 flex flex-col md:flex-row">
                    <div class="md:w-1/4 h-40 md:h-auto bg-gray-200 rounded-lg mb-4 md:mb-0 md:mr-6 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="md:w-3/4">
                        <div class="flex items-center mb-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Relationships</span>
                            <span class="text-gray-500 text-sm ml-auto">May 20, 2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-dark">The Five Languages of Appreciation in the Workplace</h3>
                        <p class="text-gray-600 mb-4">How understanding different communication styles can transform your professional relationships and create a more positive work environment.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-gray-300"></div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-dark">Priya Sharma</p>
                                    <p class="text-xs text-gray-500">HR Consultant</p>
                                </div>
                            </div>
                            <button class="text-primary hover:text-secondary">Read more →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="py-2 px-4 bg-white border border-gray-300 rounded-l-md text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="py-2 px-4 bg-primary border border-primary text-sm font-medium text-white">1</a>
                <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                <span class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700">...</span>
                <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">8</a>
                <a href="#" class="py-2 px-4 bg-white border border-gray-300 rounded-r-md text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary rounded-xl overflow-hidden shadow-xl">
                <div class="px-6 py-12 md:p-12 md:flex items-center">
                    <div class="md:w-2/3 mb-8 md:mb-0 md:pr-8">
                        <h2 class="text-3xl font-bold text-white mb-4">Never Miss an Article</h2>
                        <p class="text-blue-100 mb-6">Join our community of mindful readers and get weekly insights delivered straight to your inbox.</p>
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
                    <a href="#" class="text-primary text-xl font-medium py-3">Blog</a>
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

            // Grid/List view toggle
            const gridViewBtn = document.getElementById('grid-view');
            const listViewBtn = document.getElementById('list-view');
            const gridContainer = document.getElementById('grid-container');
            const listContainer = document.getElementById('list-container');

            gridViewBtn.addEventListener('click', function() {
                gridContainer.classList.remove('hidden');
                listContainer.classList.add('hidden');
                gridViewBtn.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-600');
                gridViewBtn.classList.add('bg-primary', 'text-white');
                listViewBtn.classList.remove('bg-primary', 'text-white');
                listViewBtn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-600');
            });

            listViewBtn.addEventListener('click', function() {
                gridContainer.classList.add('hidden');
                listContainer.classList.remove('hidden');
                listViewBtn.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-600');
                listViewBtn.classList.add('bg-primary', 'text-white');
                gridViewBtn.classList.remove('bg-primary', 'text-white');
                gridViewBtn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-600');
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9664823bb67a4236',t:'MTc1MzcwNzA5NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Mindful Musings</title>
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
        .team-member:hover .member-overlay {
            opacity: 1;
        }
        .timeline-item:before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #4F46E5;
            left: -8px;
            top: 24px;
        }
        .timeline-item {
            position: relative;
            border-left: 2px solid #E5E7EB;
            padding-left: 24px;
            padding-bottom: 32px;
        }
        .timeline-item:last-child {
            border-left: 2px solid transparent;
        }
        .value-card:hover {
            transform: translateY(-5px);
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
                    <a href="#" class="px-3 py-2 text-sm font-medium text-primary border-b-2 border-primary">About</a>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About Mindful Musings</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Our mission is to inspire mindful living through thoughtful content that nurtures personal growth.</p>
            </div>
        </div>
    </div>

    <!-- About Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Our Story Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Our Story</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="aspect-w-4 aspect-h-3 rounded-xl overflow-hidden bg-gray-200 shadow-lg">
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4V5h12v10z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-dark mb-4">From Small Beginnings</h3>
                    <p class="text-gray-600 mb-6">Mindful Musings began in 2018 as a personal blog by our founder, Emma Rodriguez. After experiencing burnout in her corporate career, Emma turned to mindfulness practices and personal development to rebuild her life with intention and purpose.</p>
                    <p class="text-gray-600 mb-6">What started as a way to document her journey and share insights with friends quickly grew into a community of like-minded individuals seeking a more balanced approach to life and work.</p>
                    <p class="text-gray-600">Today, Mindful Musings has evolved into a collaborative platform featuring diverse voices and perspectives, all united by the common goal of helping readers live more mindfully, productively, and authentically.</p>
                </div>
            </div>
            
            <!-- Timeline -->
            <div class="mt-20">
                <h3 class="text-2xl font-bold text-dark mb-8 text-center">Our Journey</h3>
                <div class="max-w-3xl mx-auto pl-8">
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2018</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">The Beginning</h4>
                        <p class="text-gray-600">Emma launches Mindful Musings as a personal blog, sharing her experiences with mindfulness and burnout recovery.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2019</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">Growing Community</h4>
                        <p class="text-gray-600">The blog gains traction, reaching 10,000 monthly readers. Emma invites guest contributors to share their expertise.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2020</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">Expanding Horizons</h4>
                        <p class="text-gray-600">Mindful Musings incorporates as a company, builds a core team, and launches its first digital products and courses.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2021</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">New Directions</h4>
                        <p class="text-gray-600">We redesign our platform, organize content into distinct categories, and launch our popular weekly newsletter.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2022</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">Building Partnerships</h4>
                        <p class="text-gray-600">Mindful Musings collaborates with leading experts and organizations in the wellness and productivity space.</p>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="mb-2 text-primary font-bold">2023</div>
                        <h4 class="text-lg font-semibold text-dark mb-2">Present Day</h4>
                        <p class="text-gray-600">With over 500,000 monthly readers, we continue to expand our content offerings while staying true to our core mission.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Our Values Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Our Values</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">These core principles guide everything we do at Mindful Musings, from the content we create to how we interact with our community.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-blue-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Authenticity</h3>
                    <p class="text-gray-600 text-center">We believe in being genuine and transparent in all our content and communications. We share real experiences, backed by research, without exaggeration or false promises.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-green-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v1h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-1a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Inclusivity</h3>
                    <p class="text-gray-600 text-center">We celebrate diversity of thought, experience, and background. Our content aims to be accessible and relevant to people from all walks of life, regardless of their starting point.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-purple-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Practicality</h3>
                    <p class="text-gray-600 text-center">We focus on actionable advice that can be implemented in everyday life. Theory is important, but we believe the true value comes from practical application and real-world results.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-yellow-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Evidence-Based</h3>
                    <p class="text-gray-600 text-center">We ground our content in scientific research and expert knowledge whenever possible, while acknowledging that personal experience and intuition also have their place.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-pink-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Compassion</h3>
                    <p class="text-gray-600 text-center">We approach our content and community with kindness and understanding, recognizing that everyone's journey is unique and that growth is rarely linear.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 value-card">
                    <div class="bg-indigo-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Mindfulness</h3>
                    <p class="text-gray-600 text-center">We believe in the power of present-moment awareness and intentional living. This principle infuses all our content categories, not just those explicitly about mindfulness.</p>
                </div>
            </div>
        </div>
        
        <!-- Meet Our Team Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Meet Our Team</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">The passionate individuals behind Mindful Musings who bring their expertise and unique perspectives to our content.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-member relative rounded-xl overflow-hidden shadow-lg group">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200">
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-dark">Emma Rodriguez</h3>
                        <p class="text-primary font-medium">Founder & Editor-in-Chief</p>
                    </div>
                    <div class="member-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-lg font-semibold text-white mb-2">Emma Rodriguez</h3>
                        <p class="text-blue-100 mb-4">Former corporate executive turned mindfulness advocate. Emma holds certifications in mindfulness teaching and positive psychology.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member relative rounded-xl overflow-hidden shadow-lg group">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200">
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-dark">Michael Chen</h3>
                        <p class="text-primary font-medium">Productivity Editor</p>
                    </div>
                    <div class="member-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-lg font-semibold text-white mb-2">Michael Chen</h3>
                        <p class="text-blue-100 mb-4">Productivity expert and former tech executive. Michael specializes in systems thinking and helping readers optimize their workflows without burnout.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member relative rounded-xl overflow-hidden shadow-lg group">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200">
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-dark">Dr. Maya Patel</h3>
                        <p class="text-primary font-medium">Personal Growth Editor</p>
                    </div>
                    <div class="member-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-lg font-semibold text-white mb-2">Dr. Maya Patel</h3>
                        <p class="text-blue-100 mb-4">Psychologist with expertise in positive psychology and behavior change. Maya brings evidence-based approaches to personal development.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-member relative rounded-xl overflow-hidden shadow-lg group">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200">
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="text-lg font-semibold text-dark">Alex Rivera</h3>
                        <p class="text-primary font-medium">Community Manager</p>
                    </div>
                    <div class="member-overlay absolute inset-0 bg-primary bg-opacity-90 p-6 flex flex-col justify-center opacity-0 transition-opacity duration-300">
                        <h3 class="text-lg font-semibold text-white mb-2">Alex Rivera</h3>
                        <p class="text-blue-100 mb-4">Community builder and content strategist. Alex manages our social media presence and fosters meaningful connections within our reader community.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-blue-200">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-6">We also work with a diverse network of contributors, experts, and guest writers who bring their unique perspectives to our platform.</p>
                <a href="#" class="inline-flex items-center text-primary hover:text-secondary font-medium">
                    Interested in contributing?
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Testimonials Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">What Our Readers Say</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">The impact of Mindful Musings in our readers' own words.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Mindful Musings has been a game-changer for me. The practical advice on building a mindfulness practice helped me manage my anxiety and find more joy in everyday moments."</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Sarah T.</p>
                            <p class="text-xs text-gray-500">Marketing Manager</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">"I've implemented several of the productivity systems from Michael's articles, and they've completely transformed how I work. I'm getting more done in less time and actually enjoying the process."</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">James K.</p>
                            <p class="text-xs text-gray-500">Software Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">"What sets Mindful Musings apart is how they blend research with real-world application. The relationship articles have helped me communicate better with my partner and build a stronger connection."</p>
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-dark">Leila M.</p>
                            <p class="text-xs text-gray-500">Healthcare Professional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="bg-primary rounded-xl overflow-hidden shadow-xl">
            <div class="px-6 py-12 md:p-12 md:flex items-center">
                <div class="md:w-2/3 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold text-white mb-4">Join Our Community</h2>
                    <p class="text-blue-100 mb-6">Subscribe to our newsletter and become part of a growing community dedicated to mindful living and personal growth.</p>
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
    <footer class="bg-dark text-white mt-12">
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
                    <a href="#" class="text-primary text-xl font-medium py-3">About</a>
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
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'966562f4b6b50330',t:'MTc1MzcxNjI5OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

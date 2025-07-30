<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Chen - Web Designer & Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        .gradient-text {
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .parallax-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        
        .parallax-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1.5" fill="rgba(255,255,255,0.1)"/></svg>');
            animation: sparkle 20s linear infinite;
        }
        
        @keyframes sparkle {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(100px) translateY(100px); }
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-effect">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold gradient-text">AC</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-primary transition-colors">Home</a>
                    <a href="#about" class="hover:text-primary transition-colors">About</a>
                    <a href="#projects" class="hover:text-primary transition-colors">Projects</a>
                    <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
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
    <section id="home" class="parallax-bg min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-6 text-center">
            <div class="floating-animation">
                <h1 class="text-6xl md:text-8xl font-bold mb-6">
                    <span class="gradient-text">Alex Chen</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200">
                    Web Designer & Developer
                </p>
                <p class="text-lg mb-12 text-gray-300 max-w-2xl mx-auto">
                    Crafting digital experiences that blend beautiful design with powerful functionality. 
                    Turning ideas into pixel-perfect realities.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#projects" class="bg-primary hover:bg-primary/80 px-8 py-3 rounded-full transition-all transform hover:scale-105">
                    View My Work
                </a>
                <a href="#contact" class="border border-white hover:bg-white hover:text-gray-900 px-8 py-3 rounded-full transition-all">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-6 gradient-text">About Me</h2>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        I'm a passionate web designer and developer with over 5 years of experience creating 
                        stunning digital experiences. I specialize in modern web technologies and have a keen 
                        eye for design that converts visitors into customers.
                    </p>
                    <p class="text-gray-300 mb-8 leading-relaxed">
                        My approach combines creative design thinking with technical expertise to deliver 
                        websites that not only look amazing but perform exceptionally well across all devices.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-gray-700 rounded-lg">
                            <div class="text-3xl font-bold text-primary">50+</div>
                            <div class="text-gray-400">Projects Completed</div>
                        </div>
                        <div class="text-center p-4 bg-gray-700 rounded-lg">
                            <div class="text-3xl font-bold text-primary">5+</div>
                            <div class="text-gray-400">Years Experience</div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4">Skills & Technologies</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">HTML5</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">CSS3</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">JavaScript</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">Node.js</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">Figma</span>
                            <span class="bg-primary px-3 py-1 rounded-full text-sm">WordPress</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 gradient-text">Featured Projects</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    A showcase of my recent work, demonstrating my ability to create 
                    engaging and functional web experiences.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">E-Commerce Platform</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">TechStore Pro</h3>
                        <p class="text-gray-400 mb-4">
                            Modern e-commerce platform with React and Stripe integration. 
                            Features real-time inventory and mobile-first design.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-blue-500 px-2 py-1 rounded">React</span>
                                <span class="text-xs bg-green-500 px-2 py-1 rounded">Node.js</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-pink-500 to-rose-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">Portfolio Website</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Creative Agency</h3>
                        <p class="text-gray-400 mb-4">
                            Award-winning portfolio site for a creative agency. Features 
                            smooth animations and immersive user experience.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-yellow-500 px-2 py-1 rounded">HTML5</span>
                                <span class="text-xs bg-blue-500 px-2 py-1 rounded">CSS3</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">SaaS Dashboard</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Analytics Pro</h3>
                        <p class="text-gray-400 mb-4">
                            Comprehensive analytics dashboard with real-time data 
                            visualization and interactive charts.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-blue-500 px-2 py-1 rounded">Vue.js</span>
                                <span class="text-xs bg-purple-500 px-2 py-1 rounded">D3.js</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">Restaurant App</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Foodie Delight</h3>
                        <p class="text-gray-400 mb-4">
                            Restaurant website with online ordering system, reservation 
                            booking, and dynamic menu management.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-blue-500 px-2 py-1 rounded">React</span>
                                <span class="text-xs bg-red-500 px-2 py-1 rounded">Firebase</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-indigo-500 to-blue-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">Learning Platform</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">EduTech Hub</h3>
                        <p class="text-gray-400 mb-4">
                            Online learning platform with video streaming, progress 
                            tracking, and interactive quizzes.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-green-500 px-2 py-1 rounded">Next.js</span>
                                <span class="text-xs bg-blue-500 px-2 py-1 rounded">MongoDB</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-lg mb-4 mx-auto opacity-90"></div>
                                <div class="text-white font-semibold">Crypto Tracker</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">CoinWatch Pro</h3>
                        <p class="text-gray-400 mb-4">
                            Real-time cryptocurrency tracking app with portfolio 
                            management and price alerts.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-yellow-500 px-2 py-1 rounded">JavaScript</span>
                                <span class="text-xs bg-green-500 px-2 py-1 rounded">Chart.js</span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="text-primary hover:text-primary/80">Live</a>
                                <a href="#" class="text-gray-400 hover:text-white">Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 gradient-text">Let's Work Together</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Ready to bring your vision to life? Let's discuss your project 
                    and create something amazing together.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Get In Touch</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-400">Email</div>
                                <div>alex@webdesigner.com</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-400">Phone</div>
                                <div>+1 (555) 123-4567</div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-400">Location</div>
                                <div>San Francisco, CA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-700 p-8 rounded-lg">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 bg-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Project Type</label>
                            <select class="w-full px-4 py-3 bg-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
                                <option>Web Design</option>
                                <option>Web Development</option>
                                <option>E-commerce</option>
                                <option>UI/UX Design</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 bg-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-primary/80 py-3 rounded-lg transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-900 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="text-2xl font-bold gradient-text mb-2">Alex Chen</div>
                    <p class="text-gray-400">Creating digital experiences that inspire</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.222.085.343-.09.377-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.486-1.378l-.679 2.61c-.24.943-.9 2.125-1.378 2.863 1.043.32 2.151.493 3.304.493 6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 Alex Chen. All rights reserved. Crafted with passion and code.</p>
            </div>
        </div>
    </footer>

    <script>
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

        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('button');
        const navLinks = document.querySelector('.hidden.md\\:flex');
        
        if (mobileMenuButton && navLinks) {
            mobileMenuButton.addEventListener('click', () => {
                navLinks.classList.toggle('hidden');
                navLinks.classList.toggle('flex');
                navLinks.classList.toggle('flex-col');
                navLinks.classList.toggle('absolute');
                navLinks.classList.toggle('top-full');
                navLinks.classList.toggle('left-0');
                navLinks.classList.toggle('w-full');
                navLinks.classList.toggle('bg-gray-900');
                navLinks.classList.toggle('p-4');
            });
        }

        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(17, 24, 39, 0.95)';
            } else {
                nav.style.background = 'rgba(255, 255, 255, 0.1)';
            }
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! I\'ll get back to you soon.');
            this.reset();
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe project cards
        document.querySelectorAll('.project-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>
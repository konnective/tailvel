<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Mindful Musings</title>
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
        .contact-option:hover {
            transform: translateY(-5px);
        }
        .form-input:focus {
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
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
                    <a href="#" class="px-3 py-2 text-sm font-medium text-primary border-b-2 border-primary">Contact</a>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">We'd love to hear from you. Reach out with questions, feedback, or partnership opportunities.</p>
            </div>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Contact Options -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">How Can We Help?</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Choose the best way to connect with our team based on your needs.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 contact-option">
                    <div class="bg-blue-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Email Us</h3>
                    <p class="text-gray-600 text-center mb-6">For general inquiries, feedback, or questions about our content.</p>
                    <div class="text-center">
                        <a href="mailto:hello@mindfulmusings.com" class="text-primary hover:text-secondary font-medium">hello@mindfulmusings.com</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 contact-option">
                    <div class="bg-green-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Live Chat</h3>
                    <p class="text-gray-600 text-center mb-6">Need immediate assistance? Chat with our support team during business hours.</p>
                    <div class="text-center">
                        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-medium transition duration-300">Start Chat</button>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 contact-option">
                    <div class="bg-purple-100 h-16 w-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-dark">Call Us</h3>
                    <p class="text-gray-600 text-center mb-6">Prefer to speak with someone directly? Our team is available Monday-Friday, 9am-5pm PT.</p>
                    <div class="text-center">
                        <a href="tel:+15551234567" class="text-primary hover:text-secondary font-medium">+1 (555) 123-4567</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form Section -->
        <div class="mb-20">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                <div class="md:flex">
                    <div class="md:w-1/3 bg-primary p-8 text-white">
                        <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
                        <p class="mb-8 text-blue-100">Fill out the form and we'll get back to you as soon as possible.</p>
                        
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4">Our Office</h4>
                            <address class="not-italic text-blue-100">
                                123 Mindful Street<br>
                                San Francisco, CA 94103<br>
                                United States
                            </address>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold mb-4">Business Hours</h4>
                            <ul class="space-y-2 text-blue-100">
                                <li>Monday - Friday: 9:00 AM - 5:00 PM PT</li>
                                <li>Saturday: 10:00 AM - 2:00 PM PT</li>
                                <li>Sunday: Closed</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="md:w-2/3 p-8">
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" required>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number (Optional)</label>
                                    <input type="tel" id="phone" name="phone" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                </div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" required>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea id="message" name="message" rows="5" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" required></textarea>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="newsletter" class="font-medium text-gray-700">Subscribe to our newsletter</label>
                                    <p class="text-gray-500">Get weekly insights on mindfulness and personal growth.</p>
                                </div>
                            </div>
                            
                            <div>
                                <button type="submit" class="w-full bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md font-medium transition duration-300">Send Message</button>
                            </div>
                            
                            <p class="text-sm text-gray-500 text-center">By submitting this form, you agree to our <a href="#" class="text-primary hover:text-secondary">Privacy Policy</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Find quick answers to common questions about Mindful Musings.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-dark mb-2">How can I contribute an article to Mindful Musings?</h3>
                        <p class="text-gray-600">We welcome guest contributions from experts and practitioners in mindfulness, productivity, personal growth, and related fields. Please email us at <a href="mailto:contributors@mindfulmusings.com" class="text-primary hover:text-secondary">contributors@mindfulmusings.com</a> with your pitch and writing samples.</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-dark mb-2">Do you offer speaking engagements or workshops?</h3>
                        <p class="text-gray-600">Yes, our team members are available for speaking engagements, workshops, and corporate training sessions on mindfulness, productivity, and personal development. Please contact us with details about your event for availability and rates.</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-dark mb-2">How can I unsubscribe from your newsletter?</h3>
                        <p class="text-gray-600">You can unsubscribe at any time by clicking the "Unsubscribe" link at the bottom of any newsletter email. If you're having trouble, please contact us and we'll remove you from our mailing list promptly.</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-dark mb-2">Do you offer advertising or sponsorship opportunities?</h3>
                        <p class="text-gray-600">We selectively partner with brands and services that align with our values and would benefit our audience. For partnership inquiries, please email <a href="mailto:partnerships@mindfulmusings.com" class="text-primary hover:text-secondary">partnerships@mindfulmusings.com</a> with details about your company and proposal.</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-dark mb-2">How can I report a technical issue with the website?</h3>
                        <p class="text-gray-600">If you encounter any technical problems while using our website, please email <a href="mailto:support@mindfulmusings.com" class="text-primary hover:text-secondary">support@mindfulmusings.com</a> with details about the issue, including your device, browser, and steps to reproduce the problem.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="mb-20">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                        <svg class="h-24 w-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-dark mb-4">Visit Our Office</h3>
                    <p class="text-gray-600 mb-4">We're located in the heart of San Francisco's Mission District. Stop by to say hello!</p>
                    <div class="flex space-x-4">
                        <a href="https://maps.google.com" target="_blank" class="inline-flex items-center text-primary hover:text-secondary font-medium">
                            Get Directions
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Connect With Us Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark mb-4">Connect With Us</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Follow us on social media for daily inspiration, updates, and community discussions.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="#" class="bg-[#1DA1F2] text-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 text-center">
                    <svg class="h-12 w-12 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Twitter</h3>
                    <p class="text-blue-100 mb-4">Daily tips and thoughtful discussions</p>
                    <span class="inline-flex items-center font-medium">
                        Follow Us
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
                
                <a href="#" class="bg-[#4267B2] text-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 text-center">
                    <svg class="h-12 w-12 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Facebook</h3>
                    <p class="text-blue-100 mb-4">Community discussions and events</p>
                    <span class="inline-flex items-center font-medium">
                        Join Us
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
                
                <a href="#" class="bg-[#E1306C] text-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 text-center">
                    <svg class="h-12 w-12 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Instagram</h3>
                    <p class="text-pink-100 mb-4">Visual inspiration and quotes</p>
                    <span class="inline-flex items-center font-medium">
                        Follow Us
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
                
                <a href="#" class="bg-[#0077B5] text-white rounded-xl p-8 shadow-md hover:shadow-lg transition duration-300 text-center">
                    <svg class="h-12 w-12 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">LinkedIn</h3>
                    <p class="text-blue-100 mb-4">Professional insights and articles</p>
                    <span class="inline-flex items-center font-medium">
                        Connect
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        
        <!-- Newsletter Section -->
        <div class="bg-primary rounded-xl overflow-hidden shadow-xl">
            <div class="px-6 py-12 md:p-12 md:flex items-center">
                <div class="md:w-2/3 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl font-bold text-white mb-4">Stay Updated</h2>
                    <p class="text-blue-100 mb-6">Subscribe to our newsletter for weekly insights, exclusive content, and early access to new resources.</p>
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
                    <a href="#" class="text-white text-xl font-medium py-3">About</a>
                    <a href="#" class="text-primary text-xl font-medium py-3">Contact</a>
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
            
            // Form validation and submission handling
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Simple validation
                    const requiredFields = contactForm.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.classList.add('border-red-500');
                        } else {
                            field.classList.remove('border-red-500');
                        }
                    });
                    
                    if (isValid) {
                        // Show success message (in a real implementation, this would send data to a server)
                        const submitButton = contactForm.querySelector('button[type="submit"]');
                        const originalText = submitButton.textContent;
                        
                        submitButton.disabled = true;
                        submitButton.textContent = 'Sending...';
                        
                        // Simulate form submission
                        setTimeout(() => {
                            const successMessage = document.createElement('div');
                            successMessage.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4';
                            successMessage.innerHTML = `
                                <strong class="font-bold">Thank you!</strong>
                                <span class="block sm:inline"> Your message has been sent successfully. We'll get back to you soon.</span>
                            `;
                            
                            contactForm.reset();
                            contactForm.appendChild(successMessage);
                            
                            submitButton.disabled = false;
                            submitButton.textContent = originalText;
                            
                            // Remove success message after 5 seconds
                            setTimeout(() => {
                                successMessage.remove();
                            }, 5000);
                        }, 1500);
                    }
                });
            }
            
            // Live chat button functionality
            const chatButton = document.querySelector('button.bg-green-600');
            if (chatButton) {
                chatButton.addEventListener('click', function() {
                    alert('Live chat is available Monday-Friday, 9am-5pm PT. Please try again during business hours or leave us a message.');
                });
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'96656c7a54ba032a',t:'MTc1MzcxNjY4OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

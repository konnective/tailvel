<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyBlog – Inspire Your Day</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- Header -->
  <header class="fixed w-full bg-white/90 backdrop-blur-md shadow-md z-30">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-extrabold text-blue-600 hover:text-blue-700 transition">MyBlog</h1>
      <nav class="space-x-6 text-gray-700">
        <a href="#" class="hover:text-blue-600 transition">Home</a>
        <a href="#" class="hover:text-blue-600 transition">Articles</a>
        <a href="#" class="hover:text-blue-600 transition">About</a>
        <a href="#" class="hover:text-blue-600 transition">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative h-screen flex items-center justify-center text-center">
    <img src="https://source.unsplash.com/1600x900/?nature,writing" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-black/25 to-transparent"></div>
    <div class="relative z-10 px-6">
      <h2 class="text-5xl md:text-6xl font-bold text-white mb-4 drop-shadow-lg">
        Stories That Move You
      </h2>
      <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
        Inspiring articles, tips, and journeys to spark creativity and growth.
      </p>
      <a href="#posts" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition">
        Explore Latest
      </a>
    </div>
  </section>

  <!-- Featured Categories -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Browse by Category</h3>
      <div class="grid sm:grid-cols-3 gap-8">
        <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <svg class="w-12 h-12 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M8 7V3M16 7V3M3 11h18M4 19h16a2 2 0 002-2V11H2v6a2 2 0 002 2z"/>
          </svg>
          <h4 class="mt-2 text-xl font-semibold">Productivity</h4>
        </div>
        <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <svg class="w-12 h-12 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M12 8c-3.3 0-6 2.7-6 6h12c0-3.3-2.7-6-6-6z"/>
          </svg>
          <h4 class="mt-2 text-xl font-semibold">Wellness</h4>
        </div>
        <div class="flex flex-col items-center p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <svg class="w-12 h-12 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <h4 class="mt-2 text-xl font-semibold">Lifestyle</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest Posts -->
  <section id="posts" class="py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Latest Articles</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-xl transition">
          <img src="https://source.unsplash.com/400x300/?productivity" alt="" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-2xl font-semibold mb-2">10 Tips for Better Productivity</h4>
            <p class="text-gray-600 mb-4">Boost focus and output with actionable habits you can start today.</p>
            <a href="#" class="text-blue-500 font-medium hover:underline">Read more →</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-xl transition">
          <img src="https://source.unsplash.com/400x300/?morning,coffee" alt="" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-2xl font-semibold mb-2">Why Morning Routines Matter</h4>
            <p class="text-gray-600 mb-4">Kickstart your day with intention and clarity.</p>
            <a href="#" class="text-blue-500 font-medium hover:underline">Read more →</a>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-xl transition">
          <img src="https://source.unsplash.com/400x300/?minimalism,home" alt="" class="w-full h-48 object-cover">
          <div class="p-6">
            <h4 class="text-2xl font-semibold mb-2">Exploring Minimalism</h4>
            <p class="text-gray-600 mb-4">Live more with less: practical steps to simplify your life.</p>
            <a href="#" class="text-blue-500 font-medium hover:underline">Read more →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Subscribe CTA -->
  <section class="py-16 bg-gradient-to-r from-blue-500 to-indigo-600">
    <div class="max-w-md mx-auto text-center text-white px-6">
      <h4 class="text-3xl font-bold mb-4">Join Our Newsletter</h4>
      <p class="mb-6">Get weekly inspiration and the latest posts delivered to your inbox.</p>
      <form class="flex flex-col sm:flex-row gap-4">
        <input type="email" placeholder="Your email address" required
               class="flex-grow px-4 py-3 rounded-full text-gray-800 focus:outline-none"/>
        <button type="submit"
                class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-full hover:bg-gray-100 transition">
          Subscribe
        </button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t">
    <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center text-gray-600">
      <p class="text-sm">&copy; 2025 MyBlog. All rights reserved.</p>
      <div class="flex space-x-4 mt-4 md:mt-0">
        <a href="#" class="hover:text-blue-600 transition">Twitter</a>
        <a href="#" class="hover:text-blue-600 transition">Facebook</a>
        <a href="#" class="hover:text-blue-600 transition">Instagram</a>
      </div>
    </div>
  </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Library App - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <!-- Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-lg font-semibold">Library App</h1>
    
    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center gap-6">
      <a href="#" class="hover:text-blue-600 font-medium">Home</a>
      <a href="#" class="hover:text-blue-600 font-medium">Books</a>

      @if ($loggedIn === true)
      <li class="flex items-center gap-2 list-none">
        <p class="font-medium text-sm text-gray-400">Khen Cahyo</p>
        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
          <span class="text-lg font-semibold text-gray-800">K</span>
        </div>
      </li>
      @else
      <div class="flex gap-2">
        <button class="px-4 py-1 border border-gray-800 rounded text-sm hover:bg-gray-800 hover:text-white transition">Login</button>
        <button class="px-4 py-1 bg-gray-800 text-white rounded text-sm hover:bg-gray-700 transition">Register</button>
      </div>
      @endif
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden text-xl" id="navButton"><i class="fas fa-bars"></i></button>
  </div>

  <!-- Mobile Menu -->
  <div class="hidden px-6 pb-4 flex-col gap-3 md:hidden" id="navMenu">
    <a href="#" class="block py-1 font-medium hover:text-blue-600">Home</a>
    <a href="#" class="block py-1 font-medium hover:text-blue-600">Books</a>

    @if ($loggedIn === true)
    <li class="flex items-center gap-2 list-none">
      <p class="font-medium text-sm text-gray-400">Khen Cahyo</p>
      <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
        <span class="text-lg font-semibold text-gray-800">K</span>
      </div>
    </li>
    @else
    <div class="flex flex-col gap-2 mt-2">
      <button class="px-4 py-2 border border-gray-800 rounded text-sm font-medium w-full hover:bg-gray-800 hover:text-white transition">Login</button>
      <button class="px-4 py-2 bg-gray-800 text-white rounded text-sm font-medium w-full hover:bg-gray-700 transition">Register</button>
    </div>
    @endif
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const navButton = document.getElementById('navButton');
  const navMenu = document.getElementById('navMenu');
  navButton.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
});
</script>


  <!-- Hero -->
  <section class="relative bg-cover bg-center h-[80vh] flex items-center justify-center" style="background-image: url('https://images.unsplash.com/photo-1512820790803-83ca734da794');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center text-white max-w-xl px-4">
      <h1 class="text-3xl md:text-4xl font-semibold mb-4">Welcome to Library App</h1>
      <p class="text-base mb-6">Choose from a wide range of popular books from all the categories you want here.</p>
      <a href="#" class="px-6 py-2 bg-white text-gray-800 rounded hover:bg-gray-200 transition">Check Our Books</a>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="bg-gray-50 py-14 px-6">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-8">
      <img src="https://tse2.mm.bing.net/th/id/OIP.LPejyxOhvVpyXGm50g4-eAHaHa?pid=Api&P=0&h=180" alt="Book Image" class="w-32 hidden md:block" />
      <div>
        <h2 class="text-lg font-semibold mb-2">WELCOME TO LIBRARY APP</h2>
        <p class="text-sm text-gray-700 mb-4">Choose the best books you want to read in here.</p>
        <button class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition">Check Our Books</button>
      </div>
    </div>
  </section>

  <!-- Featured Books -->
  <section class="py-16 px-6 bg-white">
    <h2 class="text-center text-2xl font-semibold mb-10">Featured Books</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-gray-100 rounded-lg shadow-md p-4 text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHApvr1ZFdQ8ugssvTcmfUXeOSEFj1jKNiPQ&s" alt="Madilog" class="w-32 h-44 object-cover mx-auto rounded" />
        <h3 class="mt-4 font-medium text-gray-700">Madilog</h3>
        <a href="#" class="text-sm mt-1 inline-block text-blue-600 hover:underline">View Details</a>
      </div>

      <div class="bg-gray-100 rounded-lg shadow-md p-4 text-center">
        <img src="https://elibrary.smapjbintaro.sch.id/lib/minigalnano/createthumb.php?filename=images/docs/sejarah_dunia_yang_disembunyikan.jpg.jpg&width=200" alt="Book 2" class="w-32 h-44 object-cover mx-auto rounded" />
        <h3 class="mt-4 font-medium text-gray-700">Sejarah Dunia Yang Disembunyikan</h3>
        <a href="#" class="text-sm mt-1 inline-block text-blue-600 hover:underline">View Details</a>
      </div>

      <div class="bg-gray-100 rounded-lg shadow-md p-4 text-center">
        <img src="https://www.lib.bwi.go.id/wp-content/uploads/2021/01/438-scaled.jpg" alt="Book 3" class="w-32 h-44 object-cover mx-auto rounded" />
        <h3 class="mt-4 font-medium text-gray-700">Aldof Hitler Mati Di Indonesia</h3>
        <a href="#" class="text-sm mt-1 inline-block text-blue-600 hover:underline">View Details</a>
      </div>

      <div class="bg-gray-100 rounded-lg shadow-md p-4 text-center">
        <img src="https://www.whiteboardjournal.com/wp-content/uploads/2022/09/FcsC-XpaIAMADSK.jpeg" alt="Book 4" class="w-32 h-44 object-cover mx-auto rounded" />
        <h3 class="mt-4 font-medium text-gray-700">Siksa Neraka</h3>
        <a href="#" class="text-sm mt-1 inline-block text-blue-600 hover:underline">View Details</a>
      </div>
    </div>
  </section>

  <!-- Book Categories -->
  <section class="py-16 px-6 bg-gray-50">
    <h2 class="text-center text-2xl font-semibold mb-10">Book Categories</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      <div class="bg-white p-4 rounded shadow text-center hover:bg-gray-100 transition">
        <i class="fas fa-book text-2xl text-gray-700 mb-2"></i>
        <p class="text-sm font-medium">Fiction</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center hover:bg-gray-100 transition">
        <i class="fas fa-flask text-2xl text-gray-700 mb-2"></i>
        <p class="text-sm font-medium">Science</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center hover:bg-gray-100 transition">
        <i class="fas fa-history text-2xl text-gray-700 mb-2"></i>
        <p class="text-sm font-medium">History</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center hover:bg-gray-100 transition">
        <i class="fas fa-laugh text-2xl text-gray-700 mb-2"></i>
        <p class="text-sm font-medium">Humor</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center hover:bg-gray-100 transition">
        <i class="fas fa-brain text-2xl text-gray-700 mb-2"></i>
        <p class="text-sm font-medium">Psychology</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
      <div>
        <h3 class="text-lg font-semibold mb-3">Library App</h3>
        <p class="text-sm text-gray-400">Your gateway to thousands of books across various categories. Start your reading journey today!</p>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-3">Quick Links</h3>
        <ul class="text-sm space-y-2 text-gray-300">
          <li><a href="#" class="hover:underline">Home</a></li>
          <li><a href="#" class="hover:underline">Books</a></li>
          <li><a href="#" class="hover:underline">Categories</a></li>
          <li><a href="#" class="hover:underline">Login</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-semibold mb-3">Contact Us</h3>
        <p class="text-sm text-gray-400">Email: support@libraryapp.com</p>
        <p class="text-sm text-gray-400">Phone: +62 812 3456 7890</p>
        <div class="flex gap-4 mt-4">
          <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center text-xs text-gray-500 mt-10">&copy; 2025 Library App. All rights reserved.</div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const navButton = document.getElementById('navButton');
      const navMenu = document.getElementById('navMenu');
      navButton.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
      });
    });
  </script>

</body>

</html>
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
  <nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-lg font-semibold">Library App</h1>
      <div class="hidden md:flex items-center gap-6">
        <a href="#" class="hover:text-blue-600 font-medium">Home</a>
        <a href="#" class="hover:text-blue-600 font-medium">Books</a>
        <div class="flex gap-2">
          <button class="px-4 py-1 border border-gray-800 rounded text-sm hover:bg-gray-800 hover:text-white transition">Login</button>
          <button class="px-4 py-1 bg-gray-800 text-white rounded text-sm hover:bg-gray-700 transition">Register</button>
        </div>
      </div>
      <button class="md:hidden text-xl" id="navButton"><i class="fas fa-bars"></i></button>
    </div>
    <div class="hidden px-6 pb-4 flex-col gap-3 md:hidden" id="navMenu">
      <a href="#" class="block py-1 font-medium hover:text-blue-600">Home</a>
      <a href="#" class="block py-1 font-medium hover:text-blue-600">Books</a>
      <button class="px-4 py-1 border border-gray-800 rounded text-sm hover:bg-gray-800 hover:text-white transition">Login</button>
      <button class="px-4 py-1 mt-2 bg-gray-800 text-white rounded text-sm hover:bg-gray-700 transition">Register</button>
    </div>
  </nav>
{{-- ALERTS --}}
  @if (session('success'))
    <div class="max-w-7xl mx-auto px-6 mt-4">
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
      </div>
    </div>
  @endif

  @if (session('error'))
    <div class="max-w-7xl mx-auto px-6 mt-4">
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
        {{ session('error') }}
      </div>
    </div>
  @endif

  {{-- Buku Cards --}}
  <main class="max-w-7xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-6">📚 All Books</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @forelse ($books as $book)
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-md transition duration-300">
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">{{ $book->book_name }}</h3>
            <p class="text-sm text-gray-600 mt-1">By {{ $book->author->author_name ?? '-' }}</p>
            <p class="text-sm text-gray-500">Publisher: {{ $book->publisher->publisher_name ?? '-' }}</p>
            <p class="text-sm text-gray-500">Category: {{ $book->category->category_name ?? '-' }}</p>
            <p class="text-sm text-gray-500">Shelf: {{ $book->shelf->shelf_name ?? '-' }}</p>
            <div class="mt-3 flex justify-between items-center">
              <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">
                Stock: {{ $book->book_stock }}
              </span>
              <span class="text-xs font-mono text-gray-500">
                ISBN: {{ $book->book_isbn }}
              </span>
            </div>

            {{-- Tombol Pinjam --}}
            @if ($loggedIn)
              <form method="POST" action="{{ route('borrow.book', $book->book_id) }}"
                    onsubmit="return confirm('Apakah kamu yakin ingin meminjam buku ini?')">
                @csrf
                <button type="submit"
                  class="mt-3 w-full bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                  📖 Pinjam Buku
                </button>
              </form>
            @endif
          </div>
        </div>
      @empty
        <p class="col-span-4 text-gray-500">No books found.</p>
      @endforelse
    </div>
  </main>

  {{-- Toggle Script --}}
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');
    const navButton = document.getElementById('navButton');
    const navMenu = document.getElementById('navMenu');

    document.addEventListener('click', function (e) {
      if (profileBtn?.contains(e.target)) {
        profileMenu.classList.toggle('hidden');
      } else if (!profileMenu?.contains(e.target)) {
        profileMenu?.classList.add('hidden');
      }
    });

    navButton?.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
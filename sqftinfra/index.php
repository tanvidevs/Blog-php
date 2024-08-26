<?php include 'fetch_posts.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colorful Navbar with Animation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Navigation Bar -->
  <nav class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-white text-2xl font-bold">
        <a href="#">Brand</a>
      </div>

      <!-- Navigation Links -->
      <div class="space-x-8 hidden md:flex">
        <a href="#" class="text-white hover:bg-white hover:text-purple-500 px-4 py-2 rounded transition duration-300 ease-in-out">Home</a>
        <a href="#" class="text-white hover:bg-white hover:text-pink-500 px-4 py-2 rounded transition duration-300 ease-in-out">About</a>
        <a href="#" class="text-white hover:bg-white hover:text-red-500 px-4 py-2 rounded transition duration-300 ease-in-out">Services</a>
        <a href="#" class="text-white hover:bg-white hover:text-yellow-500 px-4 py-2 rounded transition duration-300 ease-in-out">Contact</a>
      </div>

      <!-- Hamburger Menu for Mobile -->
      <div class="md:hidden">
        <button id="nav-toggle" class="text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="hidden mt-4 space-y-4 md:hidden">
      <a href="#" class="block text-white hover:bg-white hover:text-purple-500 px-4 py-2 rounded transition duration-300 ease-in-out">Home</a>
      <a href="#" class="block text-white hover:bg-white hover:text-pink-500 px-4 py-2 rounded transition duration-300 ease-in-out">About</a>
      <a href="#" class="block text-white hover:bg-white hover:text-red-500 px-4 py-2 rounded transition duration-300 ease-in-out">Services</a>
      <a href="#" class="block text-white hover:bg-white hover:text-yellow-500 px-4 py-2 rounded transition duration-300 ease-in-out">Contact</a>
    </div>
  </nav>
  <!-- (Keep your existing navigation code here) -->

  <!-- Blog Section -->
  <div class="bg-gradient-to-r from-blue-400 via-purple-500 to-red-400 text-white">
    <header class="text-center p-10">
        <h1 class="text-4xl font-bold">My Colorful Blog</h1>
        <p class="text-lg mt-2">Bringing life to your words with color and animations!</p>
    </header>

    <section class="max-w-5xl mx-auto p-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <?php foreach ($posts as $post): ?>
            <div class="bg-white text-gray-900 p-6 rounded-lg shadow-lg hover:bg-purple-700 hover:text-white transition duration-500 ease-in-out transform hover:-translate-y-1">
                <h2 class="text-2xl font-bold mb-3"><?php echo htmlspecialchars($post['title']); ?></h2>
                <p class="mb-4"><?php echo substr(htmlspecialchars($post['content']), 0, 100); ?>...</p>
                <a href="post.php?id=<?php echo $post['id']; ?>" class="text-indigo-500 hover:text-indigo-600">Read more</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="text-center p-4">
        &copy; 2024 My Colorful Blog
    </footer>
  </div>

  <!-- (Keep your existing scripts here) -->

</body>
</html>
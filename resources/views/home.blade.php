<?= session('user_id') ?>
<?= session('username') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GastroShare – Recipe Sharing Platform</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            serif: ['Playfair Display', 'serif'],
            sans: ['Inter', 'sans-serif'],
          },
          colors: {
            cream: '#FFF7EE',
            soft: '#FDF1E6',
            accent: '#E5533D',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-cream text-gray-700 font-sans">

<!-- ================= HEADER ================= -->
<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <div class="font-serif text-2xl font-semibold">GastroShare</div>
    <nav class="hidden md:flex gap-8 text-sm">
      <a href="./home" class="hover:text-accent">Home</a>
      <a href="./recipes" class="hover:text-accent">Recipes</a>
      <a href="#" class="hover:text-accent">Categories</a>

    </nav>
    @if(session('username'))
      <div class="flex items-center gap-4">
      <span class="text-sm">
        Welcome back, <strong>{{session('username')}}</strong> 👋
      </span>

      <a href="11"
        class="px-4 py-2 rounded-full bg-gray-200 text-sm hover:bg-gray-300">
        Logout
      </a>
    </div>
    @else
    <a href="/login"
       class="px-4 py-2 rounded-full bg-accent text-white text-sm hover:opacity-90">
      Login
    </a>
    @endif
  </div>
</header>

<!-- ================= HERO ================= -->
<section class="bg-soft py-24">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center px-6">
    <div>
      <h1 class="font-serif text-5xl leading-tight mb-6">
        Share<br>Your Favorite Recipes
      </h1>
      <p class="mb-8 max-w-md">
        A friendly platform where food lovers discover, share, and discuss homemade recipes from around the world.
      </p>
      <div class="flex gap-4">
        <a href="#" class="bg-accent text-white px-8 py-3 rounded-full">
          Explore Recipes
        </a>
        @if(session('username'))
        <a href="#" class="border border-accent text-accent px-8 py-3 rounded-full">
          Add a Recipe
        </a>
        @endif
      </div>
    </div>
    <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe"
         class="rounded-xl shadow-2xl mx-auto"
         alt="Food presentation" />
  </div>
</section>

<!-- ================= FEATURES ================= -->
<section class="py-24">
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 px-6 text-center">
    <div class="bg-white p-8 rounded-xl shadow">
      <h3 class="font-serif text-xl mb-3">Easy Publishing</h3>
      <p class="text-sm">Share your recipes in just a few clicks with images, steps, and ingredients.</p>
    </div>
    <div class="bg-white p-8 rounded-xl shadow">
      <h3 class="font-serif text-xl mb-3">Community Feedback</h3>
      <p class="text-sm">Get comments, ratings, and tips from other passionate cooks.</p>
    </div>
    <div class="bg-white p-8 rounded-xl shadow">
      <h3 class="font-serif text-xl mb-3">Smart Discovery</h3>
      <p class="text-sm">Find recipes by category, popularity, or preparation time.</p>
    </div>
  </div>
</section>

<!-- ================= STATS ================= -->
<section class="bg-soft py-20">
  <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="text-3xl font-bold text-accent">128</p>
      <p class="text-sm">Published Recipes</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="text-3xl font-bold text-accent">24</p>
      <p class="text-sm">Trending Recipes</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="text-3xl font-bold text-accent">342</p>
      <p class="text-sm">Community Comments</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="text-3xl font-bold text-accent">12</p>
      <p class="text-sm">Recipe Categories</p>
    </div>
  </div>
</section>

<!-- ================= FILTER ================= -->
<section class="py-16">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6 justify-between items-center px-6">
    <input type="text"
           placeholder="Search for a recipe..."
           class="w-full md:w-1/2 px-4 py-3 rounded-lg shadow" />
    <select class="px-4 py-3 rounded-lg shadow">
      <option>All categories</option>
      <option>Starters</option>
      <option>Main Dishes</option>
      <option>Desserts</option>
      <option>Drinks</option>
    </select>
  </div>
</section>

<!-- ================= RECIPES ================= -->
<section class="py-24">
  <h2 class="text-center font-serif text-3xl mb-14">Latest Recipes</h2>
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-6">

    <div class="bg-white rounded-xl shadow overflow-hidden">
      <img src="https://images.unsplash.com/photo-1604908554026-74f94e45ad22"
           class="h-48 w-full object-cover" />
      <div class="p-6">
        <h3 class="font-serif text-xl mb-2">Creamy Mushroom Pasta</h3>
        <p class="text-sm mb-3">
          A comforting and flavorful dish ready in just 30 minutes.
        </p>
        <div class="text-xs text-gray-500 mb-4">
          ⏱ 30 min • ⭐ 4.7 • Medium
        </div>
        <div class="flex justify-between text-sm">
          <span>Main Dish</span>
          <a href="#" class="text-accent">View recipe</a>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">
      <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c"
           class="h-48 w-full object-cover" />
      <div class="p-6">
        <h3 class="font-serif text-xl mb-2">Fresh Summer Salad</h3>
        <p class="text-sm mb-3">
          Light, colorful, and perfect for hot summer days.
        </p>
        <div class="text-xs text-gray-500 mb-4">
          ⏱ 15 min • ⭐ 4.5 • Easy
        </div>
        <div class="flex justify-between text-sm">
          <span>Starter</span>
          <a href="#" class="text-accent">View recipe</a>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">
      <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e"
           class="h-48 w-full object-cover" />
      <div class="p-6">
        <h3 class="font-serif text-xl mb-2">Molten Chocolate Cake</h3>
        <p class="text-sm mb-3">
          A must-have dessert for chocolate lovers.
        </p>
        <div class="text-xs text-gray-500 mb-4">
          ⏱ 40 min • ⭐ 4.9 • Medium
        </div>
        <div class="flex justify-between text-sm">
          <span>Dessert</span>
          <a href="#" class="text-accent">View recipe</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ================= COMMENTS ================= -->
<section class="bg-soft py-24">
  <h2 class="text-center font-serif text-3xl mb-12">Most Loved Recipes</h2>
  <div class="max-w-4xl mx-auto space-y-6 px-6">
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="font-medium">
        “Excellent recipe, very easy to follow and delicious!”
      </p>
      <p class="text-sm text-gray-500 mt-2">
        – user123 on Molten Chocolate Cake
      </p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <p class="font-medium">
        “The whole family loved it, thank you for sharing!”
      </p>
      <p class="text-sm text-gray-500 mt-2">
        – foodie_marie on Creamy Mushroom Pasta
      </p>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="py-24 text-center">
  <h2 class="font-serif text-3xl mb-4">
    Do you have a recipe to share?
  </h2>
  <p class="mb-8">
    Join our community and inspire food lovers around the world.
  </p>
  <a href="#" class="bg-accent text-white px-10 py-3 rounded-full">
    Publish My Recipe
  </a>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-white py-12 text-center text-sm">
  <div class="font-serif text-xl mb-2">GastroShare</div>
  <p>© 2026 GastroShare. All rights reserved.</p>
</footer>

</body>
</html>

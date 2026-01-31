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
      @if(session('username'))
      <a href="./own/{{session('user_id')}}" class="hover:text-accent">My Recipes</a>
      @endif
    </nav>
    @if(session('username'))
      <div class="flex items-center gap-4">
      <span class="text-sm">
        Welcome back, <strong>{{session('username')}}</strong> 👋
      </span>

      <form method="POST" action="/logout">
    @csrf
      <button class="px-4 py-2 rounded-full bg-gray-200 text-sm hover:bg-gray-300" type="submit">Logout</button>
    </form>

    </div>
    @else
    <a href="login"
       class="px-4 py-2 rounded-full bg-accent text-white text-sm hover:opacity-90">
      Login
    </a>
    @endif
  </div>
</header>

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
        <a href="./recipes" class="bg-accent text-white px-8 py-3 rounded-full">
          Explore Recipes
        </a>
        @if(session('username'))
        <a href="./addrecipe" class="border border-accent text-accent px-8 py-3 rounded-full">
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

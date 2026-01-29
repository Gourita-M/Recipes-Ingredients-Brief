
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipes – GastroShare</title>

  <script src="https://cdn.tailwindcss.com"></script>

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

<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
    <div class="font-serif text-2xl font-semibold">GastroShare</div>
    <nav class="flex gap-8 text-sm">
      <a href="./home" class="hover:text-accent">Home</a>
      <a href="./recipes" class="text-accent font-medium">Recipes</a>
      <a href="#" class="hover:text-accent">Categories</a>
    </nav>
  </div>
</header>

<section class="bg-soft py-16">
  <div class="max-w-7xl mx-auto px-6">
    <h1 class="font-serif text-4xl mb-6">All Recipes</h1>

    <div class="flex flex-col md:flex-row gap-4">
      <input type="text" placeholder="Search recipes..." class="flex-1 px-4 py-3 rounded-lg shadow">
      <select class="px-4 py-3 rounded-lg shadow">
        <option>All categories</option>
        <option>Starters</option>
        <option>Main dishes</option>
        <option>Desserts</option>
      </select>
    </div>
  </div>
</section>

<section class="py-24">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-6">
  
  @foreach($recipes as $recipe)
    <div class="bg-white rounded-xl shadow overflow-hidden">
      <img src="{{ $recipe->recipe_image }}" class="h-48 w-full object-cover">
      <div class="p-6">
        <h3 class="font-serif text-xl mb-2">{{ $recipe->recipe_title }}</h3>
        <p class="text-sm mb-4">{{ $recipe->recipe_description }}</p>
        <div class="flex justify-between text-sm">
          <span>{{ $recipe->recipe_category }}</span>
          <a href="./recipedetails/{{ $recipe->recipe_id }}" class="text-accent">View recipe</a>
        </div>
      </div>
    </div>
  @endforeach

  </div>
</section>

<footer class="bg-white py-12 text-center text-sm">
  <p>© 2026 GastroShare. All rights reserved.</p>
</footer>

</body>
</html>

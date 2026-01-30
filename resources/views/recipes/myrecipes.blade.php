<?php print_r($recipess); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Recipes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">

<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <div class="font-serif text-2xl font-semibold">GastroShare</div>
    <nav class="hidden md:flex gap-8 text-sm">
      <a href="../home" class="hover:text-accent">Home</a>
      <a href="../recipes" class="hover:text-accent">Recipes</a>

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
    <a href="../login"
       class="px-4 py-2 rounded-full bg-accent text-white text-sm hover:opacity-90">
      Login
    </a>
    @endif
  </div>
</header>
  <div class="mt-8"></div>
  <div class="max-w-6xl mx-auto">
    <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">🍽️ My Recipes</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @if($recipess)
      @foreach($recipess as $ree)
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
          <img
            src=""
            alt=""
            class="h-48 w-full object-cover"
          />
          <div class="p-4 flex-grow flex flex-col">
            <h2 class="text-xl font-semibold mb-2 text-gray-900"></h2>
            <p class="text-gray-700 mb-4 flex-grow"></p>
            <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-medium px-2 py-1 rounded">
    
            </span>
          </div>
        </div>
      @endforeach
    @else
        <p class="text-center col-span-full text-gray-500">You haven't added any recipes yet.</p>
    @endif
    </div>
  </div>

</body>
</html>

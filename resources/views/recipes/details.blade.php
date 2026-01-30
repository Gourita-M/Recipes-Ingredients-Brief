<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chicken Tagine – GastroShare</title>

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
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
    <div class="font-serif text-2xl font-semibold">GastroShare</div>
    <nav class="hidden md:flex gap-8 text-sm">
      <a href="../home" class="hover:text-accent">Home</a>
      <a href="../recipes" class="hover:text-accent">Recipes</a>
      <a href="../own/{{session('user_id')}}" class="hover:text-accent">My Recipes</a>

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

<section class="py-20">
  <div class="max-w-4xl mx-auto px-6">

    <img src="{{$recip->recipe_image}}"
         class="w-full h-96 object-cover rounded-xl shadow mb-10">

    <h1 class="font-serif text-4xl mb-4">{{$recip->recipe_title}}</h1>

    <div class="flex gap-6 text-sm mb-6">
      <span class="bg-soft px-4 py-1 rounded-full">{{$recip->recipe_category}}</span>
      <span>⏱ 90 min</span>
      <span>👨‍🍳 Traditional Moroccan</span>
    </div>

    <p class="leading-relaxed mb-10">
      {{$recip->recipe_description}}
    </p>

    <h2 class="font-serif text-2xl mb-4">Ingredients</h2>
    <ul class="list-disc list-inside space-y-2 mb-10">
    @foreach($igrediants as $igrediant)
      <li><span>{{$igrediant->quantity}}</span> {{$igrediant->ingredient_name}}</li>
    @endforeach
    </ul>

    <h2 class="font-serif text-2xl mb-6">Comments</h2>

    @foreach($comments as $comment)
    <div class="bg-white rounded-xl shadow p-6 mb-6">
    <div class="flex justify-between items-center mb-2">
      <div>
          <span class="font-medium">{{$comment->utilisateur->username}}</span>
          <span class="text-xs text-gray-400 ml-2">{{$comment->created_at}}</span>
        </div>
        <div class="flex space-x-2">
        @if($comment->user_id == session('user_id'))
          <button 
            class="text-indigo-600 hover:text-indigo-800 text-sm font-semibold">
            Edit
          </button>
          <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-semibold">
              Delete
          </button>
        @endif
        </div>
      </div>
      <p class="text-sm">
        {{$comment->comment_content}}
      </p>
    </div>

    @endforeach

    <h3 class="font-serif text-xl mb-4">Leave a comment</h3>

    <form action="{{ route('add.comment', $recip->recipe_id) }}" method="POST" class="bg-white rounded-xl shadow p-6 space-y-4">
     @csrf
      <!-- <input type="hidden" name="recipeid" value="{{$recip->recipe_id}}" > -->
      <textarea
        name="comment"
        placeholder="Write your comment..."
        class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-accent focus:outline-none"
        rows="4"></textarea>

      <button
        type="submit"
        class="bg-accent text-white px-6 py-3 rounded-full hover:opacity-90">
        Post Comment
      </button>
    </form>

  </div>
</section>

<footer class="bg-white py-12 text-center text-sm">
  © 2026 GastroShare. All rights reserved.
</footer>

</body>
</html>

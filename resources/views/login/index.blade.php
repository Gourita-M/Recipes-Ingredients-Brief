<?php 
  if(isset($info)){
print_r($info); 

echo $info->first()->user_password;

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login – GastroShare</title>

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

<!-- HEADER -->
<header class="bg-white shadow-sm">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
    <div class="font-serif text-2xl">GastroShare</div>
    <a href="./home" class="text-sm hover:text-accent">← Back to Home</a>
  </div>
</header>

<!-- LOGIN -->
<section class="min-h-screen flex items-center justify-center px-6">
  <div class="bg-white rounded-xl shadow-xl p-10 max-w-md w-full">
    <h1 class="font-serif text-3xl mb-6 text-center">Welcome Back</h1>

    <form method="POST" class="space-y-5" action="{{ route('login.submit') }}">@csrf
      <div>
        <label class="text-sm">Email</label>
        <input name="email" type="email" class="w-full mt-1 px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-accent" />
      </div>

      <div>
        <label class="text-sm">Password</label>
        <input name="password" type="password" class="w-full mt-1 px-4 py-3 rounded-lg border focus:outline-none focus:ring-2 focus:ring-accent" />
      </div>

      <button class="w-full bg-accent text-white py-3 rounded-full mt-4">
        Login
      </button>
    </form>

    <p class="text-sm text-center mt-6">
      Don’t have an account?
      <a href="./register" class="text-accent">Create one</a>
    </p>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-white py-6 text-center text-sm">
  © 2026 GastroShare
</footer>

</body>
</html>

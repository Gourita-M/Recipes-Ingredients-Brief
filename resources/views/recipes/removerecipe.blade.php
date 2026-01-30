<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Delete</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-red-600 mb-4">
            Delete Recipe
        </h1>

        <p class="text-gray-700 mb-6">
            Are you sure you want to delete this recipe?
            <br>
            <span class="font-semibold text-gray-900">
                {{$info['recipe_title']}}
            </span>
            <br>
            <span class="font-bold">This action cannot be undone.</span>
        </p>

        <div class="flex justify-end gap-4">
            <a href="../own/{{session('user_id')}}"
                class="px-4 py-2 rounded-lg bg-gray-300 text-gray-800 hover:bg-gray-400">
                Cancel
            </a>

            <a href="../deleterecipe/delete/{{$info['recipe_id']}}"
                class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700">
                Yes, Delete
            </a>
        </div>
    </div>

</body>
</html>

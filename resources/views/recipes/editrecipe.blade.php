<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Recipe Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
  <div class="bg-white shadow-md rounded-lg max-w-3xl w-full p-8">
    <h1 class="text-3xl font-bold mb-6">Edit Recipe Details</h1>

    <form action="{{ route('edit.recipe', $info->recipe_id) }}" method="POST" class="space-y-6">@csrf

      <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
        <input
          type="text"
       
          name="title"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Enter recipe title"
          value="{{$info['recipe_title']}}"
          required
        />
      </div>

      <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea

          name="description"
          rows="3"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Describe your recipe"
          required
        >{{$info['recipe_description']}}</textarea>
      </div>

      <input
          type="text"
       
          name="image"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Enter recipe image"
          value="{{$info['recipe_image']}}"
          required
        />

      <div>
        <button
          type="submit"
          class="w-full bg-green-600 text-white font-bold py-3 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
        >
          Save Recipe Details
        </button>
      </div>
    </form>
  </div>

</body>
</html>

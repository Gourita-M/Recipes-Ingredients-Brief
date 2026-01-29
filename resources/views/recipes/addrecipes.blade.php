<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Recipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-8">
        
        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            🍽️ Add New Recipe
        </h1>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('recipe.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Recipe Title
                </label>
                <input
                    type="text"
                    name="title"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Description
                </label>
                <textarea
                    name="description"
                    rows="4"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                ></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Category
                </label>
                <select
                    name="category"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
                    <option value="">Select category</option>
                    <option>Main Dish</option>
                    <option>Starter</option>
                    <option>Soup</option>
                    <option>Dessert</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Ingredients
                </label>

                <div id="ingredients-wrapper" class="space-y-2">
                    <div class="flex gap-2">
                        <input
                            type="text"
                            name="ingredients[]"
                            class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        >
                        <button
                            type="button"
                            onclick="removeIngredient(this)"
                            class="px-3 bg-red-500 text-white rounded-lg hover:bg-red-600"
                        >
                            −
                        </button>
                    </div>
                </div>

                <button
                    type="button"
                    onclick="addIngredient()"
                    class="mt-3 flex items-center gap-2 text-indigo-600 hover:text-indigo-800"
                >
                    ➕ Add Ingredient
                </button>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Recipe Image (URL)
                </label>
                <input
                    type="text"
                    name="image"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
            </div>

            <div class="flex gap-4 pt-4">
                <button
                    type="submit"
                    class="flex-1 bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition"
                >
                    Save Recipe
                </button>

                <a href="./home"
                    class="flex-1 text-center bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition"
                >
                    Cancle
                </a>
            </div>
        </form>
    </div>

    <script>
        function addIngredient() {
            const wrapper = document.getElementById('ingredients-wrapper');

            const div = document.createElement('div');
            div.className = 'flex gap-2';

            div.innerHTML = `
                <input
                    type="text"
                    name="ingredients[]"
                    class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
                <button
                    type="button"
                    onclick="removeIngredient(this)"
                    class="px-3 bg-red-500 text-white rounded-lg hover:bg-red-600"
                >
                    −
                </button>
            `;

            wrapper.appendChild(div);
        }

        function removeIngredient(button) {
            const wrapper = document.getElementById('ingredients-wrapper');
            if (wrapper.children.length > 1) {
                button.parentElement.remove();
            }
        }
    </script>

</body>
</html>

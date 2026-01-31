<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Ingredients</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
  <div class="bg-white shadow-md rounded-lg max-w-3xl w-full p-8">
    <h1 class="text-3xl font-bold mb-6">Manage Ingredients</h1>

    <form action="{{ Route('add.ingredient', $id)}}" method="POST" class="space-y-6">
  @csrf

  <label class="block text-sm font-medium text-gray-700 mb-1">Ingredients</label>

  <div id="ingredientsList" class="space-y-2">

    <div class="flex space-x-2">
      <!-- Quantity -->
      <input
        type="text"
        name="quantities[]"
        class="w-32 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        placeholder="Quantity"
        required
      />

      <!-- Ingredient -->
      <input
        type="text"
        name="ingredients[]"
        class="flex-grow border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        placeholder="Ingredient"
        required
      />

      <button type="button" class="text-red-500 font-bold px-2" onclick="removeIngredient(this)">×</button>
    </div>

  </div>

  <button
    type="button"
    class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
    onclick="addIngredient()"
  >
    + Add Ingredient
  </button>

  <div>
    <button
      type="submit"
      class="w-full bg-green-600 text-white font-bold py-3 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
    >
      Save Ingredients
    </button>
  </div>
</form>

<script>
  function addIngredient() {
    const container = document.getElementById('ingredientsList');
    const div = document.createElement('div');
    div.className = 'flex space-x-2';

    const quantityInput = document.createElement('input');
    quantityInput.type = 'text';
    quantityInput.name = 'quantities[]';
    quantityInput.placeholder = 'Quantity';
    quantityInput.required = true;
    quantityInput.className =
      'w-32 border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500';

    const ingredientInput = document.createElement('input');
    ingredientInput.type = 'text';
    ingredientInput.name = 'ingredients[]';
    ingredientInput.placeholder = 'Ingredient';
    ingredientInput.required = true;
    ingredientInput.className =
      'flex-grow border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500';

    const btn = document.createElement('button');
    btn.type = 'button';
    btn.textContent = '×';
    btn.className = 'text-red-500 font-bold px-2';
    btn.onclick = () => div.remove();

    div.appendChild(quantityInput);
    div.appendChild(ingredientInput);
    div.appendChild(btn);
    container.appendChild(div);
  }

  function removeIngredient(button) {
    button.parentElement.remove();
  }
</script>

</body>
</html>

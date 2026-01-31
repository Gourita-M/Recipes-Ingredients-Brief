<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;

class IngredientController extends Controller
{
    public function index($id)
    {

        return View('/ingredients.addingredient', compact('id'));
    }

    public function addIngredient(Request $request, $id)
    {
        
        $ingredients = $request->input('ingredients');
        $quantities  = $request->input('quantities');

        for ($i = 0; $i < count($ingredients); $i++) {

            Ingredients::create([
                'recipe_id' => $id,
                'ingredient_name'      => $ingredients[$i],
                'quantity'  => $quantities[$i],
            ]);
        }

        $userid = session('user_id');
        return redirect("./own/$userid");
    }
}

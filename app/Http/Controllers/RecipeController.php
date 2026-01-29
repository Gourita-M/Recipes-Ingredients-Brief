<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredients;
use App\Models\Comments;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    public function getRecipeById($id)
    {
        $recip = Recipe::find($id);
        $igrediants = Ingredients::where('recipe_id', $id)->get();
        $comments = Comments::with('utilisateur')
                   ->where('recipe_id', $id)
                   ->get();
        return view('recipes.details', compact('recip', 'igrediants', 'comments'));
    }

    public function Recipeform()
    {
        $test = null;
        return view('recipes.addrecipes', compact('test'));
    }

     public function addRecipe(Request $request)
    {
    $data = $request->validate([

        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string',
        'ingredients' => 'required|array|min:1',
        'ingredients.*' => 'required|string|max:255',
        'image' => 'required',
    
    ]);


    }

}

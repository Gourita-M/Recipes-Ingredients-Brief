<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredients;
use App\Models\Comments;

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
}

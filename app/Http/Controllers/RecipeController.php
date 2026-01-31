<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredients;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        'image' => 'required'
    
    ]);

    Recipe::create([
        'recipe_title' => $data['title'],
        'recipe_description' => $data['description'],
        'recipe_category' => $data['category'],
        'recipe_image' => $data['image'],
        'user_id' => session('user_id'),
    ]);
    
        $userid = session('user_id');
        return redirect("./own/$userid");
    }

    public function showMyRecipe($id)
    {
        $recipess = Recipe::where('user_id', $id)->get();
        return view('recipes.myrecipes', compact('recipess'));
    }


    public function addComment(Request $request, $id)
    {
        $data = $request->validate([
            'comment' => 'required|string|max:300'
        ]);

        Comments::create([
            'comment_content' => $data['comment'],
            'user_id' => session('user_id'), 
            'recipe_id' => $id,          
        ]);

        return redirect("/recipedetails/$id");

    }

    public function deleteRecipeinfo($id)
    {
        $info = Recipe::where('recipe_id', $id)->first();
        return view('/recipes.removerecipe', compact('info'));
    }

    public function deleteRecipe($id)
    {
        Recipe::find($id)->delete();
        $userid = session('user_id');
        return redirect("./own/$userid");
    }

    public function editRecipe($id)
    {
        $info = Recipe::find($id);

        return view('/recipes.editrecipe', compact('info'));
    }

    public function edited(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        Recipe::where('recipe_id', $id)->update([
            'recipe_title' => $data['title'],
            'recipe_description' => $data['description'],
            'recipe_image' => $data['image'],
        ]);

        $userid = session('user_id');
        return redirect("./own/$userid");
    }
}

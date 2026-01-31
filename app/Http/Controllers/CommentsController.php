<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function removeComment($id, $recipe)
    {

        Comments::destroy($id);

        return Redirect("./recipedetails/$recipe");

    }
}

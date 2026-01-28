<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index()
    {
        return view('Register.index');
    }
}

//if i want to send a variable inside the view
// $recipes = Recipe::all();
// return view('recipes.index', compact('recipes'));
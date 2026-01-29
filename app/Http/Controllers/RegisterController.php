<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function index()
    {
        return view('Register.index');
    }


    public function register(Request $request)
    {
         $data = $request->validate([
        'username' => 'required|min:3',
        'email'    => 'required|email|unique:utilisateur,user_email',
        'password' => 'required|min:6|confirmed',
    ]);

    Utilisateur::create([
        'username'      => $data['username'],
        'user_email'    => $data['email'],
        'user_password' => Hash::make($data['password']),
    ]);

    return redirect('/login')->with('success', 'Account created!');
    }
}
//if i want to send a variable inside the view
// $recipes = Recipe::all();
// return view('recipes.index', compact('recipes'));
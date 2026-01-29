<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Utilisateur::where('user_email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->user_password)) {

            session(['user_id' => $user->user_id]);
            session(['username' => $user->username]);

            return redirect('/home')->with('success', 'Logged in!');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }
}

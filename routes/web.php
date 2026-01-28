<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/recipes', [RecipeController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/', function () {
    return view('login/index');
});

// Route::get('/login/{id}', function ($id) {
//     return view('login.index', ['id' => $id]);
// });

// Route::get('/recipes', function () {
    
//     return view('recipes/index');
// });

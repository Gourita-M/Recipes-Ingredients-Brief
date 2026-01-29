<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipedetails/{id}', [RecipeController::class, 'getRecipeById']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/', function () {
    return view('login/index');
});

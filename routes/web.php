<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\IngredientController;


Route::get('/home', function () {
    return view('home');
});


Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipedetails/{id}', [RecipeController::class, 'getRecipeById']);
Route::post('/recipedetails/{id}/Comment', [RecipeController::class, 'addComment'])->name('add.comment');


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/', function () {
    return view('login/index');
});

Route::post('/logout', [LogoutController::class, 'logout']);
Route::get('/addrecipe', [RecipeController::class, 'Recipeform']);
Route::post('/addrecipe', [RecipeController::class, 'addRecipe'])->name('recipe.submit');

Route::get('/own/{id}', [RecipeController::class, 'showMyRecipe']);

Route::get('/ingredients/{id}', [IngredientController::class, 'index']);



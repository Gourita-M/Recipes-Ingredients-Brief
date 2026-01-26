<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login/{id}', function ($id) {
//     return view('login/index') . $id ;
// });

Route::get('/login/{id}', function ($id) {
    return view('login.index', ['id' => $id]);
});

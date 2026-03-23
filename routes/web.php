<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/superheroes');
});

// Rutas CRUD completas
Route::resource('superheroes', 'SuperheroController');
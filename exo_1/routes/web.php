<?php

use Illuminate\Support\Facades\Route;

// Création de la route vers le fichier principal
Route::get('/', function () {
    return view('welcome');
});

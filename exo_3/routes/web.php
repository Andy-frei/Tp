<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create');
});

// Création de la route vers notre controller
Route::resource('utilisateurs', 'UtilisateursController');
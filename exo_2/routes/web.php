<?php

use Illuminate\Support\Facades\Route;

// Création de la route vers la base de données pour sélectionner les données présentes et les afficher
Route::get('/', function () { 
    $d = DB::select('SELECT * FROM departements');
    $n=[];
    for($i=0;$i<106;$i++){
        $n[$i]=$d[$i]->nom;
    }
    return view('base', compact('n'));
});


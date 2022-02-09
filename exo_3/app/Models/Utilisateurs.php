<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;
    // Pour éviter l'exception d'affectation en masse on déclare un tableau fillable contenant les champs de notre bd
    protected $fillable = ['nom', 'prenom', 'age'];
}

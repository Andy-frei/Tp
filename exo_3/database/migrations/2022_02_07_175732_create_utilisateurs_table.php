<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    // Création de la table utilisateurs issu de la migration
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->timestamps();
        });
    }

    // Supprimer la table utilisateurs si elle existe deja
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}

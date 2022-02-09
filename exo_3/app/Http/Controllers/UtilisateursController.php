<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;

class UtilisateursController extends Controller
{
    // Méthode permettant d'afficher la liste des noms
    public function index()
    {
        $utilisateurs = Utilisateurs::all();

        return view('index', compact('utilisateurs'));
    }

    // Méthode permettant d'afficher un formulaire pour ajouter un nouvel utilisateur'
    public function create()
    {
        return view('create');
    }

    // Méthode utilisée pour insérer un utilisateur dans la base de données
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'age' => 'required',
        ]);

        $utilisateurs = Utilisateurs::create($validatedData);

        return redirect('/utilisateurs')->with('success', 'Utilisateur crée avec succès');

    }

    // Méthode permettant d'afficher le formulaire pour éditer un utilisateur
    public function edit($id)
    {
        $utilisateur = Utilisateurs::findOrFail($id);

        return view('edit', compact('utilisateur'));
    }

    // Méthode utilisée pour mettre à jour un utilisateur dans la base de données
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'nom' => 'required|max:255',
        'prenom' => 'required',
        'age' => 'required'
        ]);

        Utilisateurs::whereId($id)->update($validatedData);

        return redirect('/utilisateurs')->with('success', 'utilisateur mis à jour avec succès');

    }

    // Méthode utilisée pour supprimer un utilisateur specifique
    public function destroy($id)
    {
        $utilisateur = Utilisateurs::findOrFail($id);
        $utilisateur->delete();

        return redirect('/utilisateurs')->with('success', 'Utilisateur supprimé avec succès');
    }
}

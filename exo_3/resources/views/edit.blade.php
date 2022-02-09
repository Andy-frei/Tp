@extends('layout')

@section('content')

<!-- Page permettant d'editer un utilisateur -->

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier l'utilisateur
  </div>

  <div class="card-body">

    <!-- Gestion des messages d'erreurs ou de succés -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <!-- Formulaire pour la mise à jour d'un nom -->
      <form method="post" action="{{ route('utilisateurs.update', $utilisateur->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom" value="{{ $utilisateur->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $utilisateur->prenom }}"/>
          </div>

          <div class="form-group">
              <label for="age">Age :</label>
              <input type="text" class="form-control" name="age" value="{{ $utilisateur->age }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection
@extends('layout')

@section('content')

<!-- Page permettant d'ajouter des noms -->

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un utilisateur
  </div>

  <!-- Gestion des messages d'erreurs ou de succès -->
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <!-- Formulaire de creation d'un nouvel utilisateur -->
      <form method="post" action="{{ route('utilisateurs.store') }}">
.         @csrf
          <div class="form-group">
              <label for="nom">Nom de l'utilisateur :</label>
              <input type="text" class="form-control" name="nom"/>
          </div>

          <div class="form-group">
              <label for="prenom">prenom :</label>
              <input type="text" class="form-control" name="prenom"/>
          </div>

          <div class="form-group">
              <label for="age">age :</label>
              <input type="text" class="form-control" name="age"/>
          </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection
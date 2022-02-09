@extends('layout')

@section('content')

<!-- Page permettant d'afficher la liste des noms -->

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
  <!-- Gestion des messages d'erreurs -->
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <!-- Creation du tableau devant contenir la listes des noms -->
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Age</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        <!-- Création de la boucle permettant d'afficher les informations de chaque noms -->
        @foreach($utilisateurs as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nom}}</td>
            <td>{{$user->prenom}}</td>
            <td>{{$user->age}}</td>
            <td><a href="{{ route('utilisateurs.edit', $user->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('utilisateurs.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        <div>
            <a href="{{ route('utilisateurs.create')}}" class="btn btn-primary">Ajouter un nouveau nom</a>
        </div>
    </tbody>
  </table>
<div>
@endsection


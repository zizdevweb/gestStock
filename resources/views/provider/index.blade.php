@extends('layouts.accueil')
@section('contenu')
<legend>Liste Fournisseur</legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >#</th>
      <th scope="col">Nom Fournisseur</th>
      <th scope="col">Coordonnee-email</th>
      <th scope="col-3">Coordonnee-Telephone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($providers as $prod)
    <tr>
      <td scop="row">{{$prod->id}}</td>
      <td>{{$prod->name}}</td> 
      <td>{{$prod->adress}}</td>
      <td>{{$prod->mail}}</td>
      <td>{{$prod->telephone}}</td>
      <td><a href="{{route('edit_provider',['id'=>$prod->id])}}"><i class="far fa-edit"></i></a>
          <a href="#"><i class="far fa-trash-alt"></i></i></a> 
       </td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection

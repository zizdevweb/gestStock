@extends('layouts.accueil')
@section('contenu')
<table class="table">
   <legend>Liste des categories</legend>
    <tr  class="table-primary">
        <th>#</th>
        <th>Nom Categorie</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $cats)
    <tr>
        <td>{{$cats->id}}</td>
        <td>{{$cats->name}}</td>
        <td>{{$cats->description}}</td>
      <td><a href="{{route('edit_category',['id'=>$cats->id])}}"><i class="far fa-edit"></i></a>
          <a href="#"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
   @endforeach
   <tr class="bg-primary"><td></td><td></td><td></td><td></td></tr>
</table>
@endsection
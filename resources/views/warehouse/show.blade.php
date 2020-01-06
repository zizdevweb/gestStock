@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Contenu depot {{$warehouse->name}}</legend>
<table class="table">
  <thead>
    <tr class="table-primary">
       <td scope="col">ID</td>
        <td scope="col">name</td>
        <td scope="col">Date appro</td>
        <td scope="col" >BL </td>
        <td scope="col" >BV </td>
        <td scope="col">description</td>
        <td scope="col">Prix_vente</td>
        <td scope="col">categorie</td>
    </tr>
    </thead>
    <tbody>
    @foreach($slipWare as $slip)
     @foreach($slip->products as $prod)   
      <tr>
        <td>{{$prod->id}}</td>
        <td>{{$prod->name}}</td>
        <td>{{$prod->pivot->created_at}}</td>
        <td>{{$prod->pivot->qte}}</td>
        <td>{{$prod->pivot->qte_vente}}</td>
        <td>{{$prod->description}}</td>
        <td>{{$prod->prix_vente}}</td>
        <td>{{$prod->category->name}}</td>
    </tr>
   @endforeach
   @endforeach
   <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
   </tbody>
</table>
@endsection

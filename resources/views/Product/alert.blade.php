@extends('accueil')
@section('alert')
{{count($productAlert)}}
@endsection
@section('contenu')
<legend>Liste des Produits en zone alerte</legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" class="bg-primary" ></th>
      <th scope="col">Nom Article</th>
      <th scope="col">Quantite</th>
      <th scope="col-3">Categorie</th>    
    </tr>
  </thead>
  <tbody>
  @foreach($productAlert as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->category->name}}</td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
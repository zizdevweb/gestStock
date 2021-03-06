@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Detail Commande</legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >ID</th>
      <th scope="col">Provenance</th>
      <th scope="col">Date registre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scop="row">{{$ordS->id}}</td>
      <td>{{$ordS->provider->name}}</td>
      <td>{{$ordS->created_at}}</td> 
    </tr>
    <!-- <tr class="bg-primary"><td></td><td></td><td></td><td></td></tr> -->
  </tbody>
</table>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >ID</th>
      <th scope="col">Nom produits</th>
      <th scope="col">Quantite Commande</th>
      <th scope="col">Quantite Courante</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($ordS->products as $prod)
    <tr>
      <td scop="row">{{$prod->id}}</td>
      <td>{{$prod->name}} </td>
      <td>{{$prod->pivot->qte}}</td>
      <td>{{$prod->quantity}}</td>
      <td>
        @can('admin')
        <a href="{{route('edit_order',['id'=>$ordS->id])}}"><i class="far fa-edit"></i></a>
        @endcan
      </td> 
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection

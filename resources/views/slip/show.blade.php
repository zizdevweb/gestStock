@extends('layouts.accueil')
@section('contenu')
<legend>Bordereau </legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >#</th>
      <th scope="col">Nom produits</th>
      <th scope="col">livraison</th>
      <th scope="col">Vente</th>
      <th scope="col">Quantite Courante</th>
      <th scope="col">Action</th>
    </tr>  
  </thead>
  <tbody>
  
   @foreach($slip->products as $product)
        <tr>
          <td scop="row">{{$product->id}}</td>
          <td>{{$product->name}} </td>
          <td>{{$product->pivot->qte}}</td>
          <td>{{$product->pivot->qte_vente}}</td>
          <td>{{$product->quantity}}</td>
          <td><a href="{{route('edit_slip',['id'=>$slip->id])}}"><i class="far fa-edit"></i></a></td> 
        </tr>
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection

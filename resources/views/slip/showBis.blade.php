@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Historique bordereaux </legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nom produits</th>
      <th scope="col">Livraison</th>
      <th scope="col">Vente</th> 
      <th scope="col">Date d'Approvisionnement</th>  
    </tr>  
  </thead>
  <tbody>
  
   @foreach($wslip as $slip)
     @foreach($slip->products as $product)
        <tr>
          <td scop="row">{{$product->id}}</td>
          <td><a href="{{route('showBis_product',['id'=>$product->id])}}">{{$product->name}} </td>
          <td>{{$product->pivot->qte}}</td>
          <td>{{$product->pivot->qte_vente}}</td>
          <td>{{$product->pivot->created_at}}</td>    
        </tr>
      @endforeach 
    @endforeach 
    <tr class="bg-primary" ><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Rapport </legend>
    <table class="table">
  <thead>
   <tr><td cols="7" class="bg-success text-black-50">Commande</td></tr>
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nom Article</th>
      <th scope="col">Categorie</th>
      <th scope="col">Quantite</th>
      <th scope="col-3">Commande</th>
      <th scope="col">Fournisseur</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    @foreach($product->orders as $order)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td><a href="{{route('showBis_product',['id'=>$product->id])}}">{{$product->name}}</a></td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$order->pivot->qte}}</td>
            <td>{{$order->provider->name}}</td>
            <td>{{$product->updated_at}}</td>
        </tr> 
    @endforeach 
    
  @endforeach   
  
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr> 
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
     {{$products->links()}} 
  </ul>
</nav>


<table class="table">
  <thead>
    <tr class="table-primary">
    <tr><td cols="7" class="bg-success text-black-50">Livraisons/Ventes</td></tr>
      <th scope="col">ID</th>
      <th scope="col">Nom Article</th>
      <th scope="col">Categorie</th>
      <th scope="col">Quantite</th>
      <th scope="col-3">Livraison</th>
      <th scope="col">Vente</th>
      <th scope="col">Depot</th>
    </tr>
  </thead>  
  <tbody>
    @foreach($products as $product)
        @foreach($product->slips as $slip )
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$slip->pivot->qte}}</td>
            <td>{{$slip->pivot->qte_vente}}</td>
            <td><a href="{{route('showBis_slip',['id'=>$slip->warehouse->id])}}">{{$slip->warehouse->name}}</a></td>
        </tr> 
        @endforeach
    @endforeach
    </tbody>   
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
<nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        {{$products->links()}} 
      </ul>
    </nav> 

@endsection
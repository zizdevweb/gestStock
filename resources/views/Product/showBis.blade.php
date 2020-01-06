@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Suivi produit {{$product->name}} </legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >ID</th>
      <th scope="col">livraison</th>
      <th scope="col">vente</th>
      <th scope="col">source/operation</th>  
      <th scope="col">Date denregistrement</th>  
    </tr>  
  </thead>
  <tbody>
  
   @foreach($slips as $slip)
        <tr>
          <td scop="row">{{$slip->id}}</td>
          <td>{{$slip->pivot->qte}} </td>
          <td>{{$slip->pivot->qte_vente}}</td>
          <td>{{$slip->warehouse->name}}</td>
          <td>{{$slip->pivot->created_at}}</td>    
        </tr>
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
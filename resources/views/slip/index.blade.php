@extends('layouts.accueil')
@section('contenu')
<legend>Liste Bordereau</legend>
<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >#</th>
      <th scope="col">Type</th>
      <th scope="col">Destinataire</th>
      <th scope="col">Nombre d'articles</th>
      <th scope="col">Date registre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($slips as $slip)
    <tr>
      <td scop="row">{{$slip->id}}</td>
      <td>{{$slip->type}}</td>
      <td><a href="{{route('showBis_slip',['id'=>$slip->warehouse->id])}}">{{$slip->warehouse->name}}</a> </td>
      <td>{{count($slip->products)}}</td>
      <td>{{$slip->created_at}}</td>
      <td>
          <a href="{{route('show_slip',['id'=>$slip->id])}}"><i class="fas fa-info-circle"></i></a> 
       </td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
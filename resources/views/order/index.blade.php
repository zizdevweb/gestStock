@extends('layouts.accueil')
@section('contenu')
<legend class="alert-primary">Liste Commandes</legend>
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
  @foreach($ordL as $ol)
    <tr>
      <td scop="row">{{$ol->id}}</td>
      <td>{{$ol->provider->name}}</td>
      <td>{{$ol->created_at}}</td>
      <td>
          <a href="{{route('show_order',['id'=>$ol->id])}}"><i class="fas fa-info-circle"></i></a> 
       </td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
     {{$ordL->links()}} 
  </ul>
</nav>
@endsection

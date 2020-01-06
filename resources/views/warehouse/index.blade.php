
@extends("layouts.accueil")
@section('contenu')
<!-- <table class="table table-striped table-dark"> -->
<legend class="alert-primary">Liste Depots </legend>
    <table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >ID</th>
      <th scope="col">Nom Depot</th>
      <th scope="col">Localite</th>
      <th scope="col-3">niveau</th>
      <th scope="col">Responsable</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($warehouses as $ware)
    <tr>
      <th scope="row">{{$ware->id}}</th>
      <td>{{$ware->name}}</td>
      <td>{{$ware->adress}}</td>
      <td>{{$ware->level}}</td>
       <td></td>
      <td><a href="{{route('edit_warehouse',['id'=>$ware->id])}}"><i class="far fa-edit"></i></a>
          <a href="{{route('show_warehouse',['id'=>$ware->id])}}"><i class="fas fa-info-circle"></i></i></a> 
       </td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
@extends('layouts.accueil')
@section('contenu')
<table class="table">
   <legend class="alert-primary" >Liste categories</legend>
    <tr  class="table-primary">
        <th>ID</th>
        <th>Nom Categorie</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $cats)
    <tr>
        <td>{{$cats->id}}</td>
        <td>{{$cats->name}}</td>
        <td>{{$cats->description}}</td>  
      <td>
        @can('admin')
         <a href="{{route('edit_category',['id'=>$cats->id])}}"><i class="far fa-edit"></i></a>
          <a href="#"><i class="far fa-trash-alt"></i></a>
        @endcan  
      </td>
    </tr>
   @endforeach
   <tr class="bg-primary"><td></td><td></td><td></td><td></td></tr>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
     {{$categories->links()}} 
  </ul>
</nav>
@endsection
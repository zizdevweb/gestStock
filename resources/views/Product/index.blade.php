@extends("layouts.accueil")
@section('contenu')
<!-- <table class="table table-striped table-dark"> -->
    <table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col" >#</th>
      <th scope="col">Nom Article</th>
      <th scope="col">Quantite</th>
      <th scope="col-3">Description</th>
      <th scope="col">Date de creation</th>
      <th scope="col">Categorie</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->created_at}}</td>
      <td>{{$product->category->name}}</td>
      <td><a href="{{route('edit_product',['id'=>$product->id])}}"><i class="far fa-edit"></i></a>
          <a href="{{route('show_product',['id'=>$product->id])}}"><i class="fas fa-info-circle"></i></i></a> 
       </td>
    </tr> 
    @endforeach 
    <tr class="bg-primary"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </tbody>
</table>
@endsection
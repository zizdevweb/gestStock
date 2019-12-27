@extends("layouts.accueil")
@section('contenu')
<form action="" method="post">
    @csrf

    <legend>Details article</legend>
    <table class="table">
  <thead>
    <tr class="table-primary">
     <th scope="col" >#</th>
      <th scope="col" >Nom Article</th>
      <th scope="col">Description</th>
      <th scope="col">Quantite stock</th>
      <th scope="col-3">Quantite alerte</th>
      <th scope="col">Date de creation</th>
      <th scope="col">Dernier MAJ</th>
      <th scope="col">Categorie</th>
      @foreach($orders as $key=>$order)
      <th cols="{{count($orders)}}">fournisseur{{$key+1}}</th>
      @endforeach
      <th>A+</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->alert_qte}}</td>
      <td>{{$product->created_at}}</td>
      <td>{{$product->updated_at}}</td>
      <td>{{$product->category->name}}</td>
      @foreach($orders as $order)    
      <td>{{$order->provider->name}}</td>
      @endforeach
      <td><a href="#"><i class="far fa-trash-alt"></i></a>   
       </td>
    </tr>  
    <tr class="bg-primary"><td></td><td></td><td></td>
                           <td></td><td></td><td></td>
                           <td></td><td></td>
                        @foreach($orders as $order) 
                            <td></td>
                        @endforeach
                           <td></td>
    </tr>
  </tbody>
</table>
@endsection
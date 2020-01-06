@extends("layouts.accueil")
@section('contenu')
<form action="{{route('update_product',['id'=>$product->id])}}" method="post">
    @csrf
    @method('patch')

    <legend class="alert-primary">Modification Article</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
    <label for="formGroupExampleInput">Nom Article</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix achat</label>
    <input type="number" class="form-control" name="prix_achat" value="{{$product->prix_achat}}" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix Vente previsionnel</label>
    <input type="number" class="form-control" name="prix_vente" value="{{$product->prix_vente}}" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantite alerte</label>
    <input type="number" class="form-control" name="alert_qte" value="{{$product->alert_qte}}">
  </div>
    <textarea class="form-control" rows="3" placeholder="Description" name="description">{{$product->description}}</textarea>
    <div class="form-group">
      <div>
        <select class="form-control" name="category_id" id="category_id">
            <option value="" selected>{{$product->category->name}}</option>
            @foreach($category as $key=>$value )
            <option value="{{$key}}" >{{$value }}</option>
        @endforeach
        </select>
      </div>     
   </div>
   <input class="btn btn-success" type="submit" value="valider">
 @endsection
</form>
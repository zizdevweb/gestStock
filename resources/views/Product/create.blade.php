@extends('layouts.accueil')
@section('contenu')

<form action="{{route('store_product')}}" method="post">
    @csrf
  
    <legend>Ajout d'un article</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
    <label for="formGroupExampleInput">Nom Article</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix achat</label>
    <input type="number" class="form-control" name="prix_achat">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix Vente previsionnel</label>
    <input type="number" class="form-control" name="prix_vente">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Quantite alerte</label>
    <input type="number" class="form-control" name="alerte">
  </div>
    <textarea class="form-control" rows="3" placeholder="Description" name="description"></textarea>
    <div><select class="form-control" name="category_id" id="category_id">
       <option value="" selected>Categorie</option>
       @foreach($category as $key=>$value )
      <option value="{{$key}}" >{{$value }}</option>
   @endforeach
   </select>
   </div>
   <input class="btn btn-primary" type="submit" value="enregistrer">
  
</form>



@endsection

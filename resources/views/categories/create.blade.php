@extends('layouts/accueil')
@section('contenu')
<form action="{{route('store_category')}}" method="post">
    @csrf
  
    <legend>Ajout d'un article</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
        <label for="formGroupExampleInput">Nom Categorie</label>
        <input type="text" class="form-control" name="name">
   </div>
   <div class="form-group">
      <textarea class="form-control" rows="3" placeholder="Description" name="description"></textarea>
   </div>
    <div class="form-group"> 
        <input class="btn btn-primary" type="submit" value="enregistrer">
    </div>    

   
 </form> 
@endsection
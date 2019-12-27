@extends('layouts.accueil')
@section('contenu')
<form action="{{route('update_category',['id'=>$category->id])}}" method="post">
@csrf
@method('patch')
  
  <legend>Modification article</legend>
          @if($errors->any())
      @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif
  <div class="form-group">
      <label for="formGroupExampleInput">Nom Categorie</label>
      <input type="text" class="form-control" name="name" value="{{$category->name}}">
 </div>
 <div class="form-group">
    <textarea class="form-control" rows="3" placeholder="Description" name="description" value="{{$category->description}}"></textarea>
 </div>
  <div class="form-group"> 
      <input class="btn btn-success" type="submit" value="valider">
  </div>    

 
</form> 
@endsection
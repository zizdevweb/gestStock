@extends('layouts.accueil')
@section('contenu')

<form action="{{route('store_warehouse')}}" method="post">
    @csrf
  
    <legend class="alert-primary">Creation Depot</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
    <label for="formGroupExampleInput">Nom Depot</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Localite</label>
    <input type="text" class="form-control" name="adresse">
  </div>
  <div class="form-group">
     <select class="form-control" name="level" >
        <option value="" selected>Niveau</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
       
   </select>
   </div>
    
    <div class="form-group">
      <select class="form-control" name="user_id" id="user_id">
       <option value="" selected>Responsable</option>
       @foreach($user as $key=>$value )
      <option value="{{$key}}" >{{$value }}</option>
   @endforeach
   </select>
   </div>
   <input class="btn btn-primary" type="submit" value="enregistrer">
  
</form>
@endsection

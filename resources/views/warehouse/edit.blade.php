@extends("layouts.accueil")
@section('contenu')
<form action="{{route('update_warehouse',['id'=>$warehouse->id])}}" method="post">
    @csrf
    @method('patch')

    <legend class="alert-primary">Modification Depot</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
    <label for="formGroupExampleInput">Nom Article</label>
    <input type="text" class="form-control" name="name" value="{{$warehouse->name}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Localite</label>
    <input type="text" class="form-control" name="adresse" value="{{$warehouse->adress}}" >
  </div>
  <div><select class="form-control" name="level" >
       <option value="{{$warehouse->level}}" selected>{{$warehouse->level}}</option>
        <option value="1" >1</option>
        <option value="1" >2</option>
        <option value="1" >3</option>
   </select>
   </div>
   <input class="btn btn-success" type="submit" value="valider">
   
 @endsection


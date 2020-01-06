@extends('layouts.accueil')
@section('contenu')

<form action="{{route('store_user')}}" method="post">
    @csrf
  
    <legend class="alert-primary">Ajout utilisateur</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
   <!--  <div class="form-group">
    <label for="formGroupExampleInput">Prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div> -->
  <div class="form-group">
    <label for="formGroupExampleInput2">Nom</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pseudo</label>
    <input type="text" class="form-control" name="pseudo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mot de passe</label>
    <input type="password" class="form-control" name="pseudo">
  </div>
 
    
    <div  class="form-group">
      <div>
        <select class="form-control" name="profile">
          <option value="admin" >Admin</option>
          <option value="maneger" >Gerant</option>
          <option value="commercial" >Commercial</option>
      
      </select>
    </div>
   </div>
   <input class="btn btn-primary" type="submit" value="enregistrer">
  
</form>



@endsection
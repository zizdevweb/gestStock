@extends('layouts.accueil')
@section('contenu')

<form action="{{route('store_provider')}}" method="post">
    @csrf
    <legend>Ajout d'un Fournisseur</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
    <div class="form-group">
        <label for="formGroupExampleInput">Nom Fournisseur</label>
        <input type="text" class="form-control" name="name">
   </div>
   <div class="form-group">
        <label for="formGroupExampleInput">Coordonnees-Email</label>
        <input type="text" class="form-control" name="mail">
   </div>
   <div class="form-group">
        <label for="formGroupExampleInput">Coordonnees-Telephone</label>
        <input type="text" class="form-control" name="telephone">
   </div>
   <div class="form-group">
      <textarea class="form-control" rows="2" placeholder="Coordonnees-adress" name="address"></textarea>
   </div>
    <div class="form-group"> 
        <input class="btn btn-primary" type="submit" value="enregistrer">
    </div>    

   
 </form> 


</form>
@endsection
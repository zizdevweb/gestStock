@extends('layouts.accueil')
@section('contenu')

<form action="{{route('update_provider',['id'=>$provider->id])}}" method="post">
    @csrf
    @method('patch')
    <legend>Modification Fournisseur</legend>
            @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
         <!-- <div class="alert alert-success">Operation effectuee</div> -->
        @endif
    <div class="form-group">
        <label for="formGroupExampleInput">Nom Fournisseur</label>
        <input type="text" class="form-control" name="name" value="{{$provider->name}}">
   </div>
   <div class="form-group">
        <label for="formGroupExampleInput">Coordonnees-Email</label>
        <input type="text" class="form-control" name="mail" value="{{$provider->mail}}">
   </div>
   <div class="form-group">
        <label for="formGroupExampleInput">Coordonnees-Telephone</label>
        <input type="text" class="form-control" name="telephone">
   </div>
   <div class="form-group">
      <textarea class="form-control" rows="2" placeholder="Coordonnees-adress" name="address">{{$provider->adress}}</textarea>
   </div>
    <div class="form-group"> 
        <input class="btn btn-primary" type="submit" value="enregistrer">
    </div>    

   
 </form> 


</form>
@endsection
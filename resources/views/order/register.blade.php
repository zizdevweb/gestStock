@extends('layouts.accueil')
@section('contenu')
<!-- <style>
   #A15{display:none}
</style> -->
<form action="{{route('store_order')}}" method="post">
@csrf
 <legend class="alert-primary">Enregistrement Commande</legend>
     @if($errors->any())
      @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif
    <div class="form-group" id="A1">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n1" id="ev1"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v1" id="en1"></div>
        </div>
    </div>
    <div class="form-group" id="A2">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n2"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v2"></div>
        </div>
    </div>
    <div class="form-group" id="A3">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n3"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v3"></div>
        </div>
    </div>
    <div class="form-group" id="A4">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n4"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v4"></div>
        </div>
    </div>
    <div class="form-group" id="A5">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n5"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v5"></div>
        </div>
    </div>
    <div class="form-group" id="A6">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n6"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v6"></div>
        </div>
    </div>
    <div class="form-group" id="A7">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n7"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v7"></div>
        </div>
    </div>
    <div class="form-group" id="A8">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n8"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v8"></div>
        </div>
    </div>
    <div class="form-group" id="A9">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n9"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v9"></div>
        </div>
    </div>
    <div class="form-group" id="A10">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n10"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v10"></div>
        </div>
    </div>
    <div class="form-group" id="A11">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n11"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v11"></div>
        </div>
    </div>
    <div class="form-group" id="A12"> 
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n12"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v12"></div>
        </div>
    </div>
    <div class="form-group" id="A13">
        <div class="row">
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text" name="n13"></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" name="v13"></div>
        </div>
    </div>
    <div class="form-group" id="A14">
        <div>
            <select class="form-control" name="provider" id="">
               <option value="" selected>provenance</option>
               @foreach($prov as $key=>$pr)
               <option value="{{$key+1}}">{{$pr->name}}</option>
               @endforeach
            </select>
        </div>
    </div>
    <div class="form-group" id="A15">
        <div class="row">
           <div class="col-6"> <input type="button" class="btn btn-secondary" value="suivant >>"  > </div>
           <div class="col-6"> <input  class="btn btn-primary" type="submit" value="enregister" > </div>
        </div>
    </div> 
</form>
<!-- <script>
let ev1=document.getElementById('ev1').value
let en1=document.getElementById('en1').value
let A15=document.getElementById('A15')

if(ev1!=="" && en1!==""){
    A15.style.display=block;
}

</script> -->
@endsection


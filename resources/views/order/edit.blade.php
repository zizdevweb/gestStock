@extends('layouts.accueil')
@section('contenu')
<form action="{{route('update_order',['id'=>$ordS->id])}}" method="post">
@csrf
@method('patch')
<legend>Modification Commande</legend>
          @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
          @endif

      @foreach($ordS->products as $product)
      <div class="form-group">
        <div class="row">
            
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text"  value="{{$product->name}}" name="n1" ></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" value="{{$product->pivot->qte}}" name="v1" ></div>
          
        </div>
    </div>
    @endforeach

    <div class="form-group" id="A14">
        <div>
            <select class="form-control" name="provider" id="">
               <option value="" selected>provenance</option>
               @foreach($provider as $key=>$pr)
               <option value="{{$key+1}}">{{$pr->name}}</option>
               @endforeach
            </select>
        </div>
    </div>
  <div class="form-group"> 
      <input class="btn btn-success" type="submit" value="valider">
  </div>    

</form>

@endsection

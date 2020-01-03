@extends('layouts.accueil')
@section('contenu')
<form action="{{route('update_slip',['id'=>$slip->id])}}" method="post">
@csrf
@method('patch')
<legend>Modification Bordereau {{$slip->warehouse->name}} </legend>
          @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
          @endif

      @foreach($slip->products as $key=>$product)
    
      <div class="form-group">
        <div class="row">
            
            <div class="col-8"><label for="">Nom Article</label><input class="form-control" type="text"  value="{{$product->name}}" name="{{$key}}" ></div>
            <div class="col-4"><label for="">Quantite</label> <input class="form-control" type="number" value="{{$product->pivot->qte}}" name="{{$key+15}}" ></div>
          
        </div>
    </div>
    @endforeach

    <div class="form-group" id="A14">
        <div>
            <select class="form-control" name="destinataire" id="">
               <option value="{{$slip->warehouse->id}}" selected>{{$slip->warehouse->name}}</option>
               @foreach($warehouse as $key=>$wr)
               <option value="{{$key+1}}">{{$wr->name}}</option>
               @endforeach
            </select>
        </div>
    </div>
  <div class="form-group"> 
      <input class="btn btn-success" type="submit" value="valider">
  </div>    

</form>

@endsection

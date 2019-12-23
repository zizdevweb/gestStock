<form action="{{route('update_order',['id'=>$ordS->id])}}" method="post">
    @csrf
    @method('patch')
    @foreach($ordS->products as $prod)
    <input type="text" value="{{$prod->name}}" name="mame">
    <input type="text" value="{{$prod->pivot->qte}}" name="qte">
    @endforeach
   <select name="provider" id="">
         <option value="{{$ordS->provider->id}}" selected>{{$ordS->provider->name}}</option>
         @foreach($provider as $key=>$prov)
         <option value="{{$key+1}}">{{$prov->name}}</option>
         @endforeach
   </select>   
   
    <input type="submit" value="envoyer">
</form>

<form action="{{route('update_product',['id'=>$product->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" value="{{$product->name}}" name="name">
    <input type="number" value="{{$product->prix_achat}}" name="prix_achat">
    <input type="number" value="{{$product->prix_vente}}" name="prix_vente">
    <div><textarea type="text-area" value="" name="description">{{$product->description}}</textarea></div>
   <select name="category_id" id="">
    @foreach($category as $key=>$value)
      <option value="{{$key}}">{{$value}}</option>
      @endforeach
   </select>
    <input type="submit" value="envoyer">
</form>
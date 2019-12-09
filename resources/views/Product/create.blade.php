<form action="{{route('store_product')}}">
<input type="text" placeholder="nom" name="name"> 
<textarea name="decription" id="" cols="30" rows="10"></textarea>

<input type="number" placeholder="prix_achat" name="prix_achat"> 
<input type="number" placeholder="prix_vente" name="prix_vente"> 
<select name="category_id" id="category_id">
   <option value="" selected>Categorie</option>
   @foreach($category as $key=>$value )
      <option value="{{$key}}" >{{$value }}</option>
   @endforeach
  </select>
</form>

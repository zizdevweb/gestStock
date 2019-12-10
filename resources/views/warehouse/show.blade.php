<input type="text" name="name" id="" value="{{$warehouse->name}}">
<table border="2">
    @foreach($prods as $prod)
    <tr>
        <td>{{$prod->id}}</td>
        <td>{{$prod->name}}</td>
        <td>{{$prod->created_at}}</td>
        <td>{{$prod->updated_at}}</td>
        <td>{{$prod->description}}</td>
        <td>{{$prod->prix_vente}}</td>
        <td>{{$prod->categorie_id}}</td>
        <td>{{$prod->category->name}}</td>
    </tr>
   @endforeach
</table>

<table>
    <tr>
        <td>#</td>

        <td>Nom Produits</td>
        <td>Description</td>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @endforeach
</table>

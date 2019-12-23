
<table>
    <tr>   
        <td>Nom produit</td>
        <td>Quantite</td>
        <td>date enregistrement</td>    
    </tr>
    @foreach($ordProd as $prod)
    <tr>
       <td>{{$prod->name}}</td>
       <td>{{$prod->pivot->qte}}</td>  
       <td>{{$prod->pivot->created_at}}</td> 
    </tr>
    @endforeach

</table>

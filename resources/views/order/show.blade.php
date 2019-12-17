<form action="{{route('show_order',['id'=>$ord1])}}" method="post">
<table>
      <tr>
        <td>Fournisseur:{{$ordS->provider->name}}</td>
    </tr> 
    <tr>   
        <td>Date D'enregistrement:{{$ordS->created_at}}</td>
    </tr> 
    <tr>   
        <td>Nom produit</td>
        <td>Quantite</td>
    </tr>
    @foreach($ord as $or)
    <tr>
       <td>$or->name</td>
       <td>$or->quantity</td>  
    </tr>
    @endforeach

</table>
</form>
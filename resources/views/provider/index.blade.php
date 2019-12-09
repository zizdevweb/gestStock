<table>
<tr>
   <td>#</td>
   <td>nom</td> 
   <td>adresse</td>
   <td>email</td>
   <td>telephone</td>

</tr>
@foreach($providers as $prod)
<tr>
   <td>{{$prod->id}}</td>
   <td>{{$prod->name}}</td> 
   <td>{{$prod->adress}}</td>
   <td>{{$prod->mail}}</td>
   <td>{{$prod->telephone}}</td>

</tr>
@endforeach
</table>
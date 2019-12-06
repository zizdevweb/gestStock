<table>
    <tr>
        <td>#</td>
        <td>Nom Categorie</td>
        <td>Description</td>
        <td>action</td>
    </tr>

    @foreach($categories as $cats)
    <tr>
        <td>{{$cats->id}}</td>

        <td>{{$cats->name}}</td>
        <td>{{$cats->description}}</td>
      <td><p><a href="{{route('edit_category',['id'=>$cats->id])}}">Editer</a></td>
    </tr>

        @endforeach


</table>





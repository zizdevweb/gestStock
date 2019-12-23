<form action="">
    <div>
      <table>
        <tr>
            <td>Code</td>
            <td>Fournisseur</td>
            <td>Date registre</td>
        </tr> 
        @foreach($ordL as $ol)
        <tr>
            <td>{{$ol->id}}</td>
            <td>{{$ol->provider}}</td>
            <td>{{$ol->created_at}}</td>
            <td><p><a href="{{route('show_order',['id'=>$ol->id])}}">contenu</a></p></td>
            <td><p><a href="{{route('edit_order',['id'=>$ol->id])}}">editer</a></p></td>
        </tr> 
        @endforeach   
      </table>
    </div>

</form>
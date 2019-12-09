<table>
    <tr>
        <td>#</td>
        <td>Nom Entropt</td>
        <td>Emplacemnt</td>
        <td>Niveau</td>
bqc
    </tr>

    @foreach($warehouses as $ware)
        <tr>
            <td>{{$ware->id}}</td>
            <td>{{$ware->name}}</td>
            <td>{{$ware->adress}}</td>
            <select name="user_name" id="">
                <option value="" selected>Responsable</option>
                <option value="{{$ware->user()->name}}">{{$ware->user()->name}}</option>

            </select>

        </tr>
    @endforeach
</table>

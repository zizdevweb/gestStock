<form action="{{route('store_warehouse')}}">
    <input type="text" placeholder="nom" name="name">
    <input type="number" placeholder="level" name="level">
    <input type="text" placeholder="emplacement" name="adress">
    <select name="user_id" id="user_id">
        <option value="" selected>Utilisateur</option>
        @foreach($user as $key=>$value )
            <option value="{{$key}}" >{{$value}}</option>
        @endforeach
    </select>
</form>

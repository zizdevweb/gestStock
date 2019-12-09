<form action="{{route('update_warehouse',['id'=>$warehouse->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" value="{{$warehouse->name}}" name="name">
    <input type="text" value="{{$warehouse->adress}}" name="adress">
    <input type="number" value="{{$warehouse->level}}" name="level">
    <select name="category_id" id="">
            <option value="{{$warehouse->user_id}}">{{$warehouse->user->name}}</option>
    </select>
    <input type="submit" value="envoyer">
</form>

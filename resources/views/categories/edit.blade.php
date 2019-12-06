<form action="{{route('update_category',['id'=>$category->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" value="{{$category->name}}" name="name">
    <div><textarea type="text-area" value="" name="description">{{$category->description}}</textarea></div>
    <input type="submit" value="envoyer">
</form>

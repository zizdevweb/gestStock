<form action="{{route('update_provider',['id'=>$provider->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" value="{{$provider->name}}" name="name">
    <input type="text" value="{{$provider->adress}}" name="adress">
    <input type="email" value="{{$provider->mail}}" name="mail">

    <input type="submit" value="envoyer">
</form>

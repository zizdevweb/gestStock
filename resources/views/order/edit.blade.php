<form action="{{route('update_order',['id'=>$order->id])}}" method="post">
    @csrf
    @method('patch')
    <input type="text" value="{{$oder->provider->name}}" name="name">
    <input type="text" value="{{$order->user->name}}" name="adress">
    @foreach($order->products as $ord)
    <input type="text" value="{{$ord->name}}" name="mail">
    @endforeach

    <input type="submit" value="envoyer">
</form>

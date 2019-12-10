<form action="{{route('store_provider')}}" method="post">
    @csrf
 <input type="text" name="name" placeholder="nom">
 <input type="text" name="adress" placeholder="adresse">
 <input type="email" name="email" placeholder="email">
 <input type="text" name="telephone" placeholder="telephone">
 <input type="submit" value="envoyer">


</form>

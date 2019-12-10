<form action="">
    @csrf
<select name="" id="">
    <option value="" selected>
       categorie
    </option>
    @foreach($categ as $cat)
    <option value="">
        {{$cat->name}}
    </option>
        @foreach($cat->products as $cp )
            {{$cp->name}}<input type="checkbox" name="" id="0">
            <input type="number" placeholder="quantite">
        @endforeach
    @endforeach
</select>


    <select name="" id="">
        <option value="">Fournisseur</option>
        @foreach($prov as $provi)
        <option value="">{{$provi->name}}</option>
            @endforeach
    </select>
    <input type="submit" name="" id="" value="enregister">
</form>

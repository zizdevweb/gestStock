<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('store_order')}}" method="post">
    @csrf

    @foreach($categ as $cat)

            <div>categorie-{{$cat->name}}</div>

            @foreach($cat->products as $cp )
            <div>
                <div>{{$cp->name}}</div>
               <input type="number"  id="qty" value="0" name="quantity"  placeholder="quantite" onchange="doalert(this)">


                    {{--<script>
                        add= document.getElementById('add');
                        supp= document.getElementById('supp');
                       qte= document.getElementById('qte');

                         add.addEventListener("click", function(){
                            qte.innerHTML='<input type="number" placeholder="quantite" name="quantity">';
                         });
                </script>--}}

            @endforeach
                <div>-------------------------------------------------------------------------</div>

    @endforeach

    <select name="provider" id="">
        <option value="">Fournisseur</option>
        @foreach($prov as $key=>$provi)
        <option value="{{$key+1}}" >{{$provi->name}}</option>
            @endforeach
    </select>

    <input type="submit" name="" id="" value="enregister">
</form>
</body>
</html>

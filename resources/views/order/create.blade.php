<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                      <!--  <style type="text/css">
                            #qte{
                            display:none; 
                            }
                       </style>  -->
<form action="{{route('store_order')}}" method="post">
    @csrf
    
    @foreach($categ as $cat)
    
            <div>categorie-{{$cat->name}}</div>
            
            @foreach($cat->products as $cp )
            <div>
                <div>{{$cp->name}}</div>
               <!-- <div ><input type="checkbox"  id="qty"  onchange="doalert(this)"></div> -->
                <input id="add"  type="buttom" value="aad">
                <input id="supp"  class="btn btn-primary" value="del">
                <div id="qte">
                </div>
                
            
               
             
                    <!-- <script> 
                     checkbox = document.getElementById('boxer');
                        chx= document.getElementById('{{$cp->name}}');
                      function addC()
                        {
                        
                            if (checkbox.checked != true)
                            {
                                chx.innerHTML='<input type="number" placeholder="quantite" name="quantity">'
                             
                            }
                            else
                                 chx.innerHTML=''
                        }
                    </script> -->
                    <script>
                        add= document.getElementById('add');
                        supp= document.getElementById('supp');
                       qte= document.getElementById('qte');

                         add.addEventListener("click", function(){
                            qte.innerHTML='<input type="number" placeholder="quantite" name="quantity">';
                         });

                       /* function doalert(checkboxElem) {
                        
                        if (checkboxElem.checked) {
                            //alert ("hi");
                            checkbox.style.display="block";
                        } else {
                            //alert ("bye");
                            checkbox.style.display="none";
                        }
                  } */


                    </script>
                                                
            @endforeach       
            
               
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

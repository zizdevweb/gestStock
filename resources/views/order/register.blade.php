<form action="{{route('store_order')}}" method="post">
@csrf
    <div>
        <div>
            <input type="text" name="n1"><input type="number" name="v1">
            <input type="text" name="base1" class="base1" id="base1">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n2"><input type="number" name="v2">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n3"><input type="number" name="v3">
        </div>
    </div>
    <div>
        <div>
            <input type="text"  name="n4"><input type="number" name="v5">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n6"><input type="number" name="v6">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n7"><input type="number" name="v7">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n8"><input type="number" name="v8">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n9"><input type="number" name="v9">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n10"><input type="number" name="v10">
            
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n11"><input type="number" name="v11">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n12"><input type="number" name="v12">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n13"><input type="number" name="v13">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n14"><input type="number" name="v14">
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="n15"><input type="number" name="v15">
        </div>
    </div>
    <div>
        <div>
            <select name="provider" id="">
               <option value="" selected>provenance</option>
               @foreach($prov as $key=>$pr)
               <option value="{{$key+1}}">{{$pr->name}}</option>
               @endforeach
            </select>
        </div>
    </div>
    <div>
        <div>
            <input type="text"  placeholder= "suivant"  ><input type="submit" value="enregister" >
        </div>
    </div>
  
</form>

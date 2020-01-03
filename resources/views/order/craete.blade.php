<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form   action="{{('store_order')}}" method="get">
    @csrf
    <div class="form-control">
         <div><input type="text" name="v1"/> <input type="number" name="n1"/></div>
        <div><input type="text" name="v2"/> <input type="number" name="n2"/></div>
        <div><input type="text" name="v3"/> <input type="number" name="n3"/></div>
        <div><input type="text" name="v4"/> <input type="number" name="n4"/></div>
        <div><input type="text" name="v5"/> <input type="number" name="n5"/></div>
        <div><input type="text" name="v6"/> <input type="number" name="n6"/></div>
        <div><input type="text" name="v7"/> <input type="number" name="n7"/></div>
        <div> <input type="text" name="v8"/> <input type="number" name="n8"/></div>
        <div> <input type="text" name="v9"/> <input type="number" name="n9"/></div>
        <div><input type="text" name="v10"/> <input type="number" name="n10"/></div>
    </div>
</form>
</body>
</html>



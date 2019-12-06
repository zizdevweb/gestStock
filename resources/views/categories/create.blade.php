

<div>
    <form action="{{route(' categories/store') }}" method="post">
        @csrf
        <input type="text" class="control-form" name="name" placeholder="Nom de la categorie"><br>
        <input type="text" class="control-form" name="description" placeholder="description categorie"><br>

        <input type="submit" class="btn btn-primary" value="envoyer">
    </form>
</div>

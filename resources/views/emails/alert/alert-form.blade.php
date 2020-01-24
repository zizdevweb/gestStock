@component('mail::message')
#Bonjour

un nouveau produit vient de s'ajouter a la zone alerte.

<table class="table">
        <tr class="table-primary">
           <td>Nom Produit</td>
           <td>Quantite Courante</td>
        </tr>
        @foreach($productRed as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
        </tr>
        @endforeach
        
       
        <tr class="bg-primary"><td></td><td></td></tr>
</table>


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

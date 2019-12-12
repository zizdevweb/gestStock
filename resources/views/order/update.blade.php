@foreach($prod as $prodt)

 if($prodt->quantity !==0){
    if($prodt){
        $prodt->update[
        'quantity'=>$prodt->quantity+$request->input('quantity')
        ]
    }

 } 
@endforeach
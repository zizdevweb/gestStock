@foreach($prod as $pdt)
              $pdt->quantity+=$request->input('quantity');
              $pdt->save();
         @endforeach    
         return redirect("/");        

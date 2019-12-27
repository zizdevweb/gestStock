<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Order;
use App\Provider;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordL= Order::all();
        return view("order.index", compact("ordL")); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categ= Category::all();
        $prov= Provider::all();
        return view("order.register",compact("categ","prov"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->validate([
            'provider'=>'required'
        ]);
        $c= Order::create(["provider_id"=>$request->input('provider')]);
        $c1= $c->id;
         
        $c2= Order::find($c1);

        $categ= Category::all();

        $n1=$request->input('n1');
        $v1=$request->input('v1');
        $p1= Product::whereName($n1)->first();
        $data=$request->validate([
            'n1'=>'required',
            'v1'=>'required'
         ]);
        if($p1!=null){
            $data=$request->validate([
                    'n1'=>'required|numeric|min:1',
                    'v1'=>'required|min:3'
            ]);
            $q=$p1->quantity+$v1;
            $p1->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p1->id,['qte'=>$v1]);
        }


        $n2=$request->input('n2');
        $v2=$request->input('v2');
        $p2= Product::whereName($n2)->first();
        if($p2!=null){
            $data=$request->validate([
                'quantity'=>'numeric|min:1'
            ]);
            $q=$p2->quantity+$v2;
            $p2->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p2->id,['qte'=>$v2]);
        }
        
        $n3=$request->input('n3');
        $v3=$request->input('v3');
        $p3= Product::whereName($n3)->first();
        if($p3!=null){
            $data=$request->validate([
                'quantity'=>'numeric|min:1'
            ]);
            $q=$p3->quantity+$v3;
            $p3->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p3->id,['qte'=>$v3]);
        }

        $n4=$request->input('n4');
        $v4=$request->input('v4');
        $p4= Product::whereName($n4)->first();
        if($p4!=null){
            $data=$request->validate([
                'quantity'=>'numeric|min:1'
                ]);
            $q=$p4->quantity+$v4;
            $p4->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p4->id,['qte'=>$v4]);
        }

        $n5=$request->input('n5');
        $v5=$request->input('v5');
        $p5= Product::whereName($n5)->first();
        if($p5!=null){
            $data=$request->validate([
                  'quantity'=>'numeric|min:1'
                  ]);
            $q=$p5->quantity+$v5;
            $p5->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p5->id,['qte'=>$v5]);
        }

        $n6=$request->input('n6');
        $v6=$request->input('v6');
        $p6= Product::whereName($n6)->first();
        if($p6!=null){
            $data=$request->validate([
                'quantity'=>'numeric|min:1'
                ]);
            $q=$p6->quantity+$v6;
            $p6->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p6->id,['qte'=>$v6]);
        }

        $n7=$request->input('n7');
        $v7=$request->input('v7');
        $p7= Product::whereName($n7)->first();
        if($p7!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p7->quantity+$v7;
            $p7->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p7->id,['qte'=>$v7]);
        }

        $n8=$request->input('n8');
        $v8=$request->input('v8');
        $p8= Product::whereName($n8)->first();
        if($p8!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p8->quantity+$v8;
            $p8->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p8->id,['qte'=>$v8]);
        }

        $n9=$request->input('n9');
        $v9=$request->input('v9');
        $p9= Product::whereName($n9)->first();
        if($p9!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p9->quantity+$v9;
            $p9->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p9>id,['qte'=>$v9]);
        }

        $n10=$request->input('n10');
        $v10=$request->input('v10');
        $p10= Product::whereName($n10)->first();
        if($p10!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p10->quantity+$v10;
            $p10->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p10->id,['qte'=>$v10]);
        }

        $n11=$request->input('n11');
        $v11=$request->input('v11');
        $p11= Product::whereName($n11)->first();
        if($p11!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p11->quantity+$v11;
            $p11->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p11->id,['qte'=>$v11]);
        }

        $n12=$request->input('n12');
        $v12=$request->input('v12');
        $p12= Product::whereName($n12)->first();
        if($p12!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p12->quantity+$v12;
            $p12->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p12->id,['qte'=>$v12]);
        }

        $n13=$request->input('n13');
        $v13=$request->input('v13');
        $p13= Product::whereName($n13)->first();
        if($p13!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p13->quantity+$v13;
            $p13->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p13->id,['qte'=>$v13]);
        }

        $n14=$request->input('n14');
        $v14=$request->input('v14');
        $p14= Product::whereName($n14)->first();
        if($p14!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p14->quantity+$v14;
            $p14->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p14->id,['qte'=>$v14]);
        }
        $n15=$request->input('n15');
        $v15=$request->input('v15');
        $p15= Product::whereName($n15)->first();
        if($p15!=null){
            $data=$request->validate([
                'quantity'=>'required|numeric|min:1'
                ]);
            $q=$p15->quantity+$v15;
            $p15->update([
                'quantity'=>$q
            ]);
            $c2->products()->attach($p15->id,['qte'=>$v15]);
        }
         return redirect()->back();
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ordS= Order::find($id);
        $ordProd=$ordS->products;
        return view("order.show", compact("ordProd","ordS") );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ordS= Order::find($id);
        $provider= Provider:: all();
        //$ordProd=$ordS->products;
        return view("order.edit", compact("ordS","provider") );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $order= Order::find($id);
        $prod=$order->products;
        foreach($prod as $product){
       /*  $data=$request->validate([
              $product->name=>'required',
              $product->id=>'required'
        ]); */
         $product->update([
            'name'=>$request->input('n1')
         ]);
         
        }
        
         $order->update([
                          'provider_id'=>$request->input('provider')
                       ]);
             return redirect()->back();      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

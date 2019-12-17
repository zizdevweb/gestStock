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
        //$prod= Product::all();
        return view("order.create",compact("categ","prov"));

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
        
        $c= Order::create(["provider_id"=>$request->input('provider')]);
        $c1= $c->id;
         
        $c2= Order::find($c1);
        $prod= new Product();
        $categ= Category::all();
        foreach($categ as $cat)
        {
            foreach($cat->products as $cp )
            {
                $nm=$cp->name;
              
                    $pn= Product::whereName($nm)->first();
                    $pn1= $pn->id;
                    $pnq= $pn->quantity;
                    $pnq1 =$pnq+$request->input($nm);
                            if($pn)
                            {
                                $pn->update([
                                    'name'=>$nm,
                                    'description'=>$pn->description,
                                    'quantity'=>$pnq1,
                                    'category_id'=>$pn->category_id
                                ]);
                              
                                $c2->products()->attach($pn1,['qte'=>$pnq1]);
                            }
                /* } */
            }    
        }      

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
        $ord1= $ordS->id;
        $ord=$ordS->products()->attach($ord1);
        return view("order.show", compact("ordS","ord","ord1") );
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
        return view("order.update", compact("prod"));
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

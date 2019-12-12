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
        $order =new Order();
         $order->provider_id=$request->input('provider');  
         $order->save();
         $prod=$order->products;
         
         //return view("order.store",compact("prod","request"));
        $product= new Product();
         foreach($prod as $pdt){
            $product=$pdt->quantity+=$request->input('quantity');
            $product=$pdt->pivot->product_id=$pdt->id;
         $product->save();
         }
    return redirect("/"); 
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

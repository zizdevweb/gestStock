<?php

namespace App\Http\Controllers;

use App\Warehouse;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;

class WarehousesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //    	return "je viens de la page index";
        $warehouses=Warehouse::all();

        return view("warehouse.index", compact("warehouses"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user= User::pluck('name','id');
        return view("warehouse.create",compact('user'));
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
          'name'=>'required',
          'level'=>'required'/* ,
          'user_id'=>'required' */
        ]);
        $warehouse= new Warehouse();
        $warehouse->name=$request->input('name');
        $warehouse->adress=$request->input('adresse');
        $warehouse->level=$request->input('level');
        $warehouse->user_id=$request->input('user_id');

        $warehouse->save();
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
        $warehouse= Warehouse::find($id);
        //$prods=$warehouse->products;
        return view ("warehouse.show",compact("warehouse","prods"));
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
        $warehouse= Warehouse::find($id);
        return view("warehouse.edit",compact("warehouse"));
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
        $ware= Warehouse::find($id);
        if($ware){
            $ware->update([
                'name'=> $request->input('name'),
                'adress'=>  $request->input('adresse'),
                'level'=> $request->input('level')
            ]);
        }

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

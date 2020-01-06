<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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

    public function __construct()
    {
       $this->middleware('auth');
    } 
    
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
        $warehouse->name=strtolower($request->input('name'));
        $warehouse->adress=strtolower($request->input('adresse'));
        $warehouse->level=$request->input('level');
        $warehouse->user_id=Auth::id();

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
        $slipWare= $warehouse->slips;
        return view ("warehouse.show",compact("warehouse","slipWare"));
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
                'name'=>strtolower($request->input('name')),
                'adress'=>strtolower($request->input('adresse'))  ,
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

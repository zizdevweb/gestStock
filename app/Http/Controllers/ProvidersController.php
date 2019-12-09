<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //    	return "je viens de la page index";
                $providers=Provider::all();
                
                return view("provider.index", compact("providers"));
            }
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                //
                
                return view("provider.create");
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
                $provider= new Provider();
                $provider->name=$request->input('name');
                $provider->adress=$request->input("addres");
                $provider->mail->input("email");
               
                $provider->save();
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
                $provider= Provider::find($id);
                return view("provider.edit",compact("provider"));
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
                $prov= Provider::find($id);
                if($prov){
                    $prov->update([
                        'name'=> $request->input('name'),
                        'description'=>  $request->input('description'),
                        'prix_achat'=>   $request->input('prix_achat'),
                        'prix_vente'=>   $request->input('prix_vente'),
                        'category_id'=>   $request->input('category_id')
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

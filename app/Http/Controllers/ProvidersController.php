<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Provider;

class ProvidersController extends Controller
{
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
        //    
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
                $date=$request->validate([
                       'name'=>'required|min:3'
                ] );
                $provider= new Provider();
                $provider->name=strtolower($request->input('name'));
                $provider->adress=strtolower($request->input("address"));
                $provider->mail=$request->input("mail");
                $provider->user_id=Auth::id();
               /*  $provider->phone->input("phone"); */

                $provider->save();
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
                $data=$request->validate([
                    'name'=>'required|min:3'
                ]);
                $prov= Provider::find($id);
                if($prov){
                    $prov->update([
                        'name'=>strtolower( $request->input('name')),
                        'adress'=>strtolower($request->input('address'))  ,
                        'mail'=>strtolower(  $request->input('mail')) 
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

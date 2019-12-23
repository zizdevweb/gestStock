<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
//    	return "je viens de la page index";
        $products=Product::all();

        return view("Product.index", compact("products"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category= Category::pluck('name','id');
        return view("Product.create",compact("category"));
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
        $data = $request->validate([
            'name'=>'required|min:3',
            'category_id'=>'required|numeric',
            'prix_achat' => 'numeric',
            'prix_achat' => 'numeric',
            'alert_qte' => 'numeric',
            'description' => 'max:1000000'
        ]);
        $product= new Product();
        $product->name=$request->input('name');
        $product->description=$request->input("description");
        $product->prix_achat=$request->input("prix_achat");
        $product->prix_vente=$request->input("prix_vente");
        $product->alert_qte= $request->input("alerte");
        $product->category_id=$request->input("category_id");
        $product->save();
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
        $product= Product::find($id);
        $category= Category::pluck('name','id');
        return view("Product.edit",compact("product","category"));
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
        $cat=Category::find($id);
        if($cat){
            $cat->update([
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

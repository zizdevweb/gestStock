<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    } 
    
    public function index(){
//    	return "je viens de la page index";
        $products=Product::simplePaginate(5);

        return view("Product.index", compact("products"));
    }

      /* fonction permettant de lister l'ensemble des produits en zone alerte */
    public function alert(){
       $productAlert= Product::where('quantity','<=','qte_alert')->get();
       return view("Product.alert",compact("productAlert"));
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
        $product->name=strtolower($request->input('name'));
        $product->description=strtolower($request->input("description"));
        $product->prix_achat=$request->input("prix_achat");
        $product->prix_vente=$request->input("prix_vente");
        $product->alert_qte= $request->input("alerte");
        $product->category_id=$request->input("category_id");
        $product->user_id=Auth::id();
        $product->save();
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
        $product= Product::find($id);
        $orders=$product->orders;
        return view("Product.show", compact("product","orders"));
    }

 
    /* methode pour retourner ls liste des borderau par produits 
    et ainsi un appercu du mvt    */
  
    public function showBis($id)
    {
        //
        $product= Product::find($id);
        $slips=$product->slips;
        return view("Product.showBis", compact("product","slips"));
    }

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
        $data = $request->validate([
            'name'=>'required|min:3',
            'category_id'=>'required|numeric',
            'prix_achat' => 'numeric',
            'prix_achat' => 'numeric',
            'alert_qte' => 'numeric',
            'description' => 'max:1000000'
        ]);
        $prod=Product::find($id);
        if($prod){
            $prod->update([
                'name'=> strtolower($request->input('name')),
                'description'=> strtolower( $request->input('description')),
                'prix_achat'=>   $request->input('prix_achat'),
                'prix_vente'=>   $request->input('prix_vente'),
                'category_id'=>   $request->input('category_id'),
                'alert_qte'=>$request->input('alert_qte')
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

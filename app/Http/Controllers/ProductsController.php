<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
//    	return "je viens de la page index";
        $products=Product::all();
        return view("Product.index", compact("products"));
    }
    /*public function show($id){
    	return "je suis de la categorie $id";
    }*/
}

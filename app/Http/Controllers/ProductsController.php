<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
    	return "je viens de la page index";
    }
    public function show($id){
    	return "je suis de la categorie $id";
    }
}

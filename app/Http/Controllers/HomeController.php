<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view("accueil");
    }
    public function show($id){
    	return view("products.index", compact("id"));
    }
}

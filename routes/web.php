<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/produits/{id}',function($id){
     return "je suis le produits $id";
});
Route::get("/produits","ProductsController@index");
Route::get("/categories/{id}", "ProductsController@show");
Route::get("/", "HomeController@index");
Route::get("/products/{id}","HomeController@show");
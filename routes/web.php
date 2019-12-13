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
Route::get("/product","ProductsController@index");


//Route::get("/", "HomeController@index");
Route::get("/", "HomeController@accueil");

Route::get("/products/{id}","HomeController@show");
Route::get("/product/create","ProductsController@create");
Route::post("/product/store","ProductsController@store")->name('store_product');
Route::get("/product/edit/{id}","ProductsController@edit")->name('edit_product');
Route::patch("/product/edit/{id}","ProductsController@update")->name('update_product');

/*Route::resource("/categories","categoriesController");*/
Route::get("/categories/list","categoriesController@index");
Route::get("/categories","categoriesController@create");
Route::post("/categories/store","categoriesController@store")->name('store_category');
Route::get("/category/edit/{id}","categoriesController@edit")->name('edit_category');
Route::patch("/category/edit/{id}","categoriesController@update")->name('update_category');


Route::get("/fournisseurs/list","ProvidersController@index");
Route::get("/fournisseur/ajout","ProvidersController@create");
Route::post("/fournisseur/store","ProvidersController@store")->name('store_provider');
Route::get("/fournisseur/edit/{id}","ProvidersController@edit")->name('edit_provider');
Route::patch("/fournisseur/edit/{id}","ProvidersController@update")->name('update_provider');



Route::get("/depot/list","WarehousesController@index");
Route::get("/depot/ajout","WarehousesController@create");
Route::post("/depot/store","WarehousesController@store")->name('store_provider');
Route::get("/depot/edit/{id}","WarehousesController@edit")->name('edit_provider');
Route::patch("/depot/edit/{id}","WarehousesController@update")->name('update_provider');
Route::get("/depot/contenu/{id}","WarehousesController@show");


Route::get("/depot/list","WarehousesController@index");
Route::get("/commande/ajout","OrdersController@create");
//Route::post("/commande/store","OrdersController@store")->name('store_order');
Route::get("/commande/edit/{id}","OrdersController@edit")->name('edit_order');
Route::patch("/commande/edit/{id}","OrdersController@update")->name('update_order');
Route::get("/commande/contenu/{id}","WarehousesController@show");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

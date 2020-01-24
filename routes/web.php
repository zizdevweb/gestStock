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
Route::get('/rapport',function(){
     return view('layouts.tableau');
})->name('rapport');
Route::get("/product","ProductsController@index");


//Route::get("/", "HomeController@index");
Route::get("/", "HomeController@accueil");


Route::get("/products/list","ProductsController@index")->name('index_product');
Route::get("/products/alert","ProductsController@alert")->name('alert_product');
Route::get("/products/show/{id}","ProductsController@show")->name('show_product');
Route::get("/product/create","ProductsController@create")->name('create_product');
Route::post("/product/store","ProductsController@store")->name('store_product');
Route::get("/product/edit/{id}","ProductsController@edit")->name('edit_product');
Route::patch("/product/edit/{id}","ProductsController@update")->name('update_product');
Route::get("/product/bordereaux/{id}","ProductsController@showBis")->name('showBis_product');
Route::get("/product/report","ProductsController@report")->name('report_product');


/*Route::resource("/categories","categoriesController");*/
Route::get("/categories/list","categoriesController@index")->name('index_category');
Route::get("/categories","categoriesController@create")->name('create_category');
Route::post("/categories/store","categoriesController@store")->name('store_category');
Route::get("/category/edit/{id}","categoriesController@edit")->name('edit_category');
Route::patch("/category/edit/{id}","categoriesController@update")->name('update_category');


Route::get("/fournisseurs/list","ProvidersController@index")->name('index_provider');
Route::get("/fournisseur/ajout","ProvidersController@create")->name('create_provider');
Route::post("/fournisseur/store","ProvidersController@store")->name('store_provider');
Route::get("/fournisseur/edit/{id}","ProvidersController@edit")->name('edit_provider');
Route::patch("/fournisseur/edit/{id}","ProvidersController@update")->name('update_provider');



Route::get("/depot/list","WarehousesController@index")->name('index_warehouse');
Route::get("/depot/ajout","WarehousesController@create")->name('create_warehouse');
Route::post("/depot/store","WarehousesController@store")->name('store_warehouse');
Route::get("/depot/edit/{id}","WarehousesController@edit")->name('edit_warehouse');
Route::patch("/depot/edit/{id}","WarehousesController@update")->name('update_warehouse');
Route::get("/depot/contenu/{id}","WarehousesController@show")->name('show_warehouse');


Route::get("/commande/list","OrdersController@index")->name('index_order');
Route::get("/commande/ajout","OrdersController@create")->name('create_order');
Route::post("/commande/store","OrdersController@store")->name('store_order');
Route::get("/commande/edit/{id}","OrdersController@edit")->name('edit_order');
Route::patch("/commande/edit/{id}","OrdersController@update")->name('update_order');
Route::get("/commande/{id}","OrdersController@show")->name('show_order');

Route::get("/bordereau/list","SlipController@index")->name('index_slip');
Route::get("/bordereau/ajout","SlipController@create")->name('create_slip');
Route::post("/bordereau/store","SlipController@store")->name('store_slip');
Route::get("/bordereau/edit/{id}","SlipController@edit")->name('edit_slip');
Route::patch("/bordereau/edit/{id}","SlipController@update")->name('update_slip');
Route::get("/bordereau/{id}","SlipController@show")->name('show_slip');
Route::get("/bordereau/depot/{id}","SlipController@showBis")->name('showBis_slip');

Route::get("/utilisateur/list","UsersController@index")->name('index_user');
Route::get("/utilisateur/ajout","UsersController@create")->name('create_user');
Route::post("/utilisateur/store","UsersController@store")->name('store_user');
Route::get("/utilisateur/edit/{id}","UsersController@edit")->name('edit_user');
Route::patch("/utilisateur/edit/{id}","UsersController@update")->name('update_user');
Route::get("/utilisateur/{id}","UsersController@show")->name('show_user');
Route::get("/utilisateur/depot/{id}","UsersController@showBis")->name('showBis_user');


Auth::routes();
Auth::routes(['register' => false]);

Route::get('/alert', "AlertController@alert");

Route::get('/home', 'HomeController@index')->name('home');

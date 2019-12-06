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

Route::get("/", "HomeController@index");
Route::get("/products/{id}","HomeController@show");
/*Route::resource("/categories","categoriesController");*/
Route::get("/categories/list","categoriesController@index");
Route::get("/categories","categoriesController@create");
Route::post("/categories/store","categoriesController@store");
Route::get("/category/edit/{id}","categoriesController@edit")->name('edit_category');
//Route::patch("/category/update/{id}","categoriesController@update")->name('update_category');
Route::patch("/category/edit/{id}","categoriesController@update")->name('update_category');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

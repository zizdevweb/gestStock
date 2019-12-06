<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Product;

class Category extends Model
{
  
  //protected $fillable=['name','description'];
  protected $guarded=[];
  
  public function products(){
    return $this->hasMany("App\Product");
  }
}

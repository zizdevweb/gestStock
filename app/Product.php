<?php

namespace App;
use Category;
use Warehouses;
use Slip;
use Order;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=[];
    public function category(){
      return $this->belongsTo("App\Category");
    }
    public function warehouse(){
      return $this->belongsTo("App\Warehouse");
    }
    public function slip(){
      return $this->belongsTo("App\Slip");
    }
    public function orders(){
      return $this->belongsToMany("App\Order")->withPivot(['qte','created_at','updated_at']);
    }
    
}

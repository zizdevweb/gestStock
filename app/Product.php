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
      return $this->belongsTo("App\Category",'categorie_id');
    }
    public function warehouse(){
      return $this->belongsTo("App\Warehouse");
    }
    public function slip(){
      return $this->belongsTo("App\Slip");
    }
    public function order(){
      return $this->belongsTo("App\Order");
    }
    public function container(){
        return $this->morphTo();
    }
}

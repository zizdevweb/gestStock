<?php

namespace App;
use Category;
use Warehouse;
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
    public function orders(){
      return $this->belongsToMany("App\Order")->withPivot(['qte','created_at','updated_at']);
    }
    public function slips(){
      return $this->belongsToMany("App\Slip")->withPivot(['qte','qte_vente','created_at','type_b','updated_at']);
    }
}

<?php

namespace App;
use Product;
use Illuminate\Database\Eloquent\Model;
use User;
use warehouse;

class Slip extends Model
{
    //
    protected $guarded=[];
    public function products(){
        return $this->belongsToMany("App\Product")->withPivot(['qte','qte_vente','created_at','type_b','updated_at']);
      }
      public function warehouse(){
        return $this->belongsTo("App\Warehouse");
      }
    public function user(){
        return $this->belongsTo("App\User");
      }
}

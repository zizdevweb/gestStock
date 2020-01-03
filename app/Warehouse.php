<?php

namespace App;
use Product;
use Slip;
use Illuminate\Database\Eloquent\Model;
use User;
class Warehouse extends Model
{
    //
    protected $guarded=[];
    public function products(){
        return $this->belongsToMany("App\Product")->withPivot(['qte','created_at','updated_at']);
    }
    public function user(){
       return $this->belongsTo("App\User");
    }
    public function slips(){
     return $this->hasMany("App\Slip");
    }
    /*public function categories(){
        return $this->hasManyThrough("App\Category","App\Product");
    }*/
}

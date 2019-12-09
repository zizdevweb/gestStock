<?php

namespace App;
use Product;

use Illuminate\Database\Eloquent\Model;
use User;
class Warehouse extends Model
{
    //
    protected $guarded=[];
    public function products(){
        return $this->hasMany("App\Product");
    }
    public function user(){
       return $this->belongsTo("App\User");
    }
}

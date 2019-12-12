<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provider;
use App\User;

class Order extends Model
{
    //
    protected $guarded=[];
    public function provider(){
        return $this->belongsTo("App\Provider");
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
    public function products(){
        return $this->belongsToMany("App\Product");
    }
}

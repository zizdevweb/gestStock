<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Provider extends Model
{
    //
    protected $guarded=[];
    public function orders(){
        return $this->hasMany("App\Order");
    }
}

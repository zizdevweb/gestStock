<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    //
    public function alert()
    {
        $name='admin';
        $nameProduct=Product::where('quantity','<','alert_qte')->get();
    }

}

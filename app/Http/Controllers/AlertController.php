<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AlertMail;
use App\Product;

class AlertController extends Controller
{
    //
    public function alert()
    {
        $productRed=Product::where('quantity','<=','qte_alert')->get();
        Mail::to('ziz17fall@gmail.com')->send(new AlertMail($productRed));
       return "Message envoyé";
    }

}

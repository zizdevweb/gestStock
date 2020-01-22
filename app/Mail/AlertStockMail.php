<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AlertStockMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $name;
     public $nameProduct;
     public $quantityAlert;
    public function __construct($name, $nameProduct, $quantityAlert)
    {
        //
        $this->name=$name;
        $this->nameProduct=$nameProduct;
        $this->quantityalert=$quantityAlert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Alert.alertStcock');
    }
}

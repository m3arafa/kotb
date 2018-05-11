<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurePaymentcontroller extends Controller
{
    //


    public function getConfigurePayment(){


        return view('settings/configure_payment');
    }



}

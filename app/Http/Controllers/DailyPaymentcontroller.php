<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyPaymentcontroller extends Controller
{
    //
    public function getDailyPayment()
    {

        return view('daily/daily_payment');

    }

}

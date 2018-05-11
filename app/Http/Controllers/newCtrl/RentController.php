<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function getRent()
    {

        return view('daily/rent_register');

    }

}

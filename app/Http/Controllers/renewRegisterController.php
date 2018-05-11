<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class renewRegisterController extends Controller
{

    public function getRenewRegister()
    {

        return view('daily/renew_register');

    }

}

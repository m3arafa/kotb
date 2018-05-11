<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliverContainercontroller extends Controller
{

    public function getDeliverContainer()
    {

        return view('daily/deliver_container');

    }




}

<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    public function getAddTruck()
    {

        return view('settings/add_truck');

    }
}

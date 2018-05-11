<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesController extends Controller
{
    public function getSales()
    {

        return view('reports/sales_report');

    }

}

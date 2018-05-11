<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{

    public function getCommissionReport (){
        return view("reports/commission_report");

    }


    public function getEmptyingReport()
    {

        return view('reports/emptying_report');

    }

}

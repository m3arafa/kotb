<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyRentReportController extends Controller
{
    //

    public function getDailyRentReport(){

        return view( 'reports/daily_rent_report');

    }
}

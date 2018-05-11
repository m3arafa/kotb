<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function getClients()
    {

        return view('reports/client_reports');

    }

    public function getAddClient()
    {

        return view('settings/add_client');

    }


    public function getClientPayment()
    {

        return view('daily/client_payment');

    }


    public function getClientReport()
    {

        return view('reports/client_reports');

    }


    public function getClientStatement()
    {

        return view('reports/client_statement');

    }

}

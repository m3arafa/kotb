<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    //

    public function getAddContainer()
    {

        return view('settings/add_container');

    }

    public function getContainerReport()
    {

        return view('reports/container_report');

    }

    public function getEmptyingContainer()
    {

        return view('daily/emptying_container');

    }


    public function getReceiveContainer()
    {

        return view('daily/receive_container');

    }



    public function getSearchContainer()
    {

        return view('daily/search_container');

    }

}

<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{


    public function getAddContract()
    {

        return view('daily/add_contract');

    }


    public function getShowContract()
    {

        return view('reports/show_contract');

    }


    public function test(Branch $branch)
    {

    }

    public function test2()
    {

    }


}

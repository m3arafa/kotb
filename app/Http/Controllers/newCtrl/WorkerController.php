<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerController extends Controller
{



    public function getAddWorker()
    {

        return view('settings/add_worker');

    }

}

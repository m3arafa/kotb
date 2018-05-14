<?php

namespace App\Http\Controllers\newCtrl;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerController extends Controller
{


    public function getAddWorker()
    {

        return view('settings/add_worker');

    }

    public function store(Request $request)
    {

        $input = $request->all();

//        return $input;

        Employee::create($input);

        return redirect()->back();

    }

}

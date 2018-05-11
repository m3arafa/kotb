<?php

namespace App\Http\Controllers\newCtrl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{



    public function getAddUser()
    {

        return view('settings/add_user');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getKotbElkhalig(){

        return view('kotbelkhalig/Kotbelkhalig');
    }
}
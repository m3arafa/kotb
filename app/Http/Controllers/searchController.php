<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{


    public function getSearchContainer()
    {

        return view('daily/search_container');

    }

}

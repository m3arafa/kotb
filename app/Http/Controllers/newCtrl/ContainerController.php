<?php

namespace App\Http\Controllers\newCtrl;

use App\Branch;
use App\Container;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContainerController extends Controller
{

    public function addContainer()
    {

//        $branches = Branch::pluck('name', 'id')->all();

        $branches = Branch::select('name', 'id')->get();

//        dd($branches);
        return view('settings/add_container', compact('branches'));
    }

    public function storeContainer(Request $request)
    {

        $messages = [
            'branch_id.required' => 'اسم الفرع مطلوب',
            'number.required' => 'رقم الحاوية مطلوب',
            'number.unique' => 'رقم الحاوية موجود بالفعل',
            'size.required' => 'حجم الحاوية مطلوب',
        ];


        $rules = [
            'branch_id' => 'required',
            'number' => 'required|unique:containers,number',
            'size' => 'required',
        ];

        $this->validate($request, $rules, $messages);


        $input = [
            'branch_id' => $request->branch_id,
            'number' => $request->number,
            'size' => $request->size
        ];

        Container::create($input);


        return back()->with([
            'success' => 'تم الحفظ بنجاح'
        ]);


    }

//     ----------------------------------------------------


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

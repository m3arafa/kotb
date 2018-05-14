<?php

namespace App\Http\Controllers;

use App\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    //


    public function getAddSpending()
    {

        return view('settings/add_spending');
    }

    public function storeSpending(Request $request)
    {

        $rules = [
            'name' => 'required',
            'value' => 'required',
        ];

        $messages = [
            'name.required' => 'اسم المصروف مطلوب',
            'value.required' => 'قيمة المصروف مطلوبة'
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Spending::create($input);

        return back()->with([
                'success' => 'تم إضافة المصروف بنجاح'
            ]);


    }


}

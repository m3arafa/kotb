<?php

namespace App\Http\Controllers\newCtrl;

use App\Client;
use App\Contract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{


    public function getAddContract()
    {

        $clients = Client::select('name', 'id')->get();


        return view('daily/add_contract', compact('clients'));

    }

    public function storeContract(Request $request)
    {

        $rules = [
            'client_id' => 'required',
            'number' => 'required',
            'address' => 'required',
            'trip_days' => 'required',
            'number_of_containers' => 'required',
            'type_of_payment' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'cost' => 'required',
        ];

        $messages = [
            'client_id.required' => 'تحديد العميل مطلوب ',
            'number.required' => 'رقم العقد مطلوب',
            'address.required' => 'برجاء تحديد الموقع',
            'trip_days.required' => 'تحديد مدة الرحلة الواحدة مطلوب',
            'number_of_containers.required' => 'تحديد عدد الرحلات مطلوب',
            'type_of_payment.required' => 'برجاء تحديد طريقة الدفع',
            'from_date.required' => 'برجاء تحديد تاريخ بداية فترة الإيجار',
            'to_date.required' => 'برجاء تحديد تاريخ نهاية فترة الإيجار',
            'cost.required' => 'تحديد المبلغ مطلوب',
        ];


        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Contract::create($input);


        return back()->with([
            'success' => 'تم تسجيل التعاقد بنجاح'
        ]);

    }


//    ----------------------------------------------

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

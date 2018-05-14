<?php

namespace App\Http\Controllers\newCtrl;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function getClientAdd()
    {

        return view('settings/add_client');

    }

    public function storeClient(Request $reques)
    {

        $rules = [
            'name' => 'required',
            'number' => 'required|unique:clients,number',
            'phone' => 'required|unique:clients,phone',
            'address' => 'required',
            'credit_limit' => 'required'
        ];

        $messages = [
            'name.required' => 'الإسم مطلوب',
            'number.required' => 'رقم العميل مطلوب',
            'number.unique' => 'رقم العميل موجود بالفعل',
            'phone.required' => 'برجاء إدخال رقم الهاتف',
            'phone.unique' => 'رقم الموبايل موجود بالفعل',
            'address.required' => 'العنوان مطلوب',
            'credit_limit.required' => 'برجاء إدخال الحد الإئتمانى للعميل'
        ];


        $this->validate($reques, $rules, $messages);


        $input = $reques->all();

        Client::create($input);

        return back()->with([
            'success' => 'تم إضافة العميل بنجاح'
        ]);

    }


//    --------------------------------------------------------------


    public function getClients()
    {

        return view('reports/client_reports');

    }


    public function getClientPayment()
    {

        return view('daily/client_payment');

    }


    public function getClientReport()
    {

        return view('reports/client_reports');

    }


    public function getClientStatement()
    {

        return view('reports/client_statement');

    }

}

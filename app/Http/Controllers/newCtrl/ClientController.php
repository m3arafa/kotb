<?php

namespace App\Http\Controllers\newCtrl;

use App\Client;
use App\Client_Payment_Transaction;
use App\Contract;
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

    public function getClientPayment()
    {

        $clients = Client::select('name', 'id')->get();

        $contracts = Contract::select('id', 'number')->get();


        return view('daily/client_payment', compact('clients', 'contracts'));

    }

    public function storeClientPaymentTransaction(Request $request)
    {

        $rules = [
            'client_id' => 'required',
            'contract_id' => 'required',
            'value' => 'required',
            'type_of_payment' => 'required',
            'transaction_date' => 'required'
        ];


        $messages = [
            'client_id.required' => 'برجاء تحديد اسم العميل',
            'contract_id.required' => 'برجاء إدخال رقم العقد',
            'value.required' => 'برجاء إدخال مبلغ السداد',
            'type_of_payment.required' => 'برجاء تحديد طريقة الدفع',
            'transaction_date.required' => 'برجاء تحديد تحديد تاريخ السداد'
        ];


        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Client_Payment_Transaction::create($input);

        $contract = Contract::find($request->contract_id);
        $cost = $contract['cost'];
        $paid = $contract['paid'] + $request->value;
        $contract['paid'] = $paid;
        $contract['remainder'] = $cost - $paid;
        $contract->save();


        return back()->with([
            'success' => 'تم تسجيل السداد بنجاح'
        ]);

    }


//    --------------------------------------------------------------


    public function getClients()
    {

        return view('reports/client_reports');

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

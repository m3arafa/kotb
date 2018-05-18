<?php

namespace App\Http\Controllers\newCtrl;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Spending;
use App\Spending_Transaction;
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

    public function getDailyPayment()
    {

        $employees = Employee::select('name', 'id')->get();
        $spending = Spending::select('name', 'id')->get();

        return view('daily/spending_transaction', compact('employees', 'spending'));

    }

    public function StoreSpendingTransaction(Request $request)
    {

        $rules = [
            'spending_id' => 'required',
            'employee_id' => 'required',
            'transaction_date' => 'required',
        ];

        $messages = [
            'spending_id.required' => 'يرجى تحديد المصروف',
            'employee_id.required' => 'تحديد السائق / المشرف مطلوب',
            'transaction_date.required' => 'يرجى تحديد تاريخ صرف المصروف'
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Spending_Transaction::create($input);

        return back()->with([
            'success' => 'تم تسجيل المصروف بنجاح'
        ]);

    }


}

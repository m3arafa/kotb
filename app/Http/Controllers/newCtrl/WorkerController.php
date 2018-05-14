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

    public function storeEmployee(Request $request)
    {


        $messages = [
            'name.required' => 'الاسم مطلوب',
            'job.required' => 'تحديد الوظيفة مطلوب',
            'residency_number.required' => 'برجاء إدخال رقم الإقامة',
            'residency_end_date.required' => 'برجاء ادخال تاريخ نهاية الإقامة',
            'license_end_date.required' => 'برجاء تحديدتاريخ نهاية الرخصة',
            'medical_insurance_end_date.required' => 'برجاء تحديد تاريخ إنتهاء التأمين الطبى',
            'passport_end_date.required' => 'برجاء تحديد تاريخ انتهاء جواز السفر'
        ];

        $rules = [
            'name' => 'required',
            'job' => 'required',
            'residency_number' => 'required',
            'residency_end_date' => 'required',
            'license_end_date' => 'required',
            'medical_insurance_end_date' => 'required',
            'passport_end_date' => 'required'
        ];


        $this->validate($request, $rules, $messages);


        $input = $request->all();

         Employee::create($input);

        return back()->with([
            'success' => 'تم إضافة العامل بنجاح'
        ]);

    }

}

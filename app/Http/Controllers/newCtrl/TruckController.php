<?php

namespace App\Http\Controllers\newCtrl;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{

    public function getAddTruck()
    {

        $employees = Employee::select('name', 'id', 'job')->get();

        return view('settings/add_truck', compact('employees'));

    }

    public function storeTruck(Request $request)
    {

        $rules = [
            'employee_id' => 'required',
            'number' => 'required|unique:trucks,number',
            'read_now' => 'required',
            'oil_change_from' => 'required',
            'oil_change_to' => 'required',
            'kamashat_change_date' => 'required',
            'battery_change_date' => 'required',
            'ghatas_air_from_date' => 'required',
            'ghatas_air_to_date' => 'required',
            'cover_change_date' => 'required',
            'air_condition_change_date' => 'required',
            'end_deal_paper_date' => 'required',
            'end_insurance_date' => 'required',
            'end_work_card_date' => 'required',
        ];

        $messages = [
            'employee_id.required' => 'برجاء تحديد  السائق',
            'number.required' => 'رقم السيارة مطلوب',
            'number.unique' => 'رقم السيارة موجود بالفعل',
            'read_now.required' => 'برجاء إدخال القرائة الحالية للعداد',
            'oil_change_from.required' => 'تاريخ بداية غيار الزيت مطلوب',
            'oil_change_to.required' => 'تاريخ نهاية غيار الزيت مطلوب',
            'kamashat_change_date.required' => 'تاريخ تبديل القماشات مطلوب',
            'battery_change_date.required' => 'تاريخ تغيير البطارية مطلوب',
            'ghatas_air_from_date.required' => 'تاريخ بداية غطاس الهواء مطلوب',
            'ghatas_air_to_date.required' => 'تاريخ نهاية غطاس الهواء مطلوب',
            'cover_change_date.required' => 'تاريخ تغيير الكفرات مطلوب',
            'air_condition_change_date.required' => 'تاريخ تغيير فلتر الهواء مطلوب',
            'end_deal_paper_date.required' => 'تاريخ انتهاء الاستمارة مطلوب',
            'end_insurance_date.required' => 'تاريخ إنتهاء التأمين مطلوب',
            'end_work_card_date.required' => 'تاريخ إنتهاء كارت التشغيل مطلوب',
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Truck::create($input);

        return back()->with([
            'success' => 'تم إضافة الشاحنة بنجاح'
        ]);

    }
}

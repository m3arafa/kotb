<?php

namespace App\Http\Controllers\newCtrl;

use App\Client;
use App\Container;
use App\Contract;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Rent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function getRent()
    {

        $clients = Client::all();

        $contracts = Contract::all();

        $containers = Container::all()->where('is_empty', '1');

        $employees = Employee::all();

        return view('daily/rent_register', compact('clients', 'contracts', 'containers', 'employees'));

    }

    public function storeRentContract(Request $request)
    {

        $rules = [
            'client_id' => 'required',
            'driver_id' => 'required',
            'supervisor_id' => 'required',
            'contract_id' => 'required',
            'container_id' => 'required',
            'driver_commission' => 'required',
            'supervisor_commission' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'address' => 'required',
        ];

        $messages = [
            'client_id.required' => 'برجاء اختيار العميل',
            'driver_id.required' => 'برجاء إختيار السائق',
            'supervisor_id.required' => 'برجاء إختيار المشرف',
            'contract_id.required' => 'برجاء نحديد  رقم العقد',
            'container_id.required' => 'برجاء إختيار رقم الحاوية',
            'driver_commission.required' => 'تحديد عمولة السائق مطلوبة',
            'supervisor_commission.required' => 'تحديد عمولة المشرف مطلوبة',
            'from_date.required' => 'برجاء تحديد تاريخ بداية فترة الإيجار',
            'to_date.required' => 'برجاء تحديد تاريخ نهاية فترة الإيجار',
            'address.required' => 'برجاء إدخال عنوان الإيجار',
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Rent::create($input);

        return back()->with([
            'success' => 'تم تسجيل إيجار الحاوية بنجاح'
        ]);


    }

    public function storeRentCash(Request $request)
    {

        $rules = [
            'driver_id' => 'required',
            'supervisor_id' => 'required',
            'container_id' => 'required',
            'client_name' => 'required',
            'client_phone' => 'required',
            'driver_commission' => 'required',
            'supervisor_commission' => 'required',
            'cost' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'bill_number' => 'required',
            'address' => 'required',
        ];

        $messages = [
            'driver_id.required' => 'برجاء إختيار السائق',
            'supervisor_id.required' => 'برجاء إختيار المشرف',
            'container_id.required' => 'برجاء إحتيار الحاوية',
            'client_name.required' => 'اسم العميل مطلوب',
            'client_phone.required' => 'رقم الهاتف الخاص بالعميل مطلوب',
            'driver_commission.required' => 'برجاء تحديد عمولة السائق',
            'supervisor_commission.required' => 'برجاء تحديد عمولة المشرف',
            'cost.required' => 'برجاء إدخال المبلغ',
            'from_date.required' => 'يرجى تحديد تاريخ بداية فترة الإيجار',
            'to_date.required' => 'يرجى تحديد تاريخ نهاية فترة الإيجار',
            'bill_number.required' => 'برجاء إدخال رقم الفاتورة',
            'address.required' => 'برجاء تحديد العنوان ',
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        Rent::create($input);


        return back()->with([
            'success' => 'تم تسجيل إيجار الحاوية بنجاح'
        ]);

    }


    public function getClientContracts(Request $request)
    {
        $client = Client::find($request->client_id);

        $credit_limit = '<p>الحد الائتمانى للعميل : ' . $client['credit_limit'] . '</p>';

        $contracts = $client->contracts()->select('id', 'number')->get();

        $data = '';

        foreach ($contracts as $contract) {
            $data .= '<option value="' . $contract->id . '">' . $contract->number . '</option>';
        }

        return response()->json([

            'data' => $data,
            'credit_limit' => $credit_limit,

        ]);
    }

    public function getContainersNumbers(Request $request)
    {
        $containers = Container::whereSize($request->container_size)->select('id', 'number')->get();

        $data = '';

        foreach ($containers as $container) {
            $data .= '<option value="' . $container->id . '">' . $container->number . '</option>';
        }

        return response()->json([
            'data' => $data,
        ]);
    }

    public function getContractTripDays(Request $request)
    {
        $contract = Contract::find($request->contract_id);

        $trip_days = '<p>' . 'مدة الرحلة : ' . $contract['trip_days'] . '</p>';


        return response()->json([
            'trip_days' => $trip_days,
        ]);
    }
}

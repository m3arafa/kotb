<?php

namespace App\Http\Controllers\newCtrl;

use App\Branch;
use App\Client;
use App\Container;
use App\Container_Transaction;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Rent;
use Carbon\Carbon;
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

    public function getEmptyingContainer()
    {


        $containers = Container::select('number', 'id', 'is_empty')->get();

        $employees = Employee::all();

        return view('daily/emptying_container', compact('containers', 'employees'));

    }

    public function storeContainerTransaction(Request $request)
    {

        $rules = [
            'employee_id' => 'required',
            'container_id' => 'required',
            'bill_number' => 'required',
            'employee_commission' => 'required',
            'transaction_date' => 'required'
        ];

        $messages = [
            'employee_id.required' => 'برجاء تحديد السائق',
            'container_id.required' => 'برجاء تحديد رقم الحاوية',
            'bill_number.required' => 'رقم الإيصال مطلوب',
            'employee_commission.required' => 'عمولة السائق مطلوبة',
            'transaction_date.required' => 'برجاء كتابة تاريخ التفريغ'
        ];


        $this->validate($request, $rules, $messages);

        $input = [
            'employee_id' => $request->employee_id,
            'container_id' => $request->container_id,
            'bill_number' => $request->bill_number,
            'employee_commission' => $request->employee_commission,
            'transaction_date' => $request->transaction_date,
            'type_of_transaction' => 1,
        ];

        Container_Transaction::create($input);

        $container = Container::find($request->container_id);
        $container->is_empty = 1;
        $container->save();


        return back()->with([
            'success' => 'تم تسجيل تفريغ الحاوية بنجاح'
        ]);


    }


    public function getSearchContainer()
    {

        return view('daily/search_container');

    }


    public function getContainerReport()
    {

        $containers = Container::all();
        $number_of_containers = 0;
        $containers_empty_number = 0;
        $containers_not_empty_number = 0;
        $containers_has_rent = 0;


        $rents = Rent::all();
        $clients = Client::all();
        $drivers = Employee::whereJob(2)->get();
        $container_transactions = Container_Transaction::whereType_of_transaction(1)->get();
        $current_date = $carbon = Carbon::today();


        foreach ($containers as $container) {
            $number_of_containers++;
            if ($container->is_empty == 1) {
                $containers_empty_number++;
            } else {
                $containers_not_empty_number++;
            }

            if (count($container->rents) > 0) {
                foreach ($rents as $rent) {
                    if ($rent->from_date <= $current_date) {
                        if ($rent->to_date >= $current_date) {
                            $containers_has_rent++;
                            break;
                        }

                    }
                }

            }
        }


        return view('reports/container_report',
            compact(
                'number_of_containers',
                'containers_empty_number',
                'containers_not_empty_number',
                'containers_has_rent',
                'containers',
                'rents',
                'clients',
                'drivers',
                'container_transactions',
                'current_date'
            ));

    }


//     ----------------------------------------------------


    public function getReceiveContainer()
    {

        return view('daily/receive_container');

    }

    public function getDeliverContainer()
    {

        return view('daily/deliver_container');
    }


}

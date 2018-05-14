<?php

namespace App\Http\Controllers\newCtrl;

use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function getBranchReport()
    {

        return view('reports/branch_report');

    }


    public function getAll()
    {

        return view('settings/add_branch');
    }

    public function getBranch($id)
    {

//        $brach = Branch::where('id', $id)->first();

//        $brach = Branch::find($id);
//        if ($brach) {
//            return view('settings/add_branch');
//
//        } else {
//            return back();
//
//            abort(404);
//        }

        $brach = Branch::findOrFail($id);


        return view('settings/show_branch', ['branch' => $brach]);


    }


    public function storeBranch(Request $request)
    {

        $messages = [
            'name.required' => 'اسم الفرع مطلوب',
            'name.unique' => 'اسم الفرع موجود بالفعل',
            'address.required' => 'العنوان مطلوب',
            'logo.required' => 'الصورة مطلوبة'
        ];

        $rules = [
            'name' => 'required|unique:branches,name',
            'address' => 'required',
            'logo' => 'required | mimes:jpeg,png,bmp,jpg',
        ];

        $this->validate($request, $rules, $messages);

        $name = null;

        if ($file = $request->file('logo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('public/img', $name);
        }

        $input = [
            'name' => $request->name,
            'address' => $request->address,
            'logo' => $name,
        ];

        Branch::create($input);

        return back()->with([
            'success' => 'تم الحفظ بنجاح'
        ]);

/*
        $messages = [
            'branch_name.required' => 'اسم الفرع مطلوب',
            'branch_name.unique' => 'اسم الفرع موجود بالفعل',
            'address.required' => 'العنوان مطلوب',
            'logo.required' => 'الصورة مطلوبة'
        ];

        $rules = [
            'branch_name' => 'required|unique:branches,name',
            'address' => 'required',
            'logo' => 'required | mimes:jpeg,png,bmp,jpg',
        ];

        $this->validate($request, $rules, $messages);

        $branch = new Branch();
        $branch->name = $request->branch_name;
        $branch->address = $request->address;

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $xt = $file->getClientOriginalExtension();

            $file_name = time() . '.' . $xt;
            $file->move('public/img', $file_name);

        }
        $branch->logo = $file_name;

        $branch->save();

        return back()->with([
            'success' => 'تم الحفظ بنجاح'
        ]);
*/
    }

    public function deleteBranch(Request $request)
    {

//        dd($request->all());
        $brach = Branch::findOrFail($request->b_id);
        $brach->delete();

//dd($brach);
//        $brach->delete();
        return back();
    }


    public function updateBranch(Request $request)
    {
        $branch_update = Branch::findorfail($request->b_id);
        $messages = [
            'branch_name.required' => 'اسم الفرع مطلوب',
            'address.required' => 'العنوان مطلوب',

        ];

        $rules = [
            'branch_name' => 'required|unique:branches,name,' . $branch_update->id,
            'address' => 'required',
//            'logo' => 'required | mimes:jpeg,png,bmp,jpg',
        ];

        $this->validate($request, $rules, $messages);

        if ($branch_update) {

            $branch_img = $branch_update->logo;

            if ($request->has('logo')) {
                $file = $request->file('logo');
                $xt = $file->getClientOriginalExtension();

                $file_name = time() . '.' . $xt;
                $file->move('public/img', $file_name);

                $branch_update->logo = $file_name;

                File::delete('public/img', $branch_img);

            }

            $branch_update->name = $request->branch_name;
            $branch_update->address = $request->address;
            $branch_update->save();
            return redirect()->route('AddBranch')->with(['success' => 'تم التعديل بنجاح']);

        } else {
            return redirect()->back()->with(['error' => 'dfdsgdgdf']);
        }

    }

    public function getItemBranches($id)
    {
        $item = Item::find($id);

        $branches = Branch::where('item_id', $this->id)->get();

        $its_branches = $item->branches();

    }

}

<?php

namespace App\Http\Controllers\newCtrl;

use App\Branch;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function getAddUser()
    {

        $branches = Branch::select('name', 'id')->get();

        return view('settings/add_user', compact('branches'));

    }

    public function storeUser(Request $request)
    {
        $messages = [
            'name.required' => 'الإسم مطلوب',
            'username.required' => 'اسم المستخدم مطلوب',
            'username.unique' => 'اسم المستخدم موجود بالفعل',
            'password.required' => 'كلمة المرور مطلوبة',
            'branch_id.required' => 'نحديد الفرع مطلوب',
            'role.required' => 'برجاء تحديد صلاحية المستخدم'
        ];

        $rules = [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'branch_id' => 'required',
            'role' => 'required'
        ];

        $this->validate($request, $rules, $messages);


        $input = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'branch_id' => $request->branch_id,
            'role' => $request->role,
        ];

        User::create($input);

        return back()->with([
            'success' => 'تم إضافة المستخدم بنجاح'
        ]);


    }

}

@extends('main.main')
@section('address')
    <h1> إضافه مستخدم</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>الاسم</h4></label>
            <div class="col-md-4">
                <input id="user_name" placeholder="أدخل اسم المستخدم " class="form-control" type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>كلمه المرور</h4></label>
            <div class="col-md-4">
                <input id="password" placeholder="برجاء ادخال كلمه المرور " class="form-control" type="password"
                       value="">
            </div>
        </div>

        <div class="col-md-12" style="padding: 10px;">
            <div class="form-group float-e-margins">

                <label class="font-normal col-md-2"><h4>الفرع</h4></label>
                <div class="col-md-4">
                    <select id="branch_id" class="form-control chosen-select" >
                        <option value="">اختر الفرع</option>
                        <option value="branch_id">فرع 1</option>
                        <option value="branch_id">فرع 2</option>
                        <option value="branch_id">فرع 3</option>
                        <option value="branch_id">فرع 4</option>
                        <option value="branch_id">فرع 5</option>
                        <option value="branch_id">فرع 6</option>
                        <option value="branch_id">فرع 7</option>
                        <option value="branch_id">فرع 8</option>
                    </select>
                </div>


            </div>
        </div>
        <div class="col-md-12 " style="padding: 10px;">
            <div class=" form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الصلاحيه</h4></label>
                <div class="col-md-4">
                    <select id="permission" class="form-control chosen-select">
                        <option value="">حدد صلاحيه المستخدم</option>
                        <option value="container_id">مدير</option>
                        <option value="container_id">مدخل بيانات</option>
                    </select>
                </div>
            </div>
        </div>

        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
        </button>
    </div>

@stop

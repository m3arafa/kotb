@extends('main.main')
@section('address')
    <h1>تعريف مصروفات</h1>
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
            <label class="font-normal col-md-2"><h4>القيمه</h4></label>
            <div class="col-md-4">
                <input id="password" placeholder="برجاء ادخال كلمه المرور " class="form-control" type="text"
                       value="">
            </div>
        </div>


    <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
    </button>
    </div>
@stop




@extends('main.main')
@section('address')
    <h1> إضافه عميل</h1>


@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>إسم العميل</h4></label>
            <div class="col-md-4">
                <input id="user_name" placeholder="أدخل اسم المستخدم " class="form-control" type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2" for="client_number"><h4> رقم العميل</h4></label>
            <div class="col-md-4">
                <input id="client_number" name="client_number" placeholder="أدخل رقم العميل " class="form-control" type="tel"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>التليفون</h4></label>
            <div class="col-md-4">
                <input id="phone" placeholder="برجاء ادخال رقم التليفون " class="form-control fa-mobile-phone fa-phone-square" type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>العنوان</h4></label>
            <div class="col-md-4">
                <input id="address" placeholder="برجاء ادخال العنوان " class="form-control " type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>الحد الائتمانى</h4></label>
            <div class="col-md-4">
                <input id="insurance_limit" placeholder="الحد الائتمانى" class="form-control " type="text"
                       value="">
            </div>
        </div>

    <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
    </button>
    </div>
@stop
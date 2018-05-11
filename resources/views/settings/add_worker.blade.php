@extends('main.main')
@section('address')
    <h1> إضافه عامل</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>اسم العامل</h4></label>
            <div class="col-md-4">
                <input id="worker_name" placeholder="أدخل اسم المستخدم " class="form-control" type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>الوظيفه</h4></label>
            <div class="col-md-4">
                <select id="worker_role" class="form-control" class="chosen-select">
                    <option value="">حدد وظيفه العامل</option>
                    <option value="container_id">مشرف</option>
                    <option value="container_id">سائق</option>
                </select>
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>رقم الاقامه </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 float-e-margins form-group ">
            <label class="font-normal col-md-2"><h4>انتهاء الاقامه </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 float-e-margins form-group ">
            <label class="font-normal col-md-2"><h4>انتهاء الرخصه </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 float-e-margins form-group ">
            <label class="font-normal col-md-2"><h4>انتهاء التأمين الطبى </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 float-e-margins form-group ">
            <label class="font-normal col-md-2"><h4>انتهاء جواز السفر  </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>


        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
    </button>
    </div>
@stop

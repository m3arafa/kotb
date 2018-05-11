@extends('main.main')
@section('address')
    <h1> تسجيل مصروفات يوميه </h1>


@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4> المشرف / السائق </h4></label>
            <div class="col-md-4">
                <select id="supervisor" class="form-control" class="chosen-select">
                    <option value="">اختر </option>
                    <option value="container_id">مشرف 1</option>
                    <option value="container_id">مشرف 2</option>
                    <option value="container_id">مشرف 3</option>
                    <option value="container_id">مشرف 4</option>
                    <option value="container_id">مشرف 5</option>
                    <option value="container_id">مشرف 6</option>
                    <option value="container_id">مشرف 7</option>
                    <option value="container_id">مشرف 8</option>
                </select>
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>المصروف</h4></label>
            <div class="col-md-4">
                <select id="driver" class="form-control" class="chosen-select">
                    <option value="">اختر المصروف</option>
                    <option value="container_id">غداء </option>
                    <option value="container_id">نولون </option>
                    <option value="container_id">ميزان </option>
                </select>
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>التاريخ</h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
        </button>
    </div>


@stop


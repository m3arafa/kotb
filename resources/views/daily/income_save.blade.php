@extends('main.main')
@section('address')
    <h1> تسجيل إيرادات</h1>
@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">
        <div class=" col-md-12 form-group float-e-margins">

            <label class="font-normal col-md-2"><h4>المشرف /السائق</h4></label>
            <div class="col-md-4">
                <select id="supervisor" class="form-control" class="chosen-select">
                    <option value="">اختر مشرف/سائق</option>
                    <option value="container_id">سائق 1</option>
                    <option value="container_id">سائق 2</option>
                    <option value="container_id">سائق 3</option>
                    <option value="container_id">سائق 4</option>
                    <option value="container_id">مشرف 5</option>
                    <option value="container_id">مشرف 6</option>
                    <option value="container_id">مشرف 7</option>
                    <option value="container_id">مشرف 8</option>
                </select>
            </div>

            <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
            <div class="col-md-3">
                <input class="form-control" type="number" id="supervisor_commission" name="supervisor_commission">
            </div>


        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="money"><h4>المبلغ</h4></label>
            <div class="col-md-4">
                <input id="money" placeholder="برجاء ادخال المبلغ " class="form-control" type="text"
                       value="">
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="money"><h4>ملاحظات</h4></label>
            <div class="col-md-4">
                <input id="comment" placeholder="ملاحظات" class="form-control" type="text"
                       value="">
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

@stop

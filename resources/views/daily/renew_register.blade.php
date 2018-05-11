@extends('main.main')
@section('address')
    <h1> تسجيل تجديد حاويه</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>إختر الحاويه</h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select">
                    <option value="">Select</option>
                    <option value="container_id">حاويه 1</option>
                    <option value="container_id">حاويه 2</option>
                    <option value="container_id">حاويه 3</option>
                    <option value="container_id">حاويه 4</option>
                    <option value="container_id">حاويه 5</option>
                </select>
            </div>
            <span class="col-md-2" id="container_size"> container size</span>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>المده الاضافيه </h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6 form-inline">
                        <label class="font-normal col-md-2">حتى</label>
                        <div class="input-group date col-md-10">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="money"><h4>المبلغ</h4></label>
                <div class="col-md-4">
                    <input id="money" placeholder="برجاء ادخال المبلغ " class="form-control" type="text"
                           value="">
                </div>
            </div>
        </div>
        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ وطباعه
        </button>
    </div>
@stop
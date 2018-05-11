@extends('main.main')
@section('address')
    <h1> تسجيل تفريغ حاويه</h1>
@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">


        <div class=" col-md-12 form-group float-e-margins" id="contract">
            <label class="col-md-2" for="empty_id"><h4>رقم ايصال التفريغ </h4></label>
            <div class="col-md-4">
                <input id="empty_id" name="empty_id" placeholder="برجاء ادخال رقم ايصال التفريغ "
                       class=" form-control"
                       type="text" value="">
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>رقم  الحاويه</h4></label>
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
            <label class="font-normal col-md-2"><h4>السائق</h4></label>
            <div class="col-md-4">
                <select id="driver" class="form-control" class="chosen-select">
                    <option value="">اختر سائق</option>
                    <option value="container_id">سائق 1</option>
                    <option value="container_id">سائق 2</option>
                    <option value="container_id">سائق 3</option>
                    <option value="container_id">سائق 4</option>
                    <option value="container_id">سائق 5</option>
                    <option value="container_id">سائق 6</option>
                    <option value="container_id">سائق 7</option>
                </select>
            </div>
            <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
            <div class="col-md-3">
                <input class="form-control" type="number" id="supervisor_commission" name="supervisor_commission">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>تاريخ التفريغ </h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6 form-inline">
                        <div class="input-group date col-md-12">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="col-md-2 btn btn-block btn-success" style="" id="empty_print">حفط
        </button>
    </div>
@stop

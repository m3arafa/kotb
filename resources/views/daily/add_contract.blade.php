@extends('main.main')
@section('address')
    <h1> تسجيل تعاقد</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
            <div class="col-md-4">
                <input id="contract_number" name="bill_number" placeholder="برجاء ادخال رقم العقد "
                       class=" form-control"
                       type="text" value="">
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>العميل</h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select">
                    <option value="">Select</option>
                    <option value="container_id">نقدى</option>
                    <option value="container_id">عميل 1</option>
                    <option value="container_id">عميل 2</option>
                    <option value="container_id">عميل 3</option>
                    <option value="container_id">عميل 4</option>
                    <option value="container_id">عميل 5</option>
                </select>
            </div>
            <button class="col-md-2 btn btn-block btn-success" id="add_client"> إضافه عميل</button>
            <span> الحد الائتمانى للعميل :</span>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="location"><h4> الموقع</h4></label>
            <div class="col-md-4">
                <input id="location" name="location" placeholder="برجاء ادخال الموقع "
                       class=" form-control"
                       type="text" value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="container_number"><h4> عدد الرحلات</h4></label>
            <div class="col-md-4">
                <input id="container_number" name="container_number" placeholder="برجاء ادخال عدد الرحلات "
                       class=" form-control"
                       type="number" value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="container_number"><h4>مده الرحله </h4></label>
            <div class="col-md-4">
                <input id="container_number" name="container_number" placeholder="برجاء ادخال مده الرحله الواحده باليوم "
                       class=" form-control"
                       type="number" value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>فتره الايجار</h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="font-normal">من</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-normal">إلى</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input
                                        type="text" class="form-control picker" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="add_taxes"><h4> المبلغ </h4></label>
                <div class="col-md-4">
                    <span id="add_taxes" name="add_taxes" class="form-control" type="number" value="">


                    </span>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">

                <label class="col-md-2"><h4>طريقه الدفع</h4></label>
                <div class="col-md-5">
                    <label class="col-md-1" for="radio1">مقدم</label>
                    <div>
                        <input class="col-md-3" type="radio" name="radio1" id="radio1" value="0"
                               checked="checked">
                    </div>
                    <label class="col-md-1" for="radio2">اجل</label>
                    <div>
                        <input class="col-md-3" type="radio" name="radio1" id="radio2" value="1" checked="">
                    </div>
                </div>

            </div>

            {{--<div class=" col-md-12 form-group float-e-margins">--}}
            {{--<label class="col-md-2" for="add_fees"><h4>رسم الرحلات الاضافيه</h4></label>--}}
            {{--<div class="col-md-4">--}}
            {{--<input id="add_fees" name="add_fees" placeholder="برجاء ادخال المبلغ " class="form-control"--}}
            {{--type="number"--}}
            {{--value="">--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>
        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
        </button>
    </div>
@stop
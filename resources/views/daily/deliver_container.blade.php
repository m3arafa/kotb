@extends('main.main')
@section('address')
    <h1>تسليم حاويه</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">


        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="money"><h4>رقم العقد</h4></label>
            <div class="col-md-4">
                <input id="contract" name="contract" placeholder="برجاء ادخال رقم العقد " class="form-control" type="text"
                       value="">
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>اسم العميل</h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select" id="client" name="client">
                    <option value="">Select</option>
                    <option value="container_id">عميل 1</option>
                    <option value="container_id">عميل 2</option>
                    <option value="container_id">عميل 3</option>
                    <option value="container_id">عميل 4</option>
                    <option value="container_id">عميل 5</option>
                </select>
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>تاريخ التسليم </h4></label>
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

        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="money"><h4>الشاحنه</h4></label>
            <div class="col-md-4">
                <input id="truck" name="truck" placeholder="برجاء ادخال رقم الشاحنه " class="form-control" type="text"
                       value="">
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>الموظف</h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select" id="employee" name="employee">
                    <option value="">Select</option>
                    <option value="container_id">موظف 1</option>
                    <option value="container_id">موظف 2</option>
                    <option value="container_id">موظف 3</option>
                    <option value="container_id">موظف 4</option>
                    <option value="container_id">موظف 5</option>
                </select>
            </div>
        </div>

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
            <label class="col-md-2" for="money"><h4>المدينه</h4></label>
            <div class="col-md-4">
                <input id="city" name="city" placeholder="برجاء ادخال المدينه " class="form-control" type="text"
                       value="">
            </div>
        </div>

        <button class="col-md-2 btn btn-block btn-success" style="" id="save">حفظ
        </button>
    </div>

    </div>
@stop
@extends('main.main')
@section('address')
    <h1> إضافه حاويه</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
            <div class="col-md-4">
                <input id="user_name" placeholder="أدخل رقم الحاويه " class="form-control" type="text"
                       value="">
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2" for="container_size"><h4>مقاس الحاويه</h4></label>
            <div class="col-md-4">
                <select id="container_size" name="container_size" class="form-control" class="chosen-select">
                    <option value="">اختر مقاس الحاويه</option>
                    <option value="2">2 يارده</option>
                    <option value="4"> 4 يارده</option>
                    <option value="6">6 يارده</option>
                    <option value="12">12 يارده</option>
                    <option value="20">20 يارده</option>
                    <option value="30">30 يارده</option>
                </select>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <div class="col-md-2">
                <label for="branch"> اسم الفرع</label>
            </div>
            <div class="col-md-4">
                <select id="branch" class="form-control">
                    <option>فرع 1</option>
                    <option>فرع 1</option>
                    <option>فرع 2</option>
                    <option>فرع 3</option>
                    <option>فرع 4</option>
                    <option>فرع 5</option>
                </select>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
            </button>
        </div>
    </div>
@stop

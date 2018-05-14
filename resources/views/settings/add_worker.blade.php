@extends('main.main')
@section('address')
    <h1> إضافه عامل</h1>

@stop
@section('container')
    <form role="form" method="POST" action="{{ route('employee.store')}}">

        {!! csrf_field() !!}


        <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>اسم العامل</h4></label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="أدخل اسم العامل " class="form-control" type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الوظيفه</h4></label>
                <div class="col-md-4">
                    <select id="job" name="job" class="form-control" class="chosen-select">
                        <option value="">تحديد الوظيفة</option>
                        <option value="1">مشرف</option>
                        <option value="2">سائق</option>
                    </select>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم الاقامه </h4></label>
                <div class="col-md-4">
                    <input type="number" id="residency_number" name="residency_number" class="form-control">
                </div>
            </div>
            <div class="col-md-12 float-e-margins form-group ">
                <label class="font-normal col-md-2"><h4>تاريخ انتهاء الاقامه </h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" id="residency_end_date" name="residency_end_date">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 float-e-margins form-group ">
                <label class="font-normal col-md-2"><h4>تاريخ انتهاء الرخصه </h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" id="license_end_date" name="license_end_date">
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
                            <input type="date" class="form-control" id="medical_insurance_end_date"
                                   name="medical_insurance_end_date">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 float-e-margins form-group ">
                <label class="font-normal col-md-2"><h4>انتهاء جواز السفر </h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" id="passport_end_date" name="passport_end_date">
                        </div>
                    </div>
                </div>

            </div>


            <button class="col-md-2 btn btn-block btn-success" style="" type="submit">حفظ</button>
        </div>

    </form>
    <div class="col-lg-10">

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>

        @endif
        @if(session()->has('success'))

            <p class="alert alert-success">{{ session('success') }}</p>

        @endif

        @if(session()->has('error'))
            <p class="alert alert-danger">{{ session('error') }}</p>

        @endif
    </div>
@stop

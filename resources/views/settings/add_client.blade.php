@extends('main.main')
@section('address')
    <h1> إضافه عميل</h1>


@stop
@section('container')

    <form role="form" method="POST" action="{{route('client.store')}}">

        {!! csrf_field() !!}

        <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>إسم العميل</h4></label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="أدخل اسم العميل " class="form-control" type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2" for="client_number"><h4> رقم العميل</h4></label>
                <div class="col-md-4">
                    <input id="number" name="number" placeholder="أدخل رقم العميل " class="form-control"
                           type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>التليفون</h4></label>
                <div class="col-md-4">
                    <input id="phone" name="phone" placeholder="برجاء ادخال رقم التليفون "
                           class="form-control fa-mobile-phone fa-phone-square" type="number"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>العنوان</h4></label>
                <div class="col-md-4">
                    <input id="address" name="address" placeholder="برجاء ادخال العنوان " class="form-control "
                           type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الحد الائتمانى</h4></label>
                <div class="col-md-4">
                    <input id="credit_limit" name="credit_limit" placeholder="الحد الائتمانى" class="form-control "
                           type="number"
                           value="">
                </div>
            </div>

            <button class="col-md-2 btn btn-block btn-success" style="" type="submit">حفظ</button>
        </div>
    </form>

    <div class="col-lg-8">
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

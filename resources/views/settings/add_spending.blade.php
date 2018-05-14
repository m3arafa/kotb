@extends('main.main')
@section('address')
    <h1>تعريف مصروفات يوميه</h1>
@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">
        <form role="form" method="POST" action="{{route('spending.store')}}">
            {{ csrf_field() }}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الاسم</h4></label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="أدخل اسم المصروف " class="form-control" type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>القيمه</h4></label>
                <div class="col-md-4">
                    <input id="value" name="value" placeholder="برجاء ادخال قيمة المصروف " class="form-control"
                           type="number">
                </div>
            </div>


            <button class="col-md-2 btn btn-block btn-success" type="submit" style="" id="save_print">حفظ
            </button>
        </form>
    </div>

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




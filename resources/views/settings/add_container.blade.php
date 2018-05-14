@extends('main.main')
@section('address')
    <h1> إضافه حاويه</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('container.store')}}">
            {{ csrf_field() }}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
                <div class="col-md-4">
                    <input id="number" name="number" placeholder="أدخل رقم الحاويه " class="form-control" type="number"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2" for="container_size"><h4>مقاس الحاويه</h4></label>
                <div class="col-md-4">
                    <select id="size" name="size" class="form-control" class="chosen-select">
                        <option value="">برجاء إختيار مقاس الحاوية</option>
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
                    <select id="branch_id" name="branch_id" class="form-control">
                        <option value="">اختر اسم الفرع</option>
                        @if($branches)
                            @foreach($branches as $branch)
                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
                </button>
            </div>
        </form>
    </div>

    <div class="col-lg-6">
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

@extends('main.main')
@section('address')
    <h1>إضافه فرع</h1>
@stop
@section('container')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('success'))

        <p class="alert alert-success">{{ session('success') }}</p>

    @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{ session('error') }}</p>

    @endif


    <div class="row">
        <div class="col-lg-12">



            <form method="post" enctype="multipart/form-data" action="{{ route('branch.update') }}">

                {{ csrf_field() }}

                <input type="hidden" name="branch_id" value="{{ $branch->id }}">

                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>إسم الفرع</h4></label>
                    <div class="col-md-6">
                        <input id="branch_name" placeholder="أدخل اسم الفرع " class="form-control" type="text"
                               name="branch_name" value="{{$branch->name}}">
                    </div>
                </div>
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>عنوان الفرع</h4></label>
                    <div class="col-md-6">
                        <input id="address"  name="address" placeholder="العنوان" class="form-control" type="text"
                               value="{{$branch->address}}">
                    </div>
                </div>

                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>الشعار</h4></label>

                    <div class="fileinput fileinput-new col-md-4" data-provides="fileinput">
                                <span class="btn btn-default btn-file"><span
                                            class="fileinput-new">اختر الشعار</span><span
                                            class="fileinput-exists"> للتغيير</span>
                                    <input type="file" name="logo" class="form-control"></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput"
                           style="float: none">&times;</a>
                    </div>

                </div>


                <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
                </button>
            </form>
        </div>
    </div>
@stop



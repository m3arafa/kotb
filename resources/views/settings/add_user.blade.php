@extends('main.main')
@section('address')
    <h1> إضافه مستخدم</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('user.store')}}">
            {{ csrf_field() }}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الاسم</h4></label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="أدخل الاسم " class="form-control" type="text"
                           value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>اسم المستخدم</h4></label>
                <div class="col-md-4">
                    <input id="username" name="username" placeholder="أدخل اسم المستخدم بدون فواصل "
                           class="form-control" type="text"
                           value="">
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>كلمه المرور</h4></label>
                <div class="col-md-4">
                    <input id="password" name="password" placeholder="برجاء ادخال كلمه المرور " class="form-control"
                           type="password"
                           value="">
                </div>
            </div>

            <div class="col-md-12" style="padding: 10px;">
                <div class="form-group float-e-margins">

                    <label class="font-normal col-md-2"><h4>الفرع</h4></label>
                    <div class="col-md-4">
                        <select id="branch_id" name="branch_id" class="form-control chosen-select">
                            <option value="">اختر الفرع</option>

                            @foreach($branches as $branch)

                            <option value="{{$branch->id}}">{{$branch->name}}</option>

                            @endforeach

                        </select>
                    </div>


                </div>
            </div>
            <div class="col-md-12 " style="padding: 10px;">
                <div class=" form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>الصلاحيه</h4></label>
                    <div class="col-md-4">
                        <select id="role" name="role" class="form-control chosen-select">
                            <option value="">حدد صلاحيه المستخدم</option>
                            <option value="1">مدير</option>
                            <option value="2">مدخل بيانات</option>
                        </select>
                    </div>
                </div>
            </div>

            <button class="col-md-2 btn btn-block btn-success" type="submit" style="" id="save_print">حفظ
            </button>
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

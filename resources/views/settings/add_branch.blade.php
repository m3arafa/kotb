@extends('main.main')
@section('address')
    <h1>إضافه فرع</h1>
@stop
@section('container')


    <div class="row">
        <div class="col-lg-12 ibox float-e-margins ibox-content text-center p-md">

            <form  role="form" method="post" enctype="multipart/form-data" action="{{ route('branches.store')  }}">

                {{ csrf_field() }}
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>إسم الفرع</h4></label>
                    <div class="col-md-6">
                        <input id="name" placeholder="أدخل اسم الفرع " class="form-control" type="text"
                               name="name">
                    </div>
                </div>
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>العنوان </h4></label>
                    <div class="col-md-6">
                        <input id="address"  name="address" placeholder="العنوان" class="form-control" type="text"
                               value="">
                    </div>
                </div>

                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>الشعار</h4></label>

                    <div class="fileinput fileinput-new col-md-4" data-provides="fileinput">
                                <span class="btn btn-default btn-file"><span
                                            class="fileinput-new">اختر الشعار</span><span
                                            class="fileinput-exists">تغيير</span>
                                    <input type="file" name="logo" id="logo"  class="form-control"></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput"
                           style="float: none">&times;</a>
                    </div>


                </div>


                <button class="col-md-2 btn btn-block btn-success" type="submit" style="" id="save_print">حفظ
                </button>
            </form>

        </div>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
            </div>

        @endif

    </div>

    <hr>

    <div class="row">
        <div class="col-lg-12 ibox ibox-content ">


            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th><h3>Name</h3></th>
                    <th><h3>Address</h3></th>
                    <th><h3>Image</h3></th>
                    <th><h3>Show </h3></th>
                    <th><h3>Delete</h3></th>
                </thead>


                <tbody>

                <tr>
                    <td>اسم الفرع </td>
                    <td>عنوان الفرع</td>
                    <td>
                        <img class="img-responsive" width="80" src="{{ url('public/img/logo.png') }}">
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">تعديل</a>
                    </td>
                    <td>

                        <form method="post" action="{{ route('branch.delete') }}">

                            <input type="hidden" name="b_id" value="">

                            <button type="submit" class="btn btn-warning">حذف</button>

                        </form>

                        {{--<a href="{{ route('branch.delete', [$branch->id]) }}" class="btn btn-delete">delete</a>--}}
                    </td>
                </tr>


                </tbody>
            </table>


        </div>
    </div>
@stop



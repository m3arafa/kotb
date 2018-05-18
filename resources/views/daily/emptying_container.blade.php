@extends('main.main')
@section('address')
    <h1> تسجيل تفريغ حاويه</h1>
@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" action="{{route('container_transaction.store')}}">
            {{csrf_field()}}

            <div class=" col-md-12 form-group float-e-margins" id="contract">
                <label class="col-md-2" for="empty_id"><h4>رقم ايصال التفريغ </h4></label>
                <div class="col-md-4">
                    <input id="bill_number" name="bill_number" placeholder="برجاء ادخال رقم ايصال التفريغ "
                           class=" form-control"
                           type="number" required
                           oninvalid="this.setCustomValidity('برجاء إدخال رقم إيصال التفريغ')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
                <div class="col-md-4">
                    <select class="form-control" class="chosen-select" name="container_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار رقم الحاوية')" oninput="setCustomValidity('')">
                        <option value="">اختر رقم الحاوية</option>

                        @if($containers)
                            @foreach($containers as $container)
                                @if($container->is_empty == 0)
                                    <option value="{{$container->id}}"> {{$container->number}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                </div>
                {{--<span class="col-md-2" id="container_size"> container size</span>--}}
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>السائق</h4></label>
                <div class="col-md-4">
                    <select id="employee_id" name="employee_id" class="form-control" class="chosen-select" required
                            oninvalid="this.setCustomValidity('برجاء إختيار السائق')" oninput="setCustomValidity('')">
                        <option value="">اختر سائق</option>

                        @if($employees)
                            @foreach($employees as $employee)
                                @if($employee->job == 2)
                                    <option value="{{$employee->id}}"> {{$employee->name}}</option>
                                @endif
                            @endforeach
                        @endif

                    </select>
                </div>
                <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
                <div class="col-md-3">
                    <input class="form-control" type="number" id="employee_commission" name="employee_commission" required
                           oninvalid="this.setCustomValidity('برجاء تحديد عمولة السائق')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>تاريخ التفريغ </h4></label>
                <div class="col-md-8">
                    <div class="form-group row">
                        <div class="col-md-6 form-inline">
                            <div class="input-group date col-md-12">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" name="transaction_date" class="form-control picker" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="col-md-2 btn btn-block btn-success" style="" type="submit" id="empty_print">حفط
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
@stop

@extends('main.main')
@section('address')
    <h1> تسجيل مصروفات يوميه </h1>


@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" action="{{route('spendingTransaction.store')}}">
            {{csrf_field()}}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4> المشرف / السائق </h4></label>
                <div class="col-md-4">
                    <select id="employee_id" name="employee_id" class="form-control chosen-select" required
                            oninvalid="this.setCustomValidity('برجاء تحديد المشرف / السائق')"
                            oninput="setCustomValidity('')">
                        <option value="">اختر</option>

                        @if($employees)
                            @foreach($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>المصروف</h4></label>
                <div class="col-md-4">
                    <select id="spending_id" name="spending_id" class="form-control chosen-select" required
                            oninvalid="this.setCustomValidity('برجاء تحديد المصروف')"
                            oninput="setCustomValidity('')">
                        <option value="">اختر المصروف</option>

                        @if($spending)
                            @foreach($spending as $spend)
                                <option value="{{$spend->id}}">{{$spend->name}}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>التاريخ</h4></label>
                <div class="col-md-8">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control picker" name="transaction_date">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
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


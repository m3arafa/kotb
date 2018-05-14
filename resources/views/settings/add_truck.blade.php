@extends('main.main')
@section('address')
    <h1> إضافة شاحنه</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" action="{{route('truck.store')}}">
            {{ csrf_field() }}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم السيارة </h4></label>
                <div class="col-md-4">
                    <input id="number" name="number" placeholder="أدخل رقم الحاويه " class="form-control" type="text"
                           value="">
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>السائق</h4></label>
                <div class="col-md-4">
                    <select id="driver" class="form-control" class="chosen-select" name="employee_id">
                        <option value="">اختر سائق</option>

                        @if($employees)
                            @foreach($employees as $employee)
                                @if($employee->job == 2)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>تبديل القماشات</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" name="kamashat_change_date" class="form-control">
                        </div>
                    </div>


                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>غيار الزيت </h4></label>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <input name="oil_change_from" placeholder="من" class="form-control" type="number">
                    </div>
                    <div class="col-md-5">
                        <input name="oil_change_to" placeholder="الى " class="form-control" type="number">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-4" for="current_kilometer"> القراءه الحاليه</label>
                    <div class="col-md-8">
                        <input id="read_now" name="read_now" class="form-control"
                               placeholder="القراءه الحاليه" type="number">
                    </div>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>تغيير البطاريه </h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="battery_change_date">
                        </div>
                    </div>
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>غطاس الهواء</h4></label>
                <div class="col-md-8">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="font-normal">من</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control" name="ghatas_air_from_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-normal">إلى</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input
                                            type="date" class="form-control" name="ghatas_air_to_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 float-e-margins form-group ">
                <label class="font-normal col-md-2"><h4>تغيير الكفرات </h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="cover_change_date">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 float-e-margins form-group">
                <label class="font-normal col-md-2"><h4>فلتر الهواء</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="air_condition_change_date">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-12 float-e-margins form-group">
                <label class="font-normal col-md-2"><h4>انتهاء الاستمارة</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="end_deal_paper_date">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-12 float-e-margins form-group">
                <label class="font-normal col-md-2"><h4> انتهاء التامين</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="end_insurance_date">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-12 float-e-margins form-group">
                <label class="font-normal col-md-2"><h4> انتهاء كارت التشغيل</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" name="end_work_card_date">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 float-e-margins form-group">
                <label class="font-normal col-md-2"><h4> ملاحظات اخرى</h4></label>
                <div class="col-md-8">
                    <div class="col-md-6 group">
                        <input type="text" class="form-control" name="notes">
                    </div>
                </div>

            </div>


            <div class=" col-md-12 form-group float-e-margins">
                <button class="col-md-2 btn btn-block btn-success" type="submit" style="" id="save_print">حفظ
                </button>
            </div>
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

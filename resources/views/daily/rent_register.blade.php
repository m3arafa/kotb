@extends('main.main')
@section('address')
    <h1> تسجيل ايجار حاويه</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>إختر نوع الايجار</h4></label>
            <div class="col-md-4">
                <select class="form-control chosen-se" value="" id="rent_type">
                    <option value="1" selected="selected">عقد</option>
                    <option value="2">نقدى</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        {{--form contract--}}

        <form id="form-contract" role="form" method="POST" action="{{route('rentContract.store')}}">
            {{csrf_field()}}

            <div class=" col-md-12 form-group float-e-margins" id="contract_client_name">
                <label class="font-normal col-md-2"><h4>العميل</h4></label>
                <div class="col-md-4">
                    <select id="client_id" class="form-control chosen-select" name="client_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار العميل')" oninput="setCustomValidity('')">
                        <option value="">اختر العميل</option>

                        @if($clients)
                            @foreach($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
                <a href="AddClient">
                    <button class="col-md-2 btn btn-block btn-success" type="button" id="add_client"> إضافه عميل
                    </button>
                </a>

                <div id="credit_limit"></div>
            </div>
            <div class=" col-md-12 form-group float-e-margins" id="client_contract_number">
                <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
                <div class="col-md-4">
                    <select class="form-control chosen-select" name="contract_id" id="contract_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار رقم العقد الخاص بالعميل')"
                            oninput="setCustomValidity('')">
                        <option value=""> اختر رقم التعاقد الخاص بالعميل</option>
                        {{--@if($contracts)--}}
                        {{--@foreach($contracts as $contract)--}}
                        {{--<option value="{{$contract->id}}">{{$contract->number}}</option>--}}
                        {{--@endforeach--}}
                        {{--@endif--}}
                    </select>
                </div>
                <div id="trip_days" name="trip_days"></div>

            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="rent_place"><h4>رقم الفاتوره</h4></label>
                <div class="col-md-4">
                    <input id="bill_number" name="bill_number" placeholder="برجاء ادخال رقم الفاتوره "
                           class=" form-control"
                           type="number" value="" required
                           oninvalid="this.setCustomValidity('برجاء إدخال رقم الفاتورة')"
                           oninput="setCustomValidity('')">
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2" for="container_size"><h4>مقاس الحاويه</h4></label>
                <div class="col-md-4">
                    <select class="form-control" name="container_size" id="container_size" required
                            oninvalid="this.setCustomValidity('برجاء إختيار مقاس الحاوية')"
                            oninput="setCustomValidity('')">
                        <option value="">اختر مقاس الحاوية</option>
                        <option value="2">2 يارده</option>
                        <option value="4">4 يارده</option>
                        <option value="6">6 يارده</option>
                        <option value="12">12 يارده</option>
                        <option value="20">20 يارده</option>
                        <option value="30">30 يارده</option>
                    </select>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>فتره الايجار</h4></label>
                <div class="col-md-8">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="font-normal">من</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control picker" name="from_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-normal">إلى</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control picker-plus-3" name="to_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
                <div class="col-md-4">
                    <select class="form-control" class="chosen-select" name="container_id" id="container_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار رقم الحاوية')"
                            oninput="setCustomValidity('')">
                        <option value="">اختر رقم الحاوية</option>

                        {{--@if($containers)--}}
                        {{--@foreach($containers as $container)--}}
                        {{--<option value="{{$container->id}}">{{$container->number}}</option>--}}
                        {{--@endforeach--}}
                        {{--@endif--}}
                    </select>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">

                <div class=" col-md-12 form-group float-e-margins">
                    <label class="col-md-2" for="rent_place"><h4>العنوان</h4></label>
                    <div class="col-md-4">
                        <input id="address" name="address" placeholder="برجاء ادخال عنوان الإيجار "
                               class=" form-control"
                               type="text" value="" required
                               oninvalid="this.setCustomValidity('عنوان الإيجار مطلوب')"
                               oninput="setCustomValidity('')">
                    </div>
                </div>


                <div class=" col-md-12 form-group float-e-margins">

                    <label class="font-normal col-md-2"><h4>المشرف</h4></label>
                    <div class="col-md-4">
                        <select id="supervisor" class="form-control" class="chosen-select" name="supervisor_id" required
                                oninvalid="this.setCustomValidity('برجاء تحديد المشرف')"
                                oninput="setCustomValidity('')">
                            <option value="">اختر مشرف</option>
                            @if($employees)
                                @foreach($employees as $employee)
                                    @if($employee->job == 1)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endif
                                @endforeach
                            @endif

                        </select>
                    </div>

                    <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" min="0" id="supervisor_commission"
                               name="supervisor_commission" required
                               oninvalid="this.setCustomValidity('برجاء تحديد عمولة المشرف')"
                               oninput="setCustomValidity('')">
                    </div>


                </div>
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>السائق</h4></label>
                    <div class="col-md-4">
                        <select id="driver_id" class="form-control" class="chosen-select" name="driver_id" required
                                oninvalid="this.setCustomValidity('برجاء إختيار السائق')"
                                oninput="setCustomValidity('')">
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


                    <label class="font-normal col-md-2" for="driver_commission"><h4>العموله</h4></label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" min="0" id="driver_commission"
                               name="driver_commission" required
                               oninvalid="this.setCustomValidity('برجاء تحديد عمولة السائق')"
                               oninput="setCustomValidity('')">
                    </div>
                </div>


                {{--<div class=" col-md-12 form-group float-e-margins">--}}
                {{--<label class="font-normal col-md-2"><h4>تحديد الموقع :</h4></label>--}}
                {{--<div class="col-md-4">--}}
                {{--<img src={{url("public/img/google.png")}}>--}}
                {{--</div>--}}
                {{--</div>--}}


            </div>
            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
            </button>
        </form>


        {{--form cash--}}
        <form id="form-cash" role="form" method="POST" class="hidden" action="{{route('rentCash.store')}}">
            {{csrf_field()}}


            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="rent_place"><h4>رقم الفاتوره</h4></label>
                <div class="col-md-4">
                    <input id="bill_number" name="bill_number" placeholder="برجاء ادخال رقم الفاتوره "
                           class=" form-control"
                           type="number" required
                           oninvalid="this.setCustomValidity('برجاء إدخال رقم الفاتورة')"
                           oninput="setCustomValidity('')">
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2" for="container_size"><h4>مقاس الحاوية</h4></label>
                <div class="col-md-4">
                    <select class="form-control" id="container_size2" name="container_size" required
                            oninvalid="this.setCustomValidity('برجاء تحديد مقاس الحاوية')"
                            oninput="setCustomValidity('')">
                        <option value="">اختر مقاس الحاوية</option>
                        <option value="2">2 يارده</option>
                        <option value="4">4 يارده</option>
                        <option value="6">6 يارده</option>
                        <option value="12">12 يارده</option>
                        <option value="20">20 يارده</option>
                        <option value="30">30 يارده</option>
                    </select>
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>فتره الايجار</h4></label>
                <div class="col-md-8">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="font-normal">من</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control picker" value="" name="from_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-normal">إلى</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control picker-plus-3" value="" name="to_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
                <div class="col-md-4">
                    <select class="form-control" id="container_id2" class="chosen-select" name="container_id">
                        <option value="">اختر رقم الحاوية</option>

                        {{--@if($containers)--}}
                        {{--@foreach($containers as $container)--}}
                        {{--<option value="{{$container->id}}">{{$container->number}}</option>--}}
                        {{--@endforeach--}}
                        {{--@endif--}}
                    </select>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>العميل</h4></label>
                <div class="col-md-4">
                    <input type="text" class="form-control" value="" placeholder="برجاء ادخال اسم العميل"
                           name="client_name" required
                           oninvalid="this.setCustomValidity('اسم العميل مطلوب')" oninput="setCustomValidity('')">
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins" id="phone_show">
                <label class="col-md-2" for="client_phone"><h4>رقم التليفون</h4></label>
                <div class="col-md-4">
                    <input id="client_phone" name="client_phone" placeholder="برجاء ادخال رقم التليفون "
                           class=" form-control"
                           type="number" required
                           oninvalid="this.setCustomValidity('رقم تليفون العميل مطلوب')"
                           oninput="setCustomValidity('')">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="col-md-2" for="address"><h4>العنوان</h4></label>
                    <div class="col-md-4">
                        <input id="rent_place" name="address" placeholder="برجاء ادخال عنوان الإيجار "
                               class=" form-control"
                               type="text" required
                               oninvalid="this.setCustomValidity('برجاء إدخال العنوان')"
                               oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class=" col-md-12 form-group float-e-margins" id="money_amount">
                    <label class="col-md-2" for="cost"><h4>المبلغ</h4></label>
                    <div class="col-md-4">
                        <input id="cost" name="cost" placeholder="برجاء ادخال المبلغ " class="form-control"
                               type="number"
                               required
                               oninvalid="this.setCustomValidity('برجاء إدخال المبلغ')" oninput="setCustomValidity('')">
                    </div>
                </div>

                <div class=" col-md-12 form-group float-e-margins">

                    <label class="font-normal col-md-2"><h4>المشرف</h4></label>
                    <div class="col-md-4">
                        <select id="supervisor" class="form-control" class="chosen-select" name="supervisor_id" required
                                oninvalid="this.setCustomValidity('برجاء إختيار المشرف')"
                                oninput="setCustomValidity('')">
                            <option value="">اختر مشرف</option>
                            @if($employees)
                                @foreach($employees as $employee)
                                    @if($employee->job == 1)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" min="0" id="supervisor_commission"
                               name="supervisor_commission" required
                               oninvalid="this.setCustomValidity('برجاء تحديد عمولة المشرف')"
                               oninput="setCustomValidity('')">
                    </div>


                </div>
                <div class=" col-md-12 form-group float-e-margins">
                    <label class="font-normal col-md-2"><h4>السائق</h4></label>
                    <div class="col-md-4">
                        <select id="driver_id" name="driver_id" class="form-control" class="chosen-select" required
                                oninvalid="this.setCustomValidity('برجاء إختيار السائق')"
                                oninput="setCustomValidity('')">
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


                    <label class="font-normal col-md-2" for="driver_commission"><h4>العموله</h4></label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" min="0" id="driver_commission"
                               name="driver_commission" required
                               oninvalid="this.setCustomValidity('برجاء تحديد عمولة السائق')"
                               oninput="setCustomValidity('')">
                    </div>
                </div>


                {{--<div class=" col-md-12 form-group float-e-margins">--}}
                {{--<label class="font-normal col-md-2"><h4>تحديد الموقع :</h4></label>--}}
                {{--<div class="col-md-4">--}}
                {{--<img src={{url("public/img/google.png")}}>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>
            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print" type="submit">حفظ
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


@section('scripts')

    <script>
        /*
                $(document).ready(function () {
                    $('#by_cheque').click(function () {
                        $("#cheque").show();
                    });
                });

                $('input:radio[name="radio1"]').change(
                    function () {

                        // checks that the clicked radio button is the one of value 'Yes'
                        // the value of the element is the one that's checked (as noted by @shef in comments)
                        if ($(this).val() == '0') {

                            $('#cheque').addClass('hidden');
                            // appends the 'appended' element to the 'body' tag
                            // $(appended).appendTo('body');
                        }
                        else {
                            $('#cheque').removeClass('hidden');
                            // if it's the 'No' button removes the 'appended' element.
                            // $(appended).remove();
                        }
                    });

         */


        $(document).ready(function () {
            $('#rent_type').click(function () {
                var rent_type = $("#rent_type").val();
                if (rent_type == 2) {


                    $("#form-cash").removeClass('hidden');
                    $("#form-contract").addClass('hidden');


                    // $("#money_amount").removeClass('hidden');
                    // $("#payment_way").removeClass('hidden');
                    // $("#phone_show").removeClass('hidden');
                    // $("#client_contract_number").addClass('hidden');
                    // $("#contract_client_name").addClass('hidden');
                    // $("#client_show").removeClass('hidden');
                }
                if (rent_type == 1) {

                    $("#form-contract").removeClass('hidden');
                    $("#form-cash").addClass('hidden');

                    // $("#money_amount").addClass('hidden');
                    // $("#payment_way").addClass('hidden');
                    // $("#phone_show").addClass('hidden');
                    // $("#contract").removeClass('hidden');
                    // $("#client_show").addClass('hidden');
                    // $("#client_contract_number").removeClass('hidden');
                    // $("#contract_client_name").removeClass('hidden');
                }


            });
        });


        $(document).ready(function () {
            $('#client_id').on('change', function () {
                var client_id = $(this).val();

                var data = {'client_id': client_id, '_token': '{{ csrf_token() }}'};

                $.ajax({

                    url: '{{ route('ajax.get-client-contracts') }}',
                    type: 'post',
                    data: data,
                    success: function (response) {
                        $('#contract_id').empty().append(response.data);
                        $('#credit_limit').empty().append(response.credit_limit);
                    },
                    error: function (error) {
                        // console.log(error);
                    }
                });
            });
        });


        $(document).ready(function () {
            $('#contract_id,#client_id').on('change', function () {
                var contract_id = $(this).val();

                var data = {'contract_id': contract_id, '_token': '{{ csrf_token() }}'};

                $.ajax({

                    url: '{{ route('ajax.get-contract-trip_days') }}',
                    type: 'post',
                    data: data,
                    success: function (response) {
                        $('#trip_days').empty().append(response.trip_days);
                    },
                    error: function (error) {
                        // console.log(error);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#container_size').on('change', function () {

                var container_size = $(this).val();

                var data = {'container_size': container_size, '_token': '{{csrf_token()}}'};

                $.ajax({

                    url: '{{route('ajax.get-containers-numbers')}}',
                    type: 'post',
                    data: data,

                    success: function (response) {
                        $('#container_id').empty().append(response.data);
                    },
                    error: function (error) {

                    }
                });
            });
        });
        $(document).ready(function () {
            $('#container_size2').on('change', function () {

                var container_size = $(this).val();

                var data = {'container_size': container_size, '_token': '{{csrf_token()}}'};

                $.ajax({

                    url: '{{route('ajax.get-containers-numbers')}}',
                    type: 'post',
                    data: data,

                    success: function (response) {
                        $('#container_id2').empty().append(response.data);
                    },
                    error: function (error) {

                    }
                });
            });
        });

    </script>
@stop
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



        <div class=" col-md-12 form-group float-e-margins" id="contract_client_name">
            <label class="font-normal col-md-2"><h4>العميل</h4></label>
            <div class="col-md-4">
                <select class="form-control chosen-select" >
                    <option value="">Select</option>
                    <option value="container_id">نقدى</option>
                    <option value="container_id">عميل 1</option>
                    <option value="container_id">عميل 2</option>
                    <option value="container_id">عميل 3</option>
                    <option value="container_id">عميل 4</option>
                    <option value="container_id">عميل 5</option>
                </select>
            </div>
            <button class="col-md-2 btn btn-block btn-success" id="add_client"> إضافه عميل</button>
            <span> الحد الائتمانى للعميل :</span>
        </div>
        <div class=" col-md-12 form-group float-e-margins" id="client_contract_number">
            <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
            <div class="col-md-4">
                <select class="form-control chosen-select">
                    <option value="0"> اختر رقم التعاقد الخاص بالعميل</option>
                    <option value="contract_id">502</option>
                    <option value="contract_id">503</option>
                    <option value="contract_id">504</option>
                    <option value="contract_id">505</option>
                    <option value="contract_id">506</option>
                    <option value="contract_id">507</option>
                    <option value="contract_id">508</option>
                    <option value="contract_id">509</option>
                </select>
            </div>
            <sapn class=id="client_name" name="client_name">مده الرحله ستظهر هنا اوتوماتيكيا
            </sapn>

        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="rent_place"><h4>رقم الفاتوره</h4></label>
            <div class="col-md-4">
                <input id="bill_number" name="bill_number" placeholder="برجاء ادخال رقم الفاتوره " class=" form-control"
                       type="text" value="">
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2" for="container_size"><h4>مقاس الحاويه</h4></label>
            <div class="col-md-4">
                <select class="form-control" name="container_size">
                    <option value="">Select</option>
                    <option value="container_id">2 يارده</option>
                    <option value="container_id">4 يارده</option>
                    <option value="container_id">6 يارده</option>
                    <option value="container_id">12 يارده</option>
                    <option value="container_id">20 يارده</option>
                    <option value="container_id">30 يارده</option>
                </select>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>رقم الحاويه</h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select">
                    <option value="">Select</option>
                    <option value="container_id">حاويه 1</option>
                    <option value="container_id">حاويه 2</option>
                    <option value="container_id">حاويه 3</option>
                    <option value="container_id">حاويه 4</option>
                    <option value="container_id">حاويه 5</option>
                </select>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins hidden" id="client_show">
            <label class="font-normal col-md-2"><h4>العميل</h4></label>
            <div class="col-md-4">
                <input type="text" class="form-control" value="" placeholder="برجاء ادخال اسم العميل">
            </div>
            {{--<button class="col-md-2 btn btn-block btn-success" id="add_client"> إضافه عميل</button>--}}
        </div>


        <div class=" col-md-12 form-group float-e-margins hidden" id="phone_show">
            <label class="col-md-2" for="phone_number"><h4>رقم التليفون</h4></label>
            <div class="col-md-4">
                <input id="phone_number" name="phone_number" placeholder="برجاء ادخال رقم التليفون "
                       class=" form-control"
                       type="tel" value="">
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
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-normal">إلى</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input
                                        type="text" class="form-control picker" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="rent_place"><h4>العنوان</h4></label>
                <div class="col-md-4">
                    <input id="rent_place" name="rent_place" placeholder="برجاء ادخال عنوان الإيجار "
                           class=" form-control"
                           type="text" value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins hidden" id="money_amount">
                <label class="col-md-2" for="money"><h4>المبلغ</h4></label>
                <div class="col-md-4">
                    <input id="money" placeholder="برجاء ادخال المبلغ " class="form-control" type="text"
                           value="">
                </div>
            </div>
            {{--<div class=" col-md-12 form-group float-e-margins hidden" id="payment_way">--}}

            {{--<label class="col-md-2"><h4>طريقه الدفع</h4></label>--}}
            {{--<div class="col-md-5">--}}
            {{--<label class="col-md-1" for="radio1">نقدى</label>--}}
            {{--<div>--}}
            {{--<input class="col-md-3" type="radio" name="radio1" id="radio1" value="0"--}}
            {{--checked="checked">--}}
            {{--</div>--}}
            {{--<label class="col-md-1" for="radio2">اجل</label>--}}
            {{--<div>--}}
            {{--<input class="col-md-3" type="radio" name="radio1" id="radio2" value="1" checked="">--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--</div>--}}
            <div class=" col-md-12 form-group float-e-margins">

                <label class="font-normal col-md-2"><h4>المشرف</h4></label>
                <div class="col-md-4">
                    <select id="supervisor" class="form-control" class="chosen-select">
                        <option value="">اختر مشرف</option>
                        <option value="container_id">مشرف 1</option>
                        <option value="container_id">مشرف 2</option>
                        <option value="container_id">مشرف 3</option>
                        <option value="container_id">مشرف 4</option>
                        <option value="container_id">مشرف 5</option>
                        <option value="container_id">مشرف 6</option>
                        <option value="container_id">مشرف 7</option>
                        <option value="container_id">مشرف 8</option>
                    </select>
                </div>

                <label class="font-normal col-md-2" for="supervisor_commission"><h4>العموله</h4></label>
                <div class="col-md-3">
                    <input class="form-control" type="number" min="0" id="supervisor_commission"
                           name="supervisor_commission">
                </div>


            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>السائق</h4></label>
                <div class="col-md-4">
                    <select id="driver" class="form-control" class="chosen-select">
                        <option value="">اختر سائق</option>
                        <option value="container_id">سائق 1</option>
                        <option value="container_id">سائق 2</option>
                        <option value="container_id">سائق 3</option>
                        <option value="container_id">سائق 4</option>
                        <option value="container_id">سائق 5</option>
                        <option value="container_id">سائق 6</option>
                        <option value="container_id">سائق 7</option>
                    </select>
                </div>


                <label class="font-normal col-md-2" for="driver_commission"><h4>العموله</h4></label>
                <div class="col-md-3">
                    <input class="form-control" type="number" min="0" id="driver_commission" name="driver_commission">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>تحديد الموقع :</h4></label>
                <div class="col-md-4">
                    <img src={{url("public/img/google.png")}}>
                </div>
            </div>
        </div>
        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
        </button>
    </div>
@stop


@section('scripts')

    <script>

        $(document).ready(function () {
            $('#by_cheque').click(function () {
                $("#cheque").show();
            });
        });
        //
        // $(document).on('check', '.radio', function(){
        //     alert($(this).val());
        // });

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


        $(document).ready(function () {
            $('#rent_type').click(function () {
                var rent_type = $("#rent_type").val();
                if (rent_type == 2) {
                    $("#money_amount").removeClass('hidden');
                    $("#payment_way").removeClass('hidden');
                    $("#phone_show").removeClass('hidden');
                    $("#client_contract_number").addClass('hidden');
                    $("#contract_client_name").addClass('hidden');
                    $("#client_show").removeClass('hidden');
                }
                if (rent_type == 1) {
                    $("#money_amount").addClass('hidden');
                    $("#payment_way").addClass('hidden');
                    $("#phone_show").addClass('hidden');
                    $("#contract").removeClass('hidden');
                    $("#client_show").addClass('hidden');
                    $("#client_contract_number").removeClass('hidden');
                    $("#contract_client_name").removeClass('hidden');
                }


            });
        });


    </script>
@stop
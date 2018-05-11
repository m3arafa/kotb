@extends('main.main')
@section('address')
    <h1> تسجيل سداد عميل</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>تاريخ السداد</h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control picker" value="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>إسم العميل </h4></label>
            <div class="col-md-4">
                <select class="form-control" class="chosen-select">
                    <option value="">Select</option>
                    <option value="container_id">اختر عميل</option>
                    <option value="container_id">عميل 1</option>
                    <option value="container_id">عميل 2</option>
                    <option value="container_id">عميل 3</option>
                    <option value="container_id">عميل 4</option>
                    <option value="container_id">عميل 5</option>
                </select>
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="money"><h4>المبلغ</h4></label>
            <div class="col-md-4">
                <input id="money" placeholder="برجاء ادخال المبلغ " class="form-control" type="text"
                       value="">
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">

            <label class="col-md-2"><h4>طريقه الدفع</h4></label>
            <div class="col-md-5">
                <label class="col-md-1" for="cash">نقدى</label>
                <div>
                    <input class="col-md-3 radio" type="radio" name="radio1" id="cash" value="0" checked="checked">
                </div>
                <label class="col-md-1" for="by_cheque ">شيك</label>
                <div>
                    <input class="col-md-3 radio" type="radio" name="radio1" id="by_cheque" value="1" >
                </div>
            </div>

        </div>
        <div  id="cheque" class=" col-md-12 form-group float-e-margins hidden" >
            <label class="col-md-2" for="cheque_number">
                <h4>رقم الشيك</h4>
            </label>
            <div class="col-md-4">
                <input id="cheque_number" name="cheque_number" placeholder="برجاء ادخال المبلغ " class="form-control"
                       type="text" value="" >
            </div>
        </div>
        <div class=" col-md-12 form-group float-e-margins">
            <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
            <div class="col-md-4">
                <input id="contract_number" name="contract_number" placeholder="برجاء ادخال عدد الرحلات "
                       class="form-control" type="number" value="">
            </div>
        </div>
        <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">طباعه إذن الاستلام</button>

    </div>




@stop

@section('scripts')

    <script>

        $(document).ready(function(){
            $('#by_cheque').click(function(){
                $("#cheque").show();
            });
        });
        //
        // $(document).on('check', '.radio', function(){
        //     alert($(this).val());
        // });

        $('input:radio[name="radio1"]').change(
            function(){

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


    </script>
    @stop
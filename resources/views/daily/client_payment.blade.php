@extends('main.main')
@section('address')
    <h1> تسجيل سداد عميل</h1>

@stop
@section('container')

    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">


        <form role="form" method="POST" action="{{route('client_payment_transaction.store')}}">
            {{csrf_field()}}
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>تاريخ السداد</h4></label>
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
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>إسم العميل </h4></label>
                <div class="col-md-4">
                    <select class="form-control" class="chosen-select" name="client_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار اسم العميل')"
                            oninput="setCustomValidity('')">

                        <option value="">اختر اسم العميل</option>

                        @if($clients)
                            @foreach($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins" id="client_contract_number">
                <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
                <div class="col-md-4">
                    <select class="form-control chosen-select" name="contract_id" required
                            oninvalid="this.setCustomValidity('برجاء إختيار رقم العقد الخاص بالعميل')"
                            oninput="setCustomValidity('')">
                        <option value=""> اختر رقم التعاقد الخاص بالعميل</option>

                        @if($contracts)
                            @foreach($contracts as $contract)
                                <option value="{{$contract->id}}">{{$contract->number}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="money"><h4>المبلغ</h4></label>
                <div class="col-md-4">
                    <input id="value" name="value" placeholder="برجاء ادخال المبلغ " class="form-control" type="number"
                           required
                           oninvalid="this.setCustomValidity('برجاء إدخال مبلغ السداد')"
                           oninput="setCustomValidity('')">
                </div>
            </div>


            <div class=" col-md-12 form-group float-e-margins">

                <label class="col-md-2"><h4>طريقه الدفع</h4></label>
                <div class="col-md-5">
                    <label class="col-md-1" for="cash">نقدى</label>
                    <div>
                        <input class="col-md-3 radio" type="radio" name="type_of_payment" id="cash" value="0"
                               checked="checked">
                    </div>
                    <label class="col-md-1" for="by_cheque ">شيك</label>
                    <div>
                        <input class="col-md-3 radio" type="radio" name="type_of_payment" id="by_cheque" value="1">
                    </div>
                </div>

            </div>
            <div id="cheque" class=" col-md-12 form-group float-e-margins hidden">
                <label class="col-md-2" for="cheque_number">
                    <h4>رقم الشيك</h4>
                </label>
                <div class="col-md-4">
                    <input id="cheque_number" name="cheque_number" placeholder="برجاء ادخال رقم الشيك "
                           class="form-control" type="number">
                </div>
            </div>


            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">طباعه إذن الاستلام</button>
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

        $(document).ready(function () {
            $('#by_cheque').click(function () {
                $("#cheque").show();
            });
        });
        //
        // $(document).on('check', '.radio', function(){
        //     alert($(this).val());
        // });

        $('input:radio[name="type_of_payment"]').change(
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


    </script>
@stop
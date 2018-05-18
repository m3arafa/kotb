@extends('main.main')
@section('address')
    <h1> تسجيل تعاقد</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <form role="form" method="POST" action="{{route('contract.store')}}">
            {{csrf_field()}}

            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="contract_number"><h4>رقم العقد</h4></label>
                <div class="col-md-4">
                    <input id="number" name="number" placeholder="برجاء ادخال رقم العقد "
                           class=" form-control"
                           type="text" value="">
                </div>
            </div>

            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>العميل</h4></label>
                <div class="col-md-4">
                    <select class="form-control" class="chosen-select" name="client_id" id="client_id">
                        <option value="">إختر العميل</option>
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
            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="address"><h4> الموقع</h4></label>
                <div class="col-md-4">
                    <input id="address" name="address" placeholder="برجاء ادخال الموقع "
                           class=" form-control"
                           type="text" value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="num_of_containers"><h4> عدد الرحلات</h4></label>
                <div class="col-md-4">
                    <input id="number_of_containers" name="number_of_containers" placeholder="برجاء ادخال عدد الرحلات "
                           class=" form-control"
                           type="number" value="">
                </div>
            </div>
            <div class=" col-md-12 form-group float-e-margins">
                <label class="col-md-2" for="trip_days"><h4>مده الرحله </h4></label>
                <div class="col-md-4">
                    <input id="trip_days" name="trip_days"
                           placeholder="برجاء ادخال مده الرحله الواحده باليوم "
                           class=" form-control"
                           type="number" value="">
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


                <div class=" col-md-12 form-group float-e-margins">
                    <label class="col-md-2" for="cost"><h4> المبلغ </h4></label>
                    <div class="col-md-4">
                        <input id="cost" name="cost" class="form-control" type="number">
                    </div>
                </div>
                <div class=" col-md-12 form-group float-e-margins">

                    <label class="col-md-2"><h4>طريقه الدفع</h4></label>
                    <div class="col-md-5">
                        <label class="col-md-1" for="radio1">مقدم</label>
                        <div>
                            <input class="col-md-3" type="radio" name="type_of_payment" id="radio1" value="1">
                        </div>
                        <label class="col-md-1" for="radio2">اجل</label>
                        <div>
                            <input class="col-md-3" type="radio" name="type_of_payment" id="radio2" value="2">
                        </div>
                    </div>

                </div>

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

        $(document).ready(function () {
            $('#client_id').on('change', function () {
                var client_id = $(this).val();

                var data = {'client_id': client_id, '_token': '{{ csrf_token() }}'};

                $.ajax({

                    url: '{{ route('ajax.get-client-contracts') }}',
                    type: 'post',
                    data: data,
                    success: function (response) {
                        $('#credit_limit').empty().append(response.credit_limit);
                    },
                    error: function (error) {
                        // console.log(error);
                    }
                });
            });
        });
    </script>
@stop
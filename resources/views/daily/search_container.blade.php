@extends('main.main')
@section('address')
    <h1>البحث عن حاويه</h1>
migrati
@stop

@section('container')
    <div class="ibox-title ibox-content">
        <div class="col-md-12" style="float: right;">
            <div class="col-md-4">
                <label for="container_name"> رقم الحاويه</label>
                <input type="text" id="container_name">
            </div>


              <div class="col-md-7">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="font-normal">من</label>
                            </div>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input id="from_date" type="text" class="form-control picker" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label class="font-normal">إلى</label>
                                </div>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input
                                            type="text" class="form-control picker" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <button id="search_container" class="btn btn-info">بحث</button>
        </div>
        <div>
            <div class="col-md-12 " style=" float: right;">
                <div class="col-md-6">
                    <label for="container_name"> رقم تليفون العميل </label>
                    <input type="text" id="container_name">
                </div>

            </div>
        </div>

    </div>
    <br>
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="table-bordered table-striped table-responsive table table-stripped "
                               data-page-size="15">
                            <thead>
                            <div>
                                <div class="col-md-2">
                                    <label> حاويه رقم 6589</label>

                                </div>
                                <div class="col-md-4">
                                    <span class="label label-primary">فارغه</span>

                                </div>
                            </div>
                            <tr>

                                <th data-toggle="true">مسلسل</th>
                                <th data-toggle="true">عمليه الايجار رقم</th>
                                <th data-hide="phone">إسم العميل</th>
                                <th data-hide="phone">إسم السائق</th>
                                <th data-hide="phone">من</th>
                                <th data-hide="all">إلى</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>ايجار حاويه رقم 1007</td>
                                <td>ايهاب جلال</td>
                                <td>عمار</td>
                                <td>1-5-2018</td>
                                <td>1-5-2018</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>ايجار حاويه رقم 1007</td>
                                <td>ايهاب جلال</td>
                                <td>سيف</td>
                                <td>1-5-2018</td>
                                <td>1-5-2018</td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

@stop

<script>


    $("#from_date").calendarsPicker();
</script>
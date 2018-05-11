@extends('main.main')
@section('address')
    <h1> كشف حساب عميل</h1>

@stop
@section('container')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row ibox-content ibox-title text-center p-md">
            <div class="ibox-title">
                <div class="col-md-12" style="float: right;">
                    <div class="col-md-2">
                        <label for="branch"> اسم العميل</label>
                    </div>
                    <div class="col-md-4">
                        <select id="branch" class="form-control">
                            <option>إسم العميل</option>
                            <option>عميل 1</option>
                            <option>عميل 2</option>
                            <option>عميل 3</option>
                            <option>عميل 4</option>
                            <option>عميل 5</option>
                            <option>عميل 6</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class=" col-md-12 form-group float-e-margins">
                            <label class="font-normal col-md-2"><h4>الفتره </h4></label>

                            <div class="col-md-5">
                                <input id="change_oil_from" placeholder="من" class="form-control picker" type="text"
                                       value="">
                            </div>
                            <div class="col-md-5">
                                <input id="change_oil to" placeholder="الى " class="form-control picker"  type="text"
                                       value="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="table-bordered table-striped table-responsive table table-stripped "
                               data-page-size="15">
                            <thead>
                            <tr>

                                <th data-toggle="true">مسلسل</th>
                                <th data-hide="phone">التاريخ</th>
                                <th data-hide="all">رقم ايصال التسليم</th>
                                <th data-hide="phone">رقم الحاويه</th>
                                <th data-hide="phone">قيمه الرحله</th>
                                <th data-hide="phone">السائق</th>
                                <th data-hide="phone">رقم العقد</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1-5-2018</td>
                                <td>23</td>
                                <td>5001</td>
                                <td>250</td>
                                <td>رفقات</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4-5-2018</td>
                                <td>27</td>
                                <td>5004</td>
                                <td>250</td>
                                <td>غمار</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>8-7-2018</td>
                                <td>65</td>
                                <td>5008</td>
                                <td>250</td>
                                <td>سيف</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1-5-2018</td>
                                <td>23</td>
                                <td>5001</td>
                                <td>250</td>
                                <td>رفقات</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4-5-2018</td>
                                <td>27</td>
                                <td>5004</td>
                                <td>250</td>
                                <td>غمار</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>8-7-2018</td>
                                <td>65</td>
                                <td>5008</td>
                                <td>250</td>
                                <td>سيف</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1-5-2018</td>
                                <td>23</td>
                                <td>5001</td>
                                <td>250</td>
                                <td>رفقات</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4-5-2018</td>
                                <td>27</td>
                                <td>5004</td>
                                <td>250</td>
                                <td>غمار</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>8-7-2018</td>
                                <td>65</td>
                                <td>5008</td>
                                <td>250</td>
                                <td>سيف</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1-5-2018</td>
                                <td>23</td>
                                <td>5001</td>
                                <td>250</td>
                                <td>رفقات</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4-5-2018</td>
                                <td>27</td>
                                <td>5004</td>
                                <td>250</td>
                                <td>غمار</td>
                                <td>365</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>8-7-2018</td>
                                <td>65</td>
                                <td>5008</td>
                                <td>250</td>
                                <td>سيف</td>
                                <td>365</td>
                            </tr>


                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>


@stop


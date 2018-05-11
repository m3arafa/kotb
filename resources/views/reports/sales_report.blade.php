@extends('main.main')
@section('address')
    <h1> تقرير مبيعات</h1>

@stop
@section('container')



    <div class="ibox float-e-margins ibox-content text-center p-md">
        <div class="col-md-6">
            <div class="col-md-4">
                <label for="branch">نوع المبيعات</label>
            </div>
            <div class="col-md-8">
                <select id="branch" class="form-control">
                    <option>الكل</option>
                    <option>نقدى</option>
                    <option>عقود</option>
                </select>
            </div>
        </div>


        <div class="col-md-6">
            <div class=" col-md-12 form-group float-e-margins">
                <label class="font-normal col-md-2"><h4>الفتره </h4></label>

                <div class="col-md-5">
                    <input id="change_oil_from" placeholder="من" class="form-control picker" type="text"
                           value="">
                </div>
                <div class="col-md-5">
                    <input id="change_oil to" placeholder="الى " class="form-control picker" type="text"
                           value="">
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
                                <th data-hide="phone">رقم الفاتوره</th>
                                <th data-hide="all">تاريخ الفاتوره</th>
                                <th data-hide="all">اسم العميل</th>
                                <th data-hide="phone">اسم السائق / البائع</th>
                                <th data-hide="phone">الصافى</th>
                                <th data-hide="phone">نوع المبيعات</th>
                                <th data-hide="phone">طريقه الدفع</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>65847</td>
                                <td>2-4-2014</td>
                                <td>احمد فتحى</td>
                                <td>كومار</td>
                                <td>2000</td>
                                <td>نقدى</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5248</td>
                                <td>2-2-2014</td>
                                <td>احمد حجازى</td>
                                <td>اناندا</td>
                                <td>205</td>
                                <td>عقود</td>
                                <td>اجل</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2547</td>
                                <td>2-8-2014</td>
                                <td>عمر عمر</td>
                                <td>باهادور</td>
                                <td>300</td>
                                <td>نقدى</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>25487</td>
                                <td>2-6-2014</td>
                                <td>عىل جبر</td>
                                <td>محمود</td>
                                <td>450</td>
                                <td>عقود</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1475</td>
                                <td>20-12-2014</td>
                                <td>طارق حامد</td>
                                <td>مسعد</td>
                                <td>500</td>
                                <td>عقود</td>
                                <td>اجل</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>5247</td>
                                <td>2-10-2014</td>
                                <td>محمد صلاح</td>
                                <td>فتحى</td>
                                <td>20</td>
                                <td>نقدى</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>26571</td>
                                <td>25-2-2014</td>
                                <td>عصام الحضرى</td>
                                <td>محسن</td>
                                <td>258</td>
                                <td>عقود</td>
                                <td>اجل</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>589</td>
                                <td>2-8-2014</td>
                                <td>محمد عبد الشافى</td>
                                <td>يونس</td>
                                <td>269</td>
                                <td>عقود</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>1478</td>
                                <td>2-9-2014</td>
                                <td>محمود حسن</td>
                                <td>هانى</td>
                                <td>478</td>
                                <td>نقدى</td>
                                <td>نقدى</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>252547</td>
                                <td>2-7-2014</td>
                                <td>رمضان صبحى</td>
                                <td>اكرامى</td>
                                <td>20051</td>
                                <td>عقود</td>
                                <td>اجل</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>25487</td>
                                <td>26-4-2014</td>
                                <td>محمد الننى</td>
                                <td>سوناد</td>
                                <td>258</td>
                                <td>عقود</td>
                                <td>اجل</td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td>مجموع النقدى</td>
                                <td>65400 </td>
                                <td>مجموع العقود</td>
                                <td>54000</td>
                                <td>الاجمالى</td>
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

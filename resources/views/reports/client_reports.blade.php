@extends('main.main')
@section('address')
    <h1> تقرير بيانات العملاء</h1>

@stop
@section('container')

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
                                <th data-hide="phone">اسم العميل</th>
                                <th data-hide="all">رقم التليفون</th>
                                <th data-hide="phone">عدد مرات الاستئجار</th>
                                <th data-hide="phone">المبلغ المستحق لديه</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>احمد حجازى</td>
                                <td>01001001001</td>
                                <td>20</td>
                                <td class="text-center">2000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>وائل جمعه</td>
                                <td>01002002002</td>
                                <td>15</td>
                                <td class="text-center">3400</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>سعد سمير</td>
                                <td>01003003003</td>
                                <td>17</td>
                                <td class="text-center">3000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>عصام الحضرى</td>
                                <td>01004004004</td>
                                <td>19</td>
                                <td class="text-center">لايوجد</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>طارق حامد</td>
                                <td>01005005005</td>
                                <td>23</td>
                                <td class="text-center">40000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>محمد صلاح </td>
                                <td>01006006006</td>
                                <td>50</td>
                                <td class="text-center">1000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>محمد ابو تريكه </td>
                                <td>01007007007</td>
                                <td>45</td>
                                <td class="text-center">500</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>صالح جمعه </td>
                                <td>01008008008</td>
                                <td>30</td>
                                <td class="text-center">1200</td>
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

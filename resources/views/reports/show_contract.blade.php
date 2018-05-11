@extends('main.main')
@section('address')
    <h1>تقرير العقود</h1>

@stop
@section('container')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row ibox-content ibox-title text-center p-md">
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="col-md-4">
                        <label for="branch">إسم العميل</label>
                    </div>
                    <div class="col-md-8">
                        <select id="branch" class="form-control">
                            <option>الكل</option>
                            <option>عميل 1</option>
                            <option>عميل 2</option>
                            <option>عميل 3</option>
                            <option>عميل 4</option>
                            <option>عميل 5</option>
                            <option>عميل 6</option>
                            <option>عميل 7</option>
                            <option>عميل 8</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-3">
                    <label for="branch">رقم العقد</label>
                    <input type="text" placeholder="برجاء ادخال رقم العقد">
                </div>

                <div class="col-md-5">
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

                <div>
                    <button class="btn btn-info">عرض</button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="col-md-4">
                        <label for="branch">حاله العقد</label>
                    </div>
                    <div class="col-md-8">
                        <select id="branch" class="form-control">
                            <option>الكل</option>
                            <option>منتهى</option>
                            <option>سارى</option>

                        </select>

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
                                <th data-hide="phone">رقم العقد</th>
                                <th data-hide="phone"> اسم العميل</th>
                                <th data-hide="all">مده التعاقد</th>
                                <th data-hide="phone">المبلغ الكلى</th>
                                <th data-hide="phone">المدفوع</th>
                                <th data-hide="phone">المتبقى (له/عليه)</th>
                                <th data-hide="phone">عدد الرحلات</th>
                                <th data-hide="phone">مده الرحله</th>
                                <th data-hide="phone">عدد الرحلات المتبقيه</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>408</td>
                                <td>وائل جمعه</td>
                                <td>5 اشهر</td>
                                <td>1200</td>
                                <td>800</td>
                                <td>400</td>
                                <td>6</td>
                                <td>6 أيام</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>895</td>
                                <td>عصام الحضرى</td>
                                <td>7 اشهر</td>
                                <td>2000</td>
                                <td>900</td>
                                <td>1100</td>
                                <td>12</td>
                                <td>10 أيام</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>305</td>
                                <td>عمر السومه</td>
                                <td>9 اشهر</td>
                                <td>900</td>
                                <td>600</td>
                                <td>300</td>
                                <td>5</td>
                                <td>16 أيام</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>456</td>
                                <td>بهاء مجدى</td>
                                <td>1 اشهر</td>
                                <td>1100</td>
                                <td>900</td>
                                <td>200</td>
                                <td>7</td>
                                <td>20 يوم</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>478</td>
                                <td>طارق السيد</td>
                                <td>2 اشهر</td>
                                <td>600</td>
                                <td>600</td>
                                <td>0</td>
                                <td>2</td>
                                <td>30 يوم</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>458</td>
                                <td>حازم امام</td>
                                <td>6 اشهر</td>
                                <td>3000</td>
                                <td>1600</td>
                                <td>1200</td>
                                <td>11</td>
                                <td>25 يوم</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>508</td>
                                <td>ابو تريكه</td>
                                <td>4 اشهر</td>
                                <td>1700</td>
                                <td>500</td>
                                <td>1200</td>
                                <td>8</td>
                                <td>20 يوم</td>
                                <td>4</td>
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

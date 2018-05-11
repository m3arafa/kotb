@extends('main.main')
@section('address')
    <h1> تقرير تفريغ</h1>

@stop
@section('container')



    <div class="ibox float-e-margins ibox-content text-center p-md">
        <div class="col-md-12">

            <div class="col-md-6">
                <div class="col-md-4">
                    <label for="branch">الحاويه</label>
                </div>
                <div class="col-md-8">
                    <select id="branch" class="form-control">
                        <option>الكل</option>
                        <option>5001</option>
                        <option>5002</option>
                        <option>5003</option>
                        <option>5004</option>
                        <option>5005</option>
                        <option>5006</option>
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
                                <th data-hide="phone">اسم العميل</th>
                                <th data-hide="all">الموقع</th>
                                <th data-hide="all">اسم السائق</th>
                                <th data-hide="all">الحاويه</th>
                                <th data-hide="phone">رقم وصل التفريغ</th>
                                <th data-hide="phone">تاريخ التفريغ</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>ممود عبد العزيز</td>
                                <td>الشرقيه</td>
                                <td>احمد فتحى</td>
                                <td>5006</td>
                                <td>584</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>عادل امام</td>
                                <td>الغربيه</td>
                                <td>احمد حجازى</td>
                                <td>5001</td>
                                <td>568</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>احمد ذكى</td>
                                <td>المنوفيه</td>
                                <td>عمر عمر</td>
                                <td>5002</td>
                                <td>589</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>احمد حلمى</td>
                                <td>القليوبيه</td>
                                <td>عىل جبر</td>
                                <td>5004</td>
                                <td>560</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>طارق الشيخ</td>
                                <td>الدمام</td>
                                <td>طارق حامد</td>
                                <td>5005</td>
                                <td>561</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>احمد شيبه</td>
                                <td>شبرا</td>
                                <td>محمد صلاح</td>
                                <td>5006</td>
                                <td>578</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>محمود محمود</td>
                                <td>القصيم</td>
                                <td>عصام الحضرى</td>
                                <td>5007</td>
                                <td>580</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>حسين الجسمى</td>
                                <td>الطائف</td>
                                <td>محمد عبد الشافى</td>
                                <td>5008</td>
                                <td>590</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>راغب علامه</td>
                                <td>الطائف</td>
                                <td>محمود حسن</td>
                                <td>5009</td>
                                <td>554</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>وائل كافورى</td>
                                <td>بنها</td>
                                <td>رمضان صبحى</td>
                                <td>5010</td>
                                <td>560</td>
                                <td>2-2-2018</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>محمد حماقى</td>
                                <td>المطريه</td>
                                <td>محمد الننى</td>
                                <td>5011</td>
                                <td>556</td>
                                <td>2-2-2018</td>
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

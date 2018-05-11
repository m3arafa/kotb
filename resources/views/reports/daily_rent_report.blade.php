@extends('main.main')
@section('address')
    <h1> تقرير ايجارت يوميه</h1>

@stop
@section('container')



    <div class="ibox float-e-margins ibox-content text-center p-md">
        <div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <label for="branch">تقرير ايجارات عن يوم </label>
                </div>
                <div class="form-group">
                    <div class="input-group date">
                        <span class="input-group-addon "><i class="fa fa-calendar"></i></span><input
                                type="text" class="form-control picker" value="">
                    </div>
                </div>
            </div>

            <div class=" col-md-6 form-group float-e-margins">
                <label class="font-normal col-md-4"><h4>إختر نوع الايجار</h4></label>
                <div class="col-md-6">
                    <select class="form-control  chosen-se" value="" id="rent_type">
                        <option value="1" selected="selected">عقد</option>
                        <option value="2">نقدى</option>
                    </select>
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
                                <th data-hide="phone">نوع الايجار</th>
                                <th data-hide="phone">رقم العقد</th>
                                <th data-hide="phone">اسم العميل</th>
                                <th data-hide="phone">اسم السائق</th>
                                <th data-hide="phone">رقم الحاويه</th>
                                <th data-hide="phone">تاريخ الايجار</th>
                                <th data-hide="phone">قيمه الايجار</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>نقدى</td>
                                <td>-----</td>
                                <td>احمد فتحى</td>
                                <td>كومار</td>
                                <td>5001</td>
                                <td>3-3-2018</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>عقود</td>
                                <td>524</td>
                                <td>احمد حجازى</td>
                                <td>اناندا</td>
                                <td>5002</td>
                                <td>3-3-2018</td>
                                <td>195</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>عقود</td>
                                <td>325</td>
                                <td>عمر عمر</td>
                                <td>باهادور</td>
                                <td>5003</td>
                                <td>3-3-2018</td>
                                <td>220</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>نقدى</td>
                                <td>-----</td>
                                <td>عىل جبر</td>
                                <td>محمود</td>
                                <td>5004</td>
                                <td>3-3-2018</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>نقدى</td>
                                <td>-----</td>
                                <td>طارق حامد</td>
                                <td>مسعد</td>
                                <td>5005</td>
                                <td>3-3-2018</td>
                                <td>180</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>عقود</td>
                                <td>800</td>
                                <td>محمد صلاح</td>
                                <td>فتحى</td>
                                <td>5006</td>
                                <td>3-3-2018</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>عقود</td>
                                <td>700</td>
                                <td>عصام الحضرى</td>
                                <td>محسن</td>
                                <td>5007</td>
                                <td>3-3-2018</td>
                                <td>258</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>نقدى</td>
                                <td>-----</td>
                                <td>محمد عبد الشافى</td>
                                <td>يونس</td>
                                <td>5008</td>
                                <td>3-3-2018</td>
                                <td>269</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>نقدى</td>
                                <td>-----</td>
                                <td>محمود حسن</td>
                                <td>هانى</td>
                                <td>5009</td>
                                <td>3-3-2018</td>
                                <td>320</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>عقود</td>
                                <td>620</td>
                                <td>رمضان صبحى</td>
                                <td>اكرامى</td>
                                <td>5010</td>
                                <td>3-3-2018</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>عقود</td>
                                <td>410</td>
                                <td>محمد الننى</td>
                                <td>سوناد</td>
                                <td>5011</td>
                                <td>3-3-2018</td>
                                <td>240</td>
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

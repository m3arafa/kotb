@extends('main.main')
@section('address')
    <h1> تقرير العمولات والبدلات</h1>

@stop
@section('container')



    <div class="ibox float-e-margins ibox-content text-center p-md">
        <div class="col-md-3">
            <label for="branch">تقرير عن الفتره </label>
        </div>
        <div class="col-md-9">
            <div class=" col-md-12 form-group float-e-margins">
                <div class="col-md-5">
                    <div class="col-md-2">
                        <label class="font-normal "><h4>من </h4></label>
                    </div>
                    <div class="col-md-8">

                        <input id="change_oil_from" placeholder="من" class="form-control picker" type="text"
                               value="">

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-md-4">
                        <label class="font-normal"><h4>من </h4></label>
                    </div>
                    <div class="col-md-8">
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
                                <th data-hide="phone">اسم السائق/المشرف</th>
                                <th data-hide="all">مجموع عمولات النقدى</th>
                                <th data-hide="all">مجموع عمولات العقود</th>
                                <th data-hide="all">تفريغ</th>
                                <th data-hide="phone">بدل الغداء</th>
                                <th data-hide="phone">بدلات أخرى</th>
                                <th data-hide="phone">المجموع الكلى</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>محمود عبد العزيز</td>
                                <td>500</td>
                                <td>600</td>
                                <td>0</td>
                                <td>120</td>
                                <td>80</td>
                                <td>1300</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>هانى سلامه</td>
                                <td>450</td>
                                <td>400</td>
                                <td>10</td>
                                <td>100</td>
                                <td>70</td>
                                <td>1020</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>بهاء مجدى</td>
                                <td>350</td>
                                <td>230</td>
                                <td>15</td>
                                <td>60</td>
                                <td>40</td>
                                <td>680</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>محمود عبد العزيز</td>
                                <td>500</td>
                                <td>600</td>
                                <td>20</td>
                                <td>120</td>
                                <td>70</td>
                                <td>1290</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>هانى سلامه</td>
                                <td>450</td>
                                <td>400</td>
                                <td>35</td>
                                <td>100</td>
                                <td>30</td>
                                <td>980</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>بهاء مجدى</td>
                                <td>350</td>
                                <td>230</td>
                                <td>65</td>
                                <td>60</td>
                                <td>30</td>
                                <td>670</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>محمود عبد العزيز</td>
                                <td>500</td>
                                <td>600</td>
                                <td>75</td>
                                <td>120</td>
                                <td>145</td>
                                <td>1365</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>هانى سلامه</td>
                                <td>450</td>
                                <td>400</td>
                                <td>85</td>
                                <td>100</td>
                                <td>20</td>
                                <td>970</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>بهاء مجدى</td>
                                <td>350</td>
                                <td>230</td>
                                <td>95</td>
                                <td>60</td>
                                <td>30</td>
                                <td>670</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td></td>
                                <td><h2><strong>المجموع</strong></h2></td>
                                <td>3900</td>
                                <td>3690</td>
                                <td>400</td>
                                <td>840</td>
                                <td>515</td>
                                <td>8945</td>

                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>


@stop

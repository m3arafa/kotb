<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>kotb</title>

    <link href="{{url('public/css/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/style-rtl.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('tickets/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/calenders/jquery.calendars.picker.css') }}" rel="stylesheet">
    {{--    <link href="{{ url('css/calenders/bootstrap-datetimepicker-standalone.css') }}" rel="stylesheet">--}}
    <link href="{{ url('css/calenders/datepicker3.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>

<div id="wrapper ">

    <nav class="navbar-default navbar-static-side navbar-fixed-right" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src={{url("public/img/ktob.png")}}/>
                             </span>

                    </div>

                    <div class="logo-element">
                        <img alt="image" class="img-circle" src={{url("public/img/ktob.png")}}/>
                    </div>
                    <div>
                        <label class="text-center nav-label"> <h3 style="color: #a7b1c2;">قطب الخليج لايجار الحاويات </h3></label>
                    </div>
                </li>
                <li>
                    <a href="{{route('KotbElkhalig')}}"><i class="fa fa-th-large"></i> <span class="nav-label">الرئيسيه</span> </a>
                </li>

                <li class="active">
                    <a href="{{ route('AddContract') }}"><i class="fa fa-diamond"></i> <span
                                class="nav-label">تسجيل تعاقد</span></a>
                </li>
                <li class="active">
                    <a href="{{ route('Rent') }}"><i class="fa fa-diamond"></i> <span
                                class="nav-label">تسجيل ايجار حاويه</span></a>
                </li>
                {{--<li>--}}
                    {{--<a href="{{route('RenewRegister')}}"><i class="fa fa-bar-chart-o"></i> <span--}}
                                {{--class="nav-label">تسجيل تجديد حاويه</span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="{{route('DeliverContainer')}}"><i class="fa fa-envelope"></i>--}}
                        {{--<span class="nav-label">تسجيل تسليم حاويه </span></a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{route('EmptyingContainer')}}"><i class="fa fa-pie-chart"></i> <span class="nav-label">تسجيل تفريغ حاويه</span> </a>
                </li>
                <li>
                    <a href="{{route('ClientPayment')}}"><i class="fa fa-flask"></i> <span class="nav-label">تسجيل سداد عميل</span></a>
                </li>
                <li>
                    <a href="{{route('SearchContainer')}}"> <i class="fa fa-flask"></i> <span class="nav-label">البحث عن حاويه</span></a>
                </li>
                <li>
                    <a href="{{route('IncomeSave')}}"><i class="fa fa-desktop"></i> <span class="nav-label">  إيرادات أخرى</span> </a>
                </li>
                <li>
                    <a href="{{route('DailyPayment')}}"><i class="fa fa-files-o"></i> <span class="nav-label">تسجيل مصروفات</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">التقارير</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('ContainerReport')}}">تقرير العام للحاويات</a></li>
                        <li><a href="{{ route('BranchReport')}}">تقرير الفروع</a></li>
                        {{--<li><a href="{{ route('clients') }}">تقرير بيانات العملاء</a></li>--}}
                        <li><a href="{{route('ClientStatement')}}">تقرير كشف حساب العميل</a></li>
                        <li><a href="{{route('sales')}}">تقرير مبيعات</a></li>
                        <li><a href="{{route('ShowContract')}}">عرض العقود</a></li>
                        <li><a href="{{route('EmptyingReport')}}">تقرير التفريغ</a></li>
                        {{--<li><a href="{{route('DailyRentReport')}}">تقرير ايجارات يوميه</a></li>--}}
                        <li><a href="{{route('CommissionReport')}}">تقرير العمولات والبدلات</a></li>
                        {{--<li><a href="diff.html">تقرير اليوميه</a></li>--}}
                        {{--<li><a href="pdf_viewer.html">تقرير الايرادات والبونص</a></li>--}}
                    </ul>
                </li>
                <li class="landing_link">
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">الاعدادات</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('AddBranch')}}">إضافه فرع</a></li>
                        <li><a href="{{route('AddContainer')}}">إضافه حاويه</a></li>
                        <li><a href="{{route('AddUser')}}">إضافه مستخدم</a></li>
                        <li><a href="{{route('AddWorker')}}">إضافه عمال</a></li>
                        <li><a href="{{route('AddClient')}}">إضافه عميل</a></li>
                        <li><a href="{{route('AddTruck')}}">اضافه شاحنه</a></li>
                        <li><a href="{{route('ConfigurePayment')}}">تعريف مصرفات يوميه</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg ">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> تسجيل الخروج
                        </a>
                    </li>

                </ul>


            </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            @yield('address')
        </div>


        <div class="wrapper wrapper-content animated fadeInRight" id="container">
            @yield('container')
        </div>
    </div>
</div>
</div>

<div class="footer">

    <strong>Copyright</strong> Albadr Smart systems @2018

</div>

<!-- Mainly scripts -->

</body>

</html>
<script src="{{ url('public/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ url('public/js/bootstrap.js') }}"></script>--}}
<!-- Mainly scripts -->
<script src="{{ url('public/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('public/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ url('public/js/inspinia.js') }}"></script>
<script src="{{ url('public/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

<script src="{{ url('js/calenders/jquery.calendars.js') }}"></script>
<script src="{{ url('js/calenders/jquery.calendars.plus.js') }}"></script>
<script src="{{ url('js/calenders/jquery.plugin.js') }}"></script>
<script src="{{ url('js/calenders/jquery.calendars.picker.js') }}"></script>
<script src="{{ url('js/calenders/jquery.calendars.ummalqura.js') }}"></script>
<script src="{{ url('js/calenders/jquery.calendars.ummalqura-ar.js') }}"></script>
<script src="{{ url('js/calenders/jquery.calendars.picker-ar.js') }}"></script>

<script>
    $(function () {

        $(".picker").calendarsPicker({
            // calendar: $.calendars.instance('ummalqura'),
            dateFormat: 'Y-mm-dd',
            defaultDate: "0",
            selectDefaultDate: true

        });


    })
</script>
@yield('scripts')
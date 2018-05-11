@extends('main.main')
@section('address')
    <h1> تقرير اجمالى بعدد الحاويات وحالاتها </h1>

@stop
@section('container')

    <div class="ibox float-e-margins">
        <div class="ibox-content text-center p-md">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>تقرير عام </h5>


                        <div class="col-md-6" style="float: left;">
                            <div class="col-md-4">
                                <label for="container_size">حجم الحاويه</label>
                            </div>
                            <div class="col-md-8">
                                <select id="container_size" class="form-control">
                                    <option>اختر حجم الحاويه</option>
                                    <option>1 يارده</option>
                                    <option>2 يارده</option>
                                    <option>3 يارده</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br>


                    <div class="clearfix"></div>
                    <div class="ibox-content">
                        <div class="center-block text-center">
                            <div class="col-md-6">
                                <div class="alert alert-info  ">
                                    <h3> إجمالى عدد الحاويات : 500 </h3>
                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-success">
                                    <h3>الحاويات الخاليه : 87</h3>
                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                        </div>

                        <div class="center-block text-center">
                            <div class="col-md-6">
                                <div class="alert alert-warning ">
                                    <h3>الحاويات المؤجره : 413</h3>

                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-danger">
                                    <h3> الحاويات التى لم تفرغ : 42</h3>
                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
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


                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="black_font product-desc text-center btn-warning">
                                            <div>
                                                <label><h1>5001</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 2يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div>
                                                    من "2-4-2018" إلى "5-5-2018"
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label>السائق : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        اناندا كومار
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="margin-bottom: 1px;">العنوان : </label>
                                                </div>
                                                <div class="col-md-12">
                                                    38 شارع جامعه الدول العربيه
                                                </div>

                                            </div>
                                            <div class="">

                                                <div>
                                                    <span class="btn-warning btn-circle btn-xl "> مؤجره</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box black_font">

                                        <div class="product-desc text-center btn-danger black_font">
                                            <div>
                                                <label><h1>5002</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 1يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label>السائق : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        اناندا كومار
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="margin-bottom: 1px;">العنوان : </label>
                                                </div>
                                                <div class="col-md-12">
                                                    38 شارع جامعه الدول العربيه
                                                </div>

                                            </div>
                                            <div>
                                                <span class="btn-danger btn-circle btn-xl ">  متأخره </span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-info black_font">
                                            <div>
                                                <label><h1>5003</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 3يارده</label>
                                            </div>

                                            <div class="small m-t-xs min-height-40">
                                                <div class="col-md-6">
                                                    <label>السائق : </label>
                                                </div>
                                                <div class="col-md-6">
                                                    اناندا كومار
                                                </div>
                                            </div>
                                            <div>
                                                <span class="btn-info btn-circle btn-xl "> فارغه</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-info black_font">
                                            <div>
                                                <label><h1>5004</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 2يارده</label>
                                            </div>

                                            <div class="small m-t-xs min-height-40">
                                                <div class="col-md-6">
                                                    <label>السائق : </label>
                                                </div>
                                                <div class="col-md-6">
                                                    اناندا كومار
                                                </div>
                                            </div>
                                            <div>
                                                <span class="btn-info btn-circle btn-xl "> فارغه</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-warning black_font">
                                            <div>
                                                <label><h1>5005</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 1يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div>
                                                    من "20-4-2018" إلى "15-5-2018"
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <span class="btn-warning btn-circle btn-xl "> مؤجره</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-danger black_font">
                                            <div>
                                                <label><h1>5006</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 1يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label>السائق : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        اناندا كومار
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="margin-bottom: 1px;">العنوان : </label>
                                                </div>
                                                <div class="col-md-12">
                                                    38 شارع جامعه الدول العربيه
                                                </div>

                                            </div>

                                            <div>
                                                <span class="btn-danger btn-circle btn-xl ">  متأخره </span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-danger black_font">
                                            <div>
                                                <label><h1>5007</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 2يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label>السائق : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        اناندا كومار
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="margin-bottom: 1px;">العنوان : </label>
                                                </div>
                                                <div class="col-md-12">
                                                    38 شارع جامعه الدول العربيه
                                                </div>

                                            </div>
                                            <div>
                                                <span class="btn-danger btn-circle btn-xl ">  متأخره </span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-warning black_font">
                                            <div>
                                                <label><h1>5008</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 3يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div>
                                                    من "28-4-2018" إلى "18-5-2018"
                                                </div>
                                            </div>
                                            <div class="">

                                                <div>
                                                    <span class="btn-warning btn-circle btn-xl "> مؤجره</span>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-info black_font">
                                            <div>
                                                <label><h1>5009</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 2يارده</label>
                                            </div>

                                            <div class="small m-t-xs min-height-40">
                                                <div class="col-md-6">
                                                    <label>السائق : </label>
                                                </div>
                                                <div class="col-md-6">
                                                    اناندا كومار
                                                </div>
                                            </div>
                                            <div>
                                                <span class="btn-info btn-circle btn-xl "> فارغه</span>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-info black_font">
                                            <div>
                                                <label><h1>5003</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 3يارده</label>
                                            </div>

                                            <div class="small m-t-xs min-height-40">
                                                <div class="col-md-6">
                                                    <label>السائق : </label>
                                                </div>
                                                <div class="col-md-6">
                                                    اناندا كومار
                                                </div>
                                            </div>
                                            <div>
                                                <span class="btn-info btn-circle btn-xl "> فارغه</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-danger black_font">
                                            <div>
                                                <label><h1>5007</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 2يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <label>السائق : </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        اناندا كومار
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="margin-bottom: 1px;">العنوان : </label>
                                                </div>
                                                <div class="col-md-12">
                                                    38 شارع جامعه الدول العربيه
                                                </div>

                                            </div>
                                            <div>
                                                <span class="btn-danger btn-circle btn-xl ">  متأخره </span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="ibox">
                                    <div class="ibox-content product-box">

                                        <div class="product-desc text-center btn-warning black_font">
                                            <div>
                                                <label><h1>5005</h1></label>
                                            </div>
                                            <div>
                                                <label> حجم الحاويه : 1يارده</label>
                                            </div>
                                            <div class="small m-t-xs min-height-40">
                                                <div>
                                                    مؤجره ل أحمد جلال محمد
                                                </div>
                                                <div>
                                                    من "20-4-2018" إلى "15-5-2018"
                                                </div>
                                            </div>
                                            <div class="">
                                                <div>
                                                    <span class="btn-warning btn-circle btn-xl "> مؤجره</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@extends('main.main')
@section('address')
    <h1> اداره شاحنه</h1>

@stop
@section('container')
    <div class="row col-lg-12 ibox float-e-margins ibox-content text-center p-md">

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>رقم السيارة </h4></label>
            <div class="col-md-4">
                <input id="user_name" placeholder="أدخل رقم الحاويه " class="form-control" type="text"
                       value="">
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>السائق</h4></label>
            <div class="col-md-4">
                <select id="driver" class="form-control" class="chosen-select">
                    <option value="">اختر سائق</option>
                    <option value="container_id">سائق 1</option>
                    <option value="container_id">سائق 2</option>
                    <option value="container_id">سائق 3</option>
                    <option value="container_id">سائق 4</option>
                    <option value="container_id">سائق 5</option>
                    <option value="container_id">سائق 6</option>
                    <option value="container_id">سائق 7</option>
                </select>
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>تبديل القماشات</h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>


            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>غيار الزيت </h4></label>
            <div class="col-md-6">
                <div class="col-md-5">
                    <input id="change_oil_from" placeholder="من" class="form-control" type="text"
                           value="">
                </div>
                <div class="col-md-5">
                    <input id="change_oil to" placeholder="الى " class="form-control" type="text"
                           value="">
                </div>
            </div>
            <div class="col-md-4">
                <label class="col-md-4" for="current_kilometer"> القراءه الحاليه</label>
                <div class="col-md-8">
                    <input id="current_kilometer" name="current_kilometer" class="form-control"
                           placeholder="القراءه الحاليه">
                </div>
            </div>
        </div>

        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>تغيير البطاريه </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>
        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <label class="font-normal col-md-2"><h4>غطاس الهواء</h4></label>
            <div class="col-md-8">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="font-normal">من</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-normal">إلى</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input
                                        type="text" class="form-control" value="13/04/2014">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 float-e-margins form-group ">
            <label class="font-normal col-md-2"><h4>تغيير الكفرات </h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 float-e-margins form-group">
            <label class="font-normal col-md-2"><h4>فلتر الهواء</h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 float-e-margins form-group">
            <label class="font-normal col-md-2"><h4>انتهاء الاستمارة</h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 float-e-margins form-group">
            <label class="font-normal col-md-2"><h4> انتهاء التامين</h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>


        <div class="col-md-12 float-e-margins form-group">
            <label class="font-normal col-md-2"><h4> انتهاء كارت التشغيل</h4></label>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" value="03/04/2014">
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 float-e-margins form-group">
            <label class="font-normal col-md-2"><h4> ملاحظات اخرى</h4></label>
            <div class="col-md-8">
                <div class="col-md-6 group">
                    <input type="text" class="form-control">
                </div>
            </div>

        </div>


        <div class=" col-md-12 form-group float-e-margins">
            <button class="col-md-2 btn btn-block btn-success" style="" id="save_print">حفظ
            </button>
        </div>
    </div>
@stop

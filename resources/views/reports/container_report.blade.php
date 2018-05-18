@extends('main.main')
@section('address')
    <h1> تقرير اجمالى بعدد الحاويات وحالاتها </h1>

@stop
@section('container')

    <div class="ibox float-e-margins">
        <div class="ibox-content text-center p-md">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <!--
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
                       -->


                    <div class="clearfix"></div>
                    <div class="ibox-content">
                        <div class="center-block text-center">
                            <div class="col-md-6">
                                <div class="alert alert-info  ">
                                    <h3> إجمالى عدد الحاويات : {{$number_of_containers}}</h3>
                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-success">
                                    <h3>الحاويات الخاليه : {{$containers_empty_number}}</h3>
                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                        </div>

                        <div class="center-block text-center">
                            <div class="col-md-6">
                                <div class="alert alert-warning ">
                                    <h3>الحاويات المؤجره : {{$containers_has_rent}}</h3>

                                    <a class="alert-link" href="#">عرض</a>.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-danger">
                                    <h3> الحاويات التى لم تفرغ : {{$containers_not_empty_number}}</h3>
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

                            @foreach($containers as $container)
                                {{-- الحاويات المؤجرة والغير فارغة--}}
                                @if($container->is_empty == 0)
                                    @if(count($rents) > 0)
                                        @foreach($rents as $rent)
                                            @if($container->id == $rent->container_id)

                                                @if($rent->to_date >= $current_date)
                                                    {{--الحاويات المؤجرة ومازالت فى فترة الإيجار--}}
                                                    <div class="col-md-3 ">
                                                        <div class="ibox">
                                                            <div class="ibox-content product-box">

                                                                <div class="black_font product-desc text-center btn-warning">
                                                                    <div>
                                                                        <label><h1>{{$container->number}}</h1></label>
                                                                    </div>
                                                                    <div>
                                                                        <label> حجم الحاويه : {{$container->size}}
                                                                            ياردة</label>
                                                                    </div>
                                                                    <div class="small m-t-xs min-height-40">
                                                                        <div id="client_name">
                                                                            @if(!$rent->client_id)
                                                                                مؤجرة للعميل : {{$rent->client_name}}
                                                                            @else
                                                                                @foreach($clients as $client)
                                                                                    @if($client->id == $rent->client_id)
                                                                                        مؤجرة للعميل : {{$client->name}}
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            من {{$rent->from_date}} إلى {{$rent->to_date}}
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-12" id="driver_name">
                                                                                <label>السائق :</label>
                                                                                @foreach($drivers as $driver)
                                                                                    @if($rent->driver_id == $driver->id)
                                                                                        {{$driver->name}}
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label style="margin-bottom: 1px;">العنوان
                                                                                : </label>
                                                                        </div>
                                                                        <div class="col-md-12" id="address">
                                                                            {{$rent->address}}
                                                                        </div>

                                                                    </div>
                                                                    <div class="">

                                                                        <div class="m-t-md">
                                                                            <span class="btn-warning btn-circle btn-xl "> مؤجره</span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    {{--الحاويات المتأخرة--}}
                                                    <div class="col-md-3 ">
                                                        <div class="ibox">
                                                            <div class="ibox-content product-box">

                                                                <div class="black_font product-desc text-center btn-danger">
                                                                    <div>
                                                                        <label><h1>{{$container->number}}</h1></label>
                                                                    </div>
                                                                    <div>
                                                                        <label> حجم الحاويه : {{$container->size}}
                                                                            ياردة</label>
                                                                    </div>
                                                                    <div class="small m-t-xs min-height-40">
                                                                        <div id="client_name">
                                                                            @if(!$rent->client_id)
                                                                                مؤجرة للعميل : {{$rent->client_name}}
                                                                            @else
                                                                                @foreach($clients as $client)
                                                                                    @if($client->id == $rent->client_id)
                                                                                        مؤجرة للعميل : {{$client->name}}
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            من {{$rent->from_date}} إلى {{$rent->to_date}}
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-12" id="driver_name">
                                                                                <label>السائق :</label>
                                                                                @foreach($drivers as $driver)
                                                                                    @if($rent->driver_id == $driver->id)
                                                                                        {{$driver->name}}
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label style="margin-bottom: 1px;">العنوان
                                                                                : </label>
                                                                        </div>
                                                                        <div class="col-md-12" id="address">
                                                                            {{$rent->address}}
                                                                        </div>

                                                                    </div>
                                                                    <div class="">

                                                                        <div class="m-t-md">
                                                                            <span class="btn-danger btn-circle btn-xl "> متأخرة</span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif


                                            @endif
                                        @endforeach
                                    @endif
                                @endif
                                {{-- الحاويات الفارغة--}}
                                @if($container->is_empty == 1)
                                    <div class="col-md-3 ">
                                        <div class="ibox">
                                            <div class="ibox-content product-box">

                                                <div class="product-desc text-center btn-info black_font">
                                                    <div>
                                                        <label><h1>{{$container->number}}</h1></label>
                                                    </div>
                                                    <div>
                                                        <label> حجم الحاويه : {{$container->size}}</label>
                                                    </div>

                                                    <div class="small m-t-xs min-height-40">
                                                        <div>
                                                            @foreach($container_transactions as $transaction)
                                                                @if($transaction->container_id == $container->id)
                                                                    <div class="m-b-sm">
                                                                        <div>
                                                                            <label>السائق عن التفريغ: </label>
                                                                        </div>
                                                                        <div>
                                                                            @foreach($drivers as $driver)
                                                                                @if($transaction->employee_id == $driver->id)
                                                                                    {{$driver->name}}
                                                                                @endif
                                                                            @endforeach
                                                                        </div>

                                                                    </div>
                                                                    <div class="">
                                                                        <div>
                                                                            <label>تاريخ التفريغ : </label>
                                                                        </div>
                                                                        <div>
                                                                            {{$transaction->transaction_date}}
                                                                        </div>


                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="m-t-md">
                                                        <span class="btn-info btn-circle btn-xl "> فارغه</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
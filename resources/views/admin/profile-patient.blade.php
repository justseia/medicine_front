@extends('admin.layouts.app')

@section('content')
    <div class="wrapper">
        <x-admin-header/>
        <div class="content-wrapper" style="min-height: 260px;">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Patient Details</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Patient Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-body text-end min-h-150" style="background-image:url({{asset('gallery/landscape14.jpg')}}); background-repeat: no-repeat; background-position: center;background-size: cover;">

                                </div>
                                <div class="box-body wed-up position-relative">
                                    <div class="d-md-flex align-items-end">
                                        <img src="{{$user->image}}" class="bg-success-light rounded10 me-20" style="width: 150px; height: 150px" alt="">
                                        <div>
                                            <h4>{{$user->name}}</h4>
                                            <p><i class="fa fa-clock-o"></i> {{$user->created_at->isoFormat('LL')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <h4>Biography</h4>
                                    <p>{!! $user->biography !!}</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Appointment</h4>
                                </div>
                                <form action="{{ route('admin.user.profile.save', $user) }}" method="post" class="form-horizontal form-element" style="padding: 20px;">
                                    @csrf
                                    <div class="form-group row g-0">
                                        <div class="col-sm-9" style="padding-right: 20px;">
                                            <input name="body" class="form-control input-sm" placeholder="Write" style="padding:10px;height: 40px;border-radius: 10px;border: 1px solid;"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-danger pull-right w-p100" style="height: 100%;border-radius: 10px;">Send</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="box-body p-0">
                                    <div class="slimScrollDiv">
                                        <div class="inner-user-div">
                                            @foreach($doctor_orders as $doctor_order)
                                                <div class="media-list bb-1 bb-dashed border-light">
                                                    <div class="media align-items-center">
                                                        <a class="avatar avatar-lg status-success" href="#">
                                                            <img src="{{auth()->user()->image}}" class="bg-success-light" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">{{auth()->user()->name}}</a>
                                                            </p>
                                                            <div class="text-muted">{{ $doctor_order->created_at->diffForHumans(now(), true) }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="media pt-0">
                                                        <p>{!! $doctor_order->body !!}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 154px; opacity: 0.1; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 196.945px;"></div>
                                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>

@endsection

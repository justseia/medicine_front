@extends('admin.layouts.app')

@section('content')
    <div class="wrapper">

        <x-admin-header/>

        <div class="content-wrapper">
            <div class="container-full">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Doctors</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        @foreach($doctors as $doctor)
                            <div class="col-12 col-lg-4">
                                <div class="box ribbon-box">
                                    <div class="p-0 box-header no-border">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ $doctor->image }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h3 class="my-10"><a href="#">{{ $doctor->name }}</a></h3>
                                            <h6 class="mt-0 mb-10 user-info text-fade">{{ $doctor->speciality }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>

        <div class="control-sidebar-bg"></div>
    </div>

@endsection

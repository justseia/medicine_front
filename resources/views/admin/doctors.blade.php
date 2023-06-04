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
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <a href="{{ route('admin.doctors.create') }}">Doctors Add</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="row">
                        @foreach($doctors as $doctor)
                            <div class="col-3">
                                <div class="box ribbon-box">
                                    <div class="p-0 box-header no-border">
                                        <a href="{{ route('admin.doctors.edit', $doctor) }}">
                                            <img class="img-fluid" src="{{ $doctor->image }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h3 class="my-10">{{ $doctor->name }}</h3>
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

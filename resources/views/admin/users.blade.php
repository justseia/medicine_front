@extends('admin.layouts.app')

@section('content')
    <div class="wrapper">

        <x-admin-header/>

        <div class="content-wrapper">
            <div class="container-full">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Users</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        @foreach($users as $user)
                            <div class="col-12 col-lg-4">
                                <div class="box ribbon-box">
                                    <div class="p-0 box-header no-border">
                                        <a href="{{ route('admin.user.profile', $user) }}">
                                            <img class="img-fluid" src="{{ $user->image }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h3 class="my-10"><a href="#">{{ $user->name }}</a></h3>
                                            <h6 class="mt-0 mb-10 user-info text-fade">{{ $user->speciality }}</h6>
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

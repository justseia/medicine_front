@extends('admin.layouts.app')

@section('content')
    <div class="wrapper">

        <x-admin-header/>

        <div class="content-wrapper">
            <div class="container-full">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">News</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <a href="{{ route('admin.news.create') }}">News Add</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="row">
                        @foreach($news as $new)
                            <div class="col-12 col-lg-4">
                                <div class="box ribbon-box">
                                    <div class="p-0 box-header no-border">
                                        <a href="{{ route('admin.news.edit', $new) }}">
                                            <img class="img-fluid" src="{{ $new->image }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h3 class="my-10"><a href="#" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">{{ $new->title }}</a></h3>
                                            <h6 class="mt-0 mb-10 user-info text-fade" style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">{{ $new->body }}</h6>
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

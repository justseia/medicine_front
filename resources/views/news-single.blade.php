@extends('layouts.app') @section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Детали новости</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">
                            Главная
                        </a>
                    </li>
                    <li class="active">Детали новости</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение"/>
        <img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение"/>
    </div>
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-content row">
                        <img class="col-6" style="height: 500px;object-fit: cover;object-position: center" src="{{ $news->image }}" alt="Изображение"/>
                        <div class="blog-content col-6">
                            <ul>
                                <li>
                                    <i class="ri-time-line"></i>
                                    {{ $news->created_at->isoFormat('LL') }}
                                </li>
                            </ul>
                            <h3>{{ $news->title }}</h3>
                            <p style="white-space: pre-line">
                                {{ $news->body }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

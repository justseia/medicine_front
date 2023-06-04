@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Информация доктор</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">
                            Главная
                        </a>
                    </li>
                    <li class="active">Доктор</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение">
        <img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение">
    </div>
    <div class="services-details-content ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-1 mr-15">
                        <img src="{{ $doctor->image }}" alt="Изображение" style="width:100%;height:550px;object-fit:cover;object-position:top;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content-1 ml-15">
                        <span class="top-title">{{ $doctor->speciality }}</span>
                        <h2>{{ $doctor->name }}</h2>
                        <p>Email: {{ $doctor->email }}</p>
                        <p>Стаж: {{ $doctor->work_experience }} лет</p>
                        <p>{{ $doctor->biography }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

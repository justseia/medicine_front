@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Наши доктора</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}"> Главная </a>
                    </li>
                    <li class="active">Наши доктора</li>
                </ul>
            </div>
        </div>

        <img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="img"/>
        <img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="img"/>
    </div>
    <div class="doctors-area ptb-100">
        <div class="container">
            <div class="section-title wow fadeInUp delay-0-2s">
                <span class="top-title">Наши доктора</span>
                <h2>Познакомьтесь с нашими специалистами</h2>
            </div>

            <div class="row">
                @foreach($doctors as $doctor)
                    <a href="{{ route('doctor.show', $doctor) }}" class="col-lg-3 col-sm-6">
                        <div class="single-doctor wow fadeInUp delay-0-2s">
                            <img src="{{ $doctor->image }}" alt="Изображение"/>
                            <h3>{{ $doctor->name }}</h3>
                            <span>{{ $doctor->speciality }}</span>
                        </div>
                    </a>
                @endforeach
			</div>
		</div>
	</div>
@endsection

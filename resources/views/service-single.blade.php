@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Детали сервиса</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}">
							Главная
						</a>
					</li>
					<li class="active">Детали сервиса</li>
				</ul>
			</div>
		</div>
		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение">
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение">
	</div>
	<div class="services-details-content pt-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="services-1 mr-15">
						<img src="{{ asset('assets/images/services/services-1.png') }}" alt="Изображение">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="services-content-1 ml-15">
						<span class="top-title">Телемедицина и COVID-19</span>
						<h2>Все телемедицинские услуги, которые мы предоставляем во время COVID-19.</h2>
						<p>Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis.</p>
						<p>Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

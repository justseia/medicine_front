@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Услуги</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}">
							Главная
						</a>
					</li>

					<li class="active">Услуги</li>
				</ul>
			</div>
		</div>

		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение">
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение">
	</div>
	<div class="services-area ptb-100">
		<div class="container">
			<div class="section-title">
				<span class="top-title">Наши Услуги</span>
				<h2>Профессиональные услуги телемедицины</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-2s">
						<i class="shape flaticon-intestine"></i>
						<i class="icon flaticon-intestine"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Пищеварительное здоровье
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-4s">
						<i class="shape flaticon-examination"></i>
						<i class="icon flaticon-examination"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Консультации по COVID-19
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-6s">
						<i class="shape flaticon-consult"></i>
						<i class="icon flaticon-consult"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Специальный Follow Up
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-8s">
						<i class="shape flaticon-pediatrics"></i>
						<i class="icon flaticon-pediatrics"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Педиатрические услуги
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-1s">
						<i class="shape flaticon-drug"></i>
						<i class="icon flaticon-drug"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Цифровая аптека
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-services-box wow fadeInUp delay-0-1s">
						<i class="shape flaticon-mental-health"></i>
						<i class="icon flaticon-mental-health"></i>
						<h3>
							<a href="{{ route('service.show', 1) }}">
								Психическое здоровье
							</a>
						</h3>
						<p>Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Quisque velit nisi pretium lacinia in elementum id enim...</p>
						<a href="{{ route('service.show', 1) }}" class="default-btn">
							Подробнее
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

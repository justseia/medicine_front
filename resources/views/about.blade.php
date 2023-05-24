@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>О нас</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}"> Главная</a>
					</li>
					<li class="active">О нас</li>
				</ul>
			</div>
		</div>
		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Image"/>
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Image"/>
	</div>
	<div class="about-area ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8">
					<div class="about-img wow fadeInLeft delay-0-2s">
						<img src="{{ asset('assets/images/about-img.jpg') }}" alt="Image"/>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="about-content wow fadeInRight delay-0-2s">
						<span class="top-title">Кто мы</span>
						<h2>Мы проводим все виды деятельности, чтобы обеспечить безопасное удаленное здравоохранение и телемедицину дома.</h2>
						<p>Мы проводим все виды деятельности, чтобы обеспечить безопасное удаленное здравоохранение и телемедицину дома.</p>
						<p>Мы проводим все виды деятельности, чтобы обеспечить безопасное удаленное здравоохранение и телемедицину дома. Мы проводим все виды деятельности, чтобы обеспечить безопасное удаленное здравоохранение и телемедицину дома.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="what-we-do-area pb-70">
		<div class="container">
			<div class="section-title wow fadeInUp delay-0-2s">
				<span class="top-title">Что мы делаем</span>
				<h2>Особенности, которые нравятся провайдерам и пациентам</h2>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="single-what-we-do wow fadeInUp delay-0-2s">
						<img src="{{ asset('assets/images/do/do-1.png') }}" alt="Изображение"/>
						<h3>Поддержка 24/7</h3>
						<p>Мы помогаем пациентам со всеми онлайн-услугами Telehealth & Telemedicine.</p>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6">
					<div class="single-what-we-do wow fadeInUp delay-0-4s">
						<img src="{{ asset('assets/images/do/do-2.png') }}" alt="Изображение"/>
						<h3>Максимизация дохода</h3>
						<p>Мы помогаем пациентам со всеми онлайн-услугами Telehealth & Telemedicine.</p>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6">
					<div class="single-what-we-do wow fadeInUp delay-0-6s">
						<img src="{{ asset('assets/images/do/do-3.png') }}" alt="Изображение"/>
						<h3>Медицинские планы</h3>
						<p>Мы помогаем пациентам со всеми онлайн-услугами Telehealth & Telemedicine.</p>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6">
					<div class="single-what-we-do wow fadeInUp delay-0-8s">
						<img src="{{ asset('assets/images/do/do-4.png') }}" alt="Изображение"/>
						<h3>Интуитивное планирование</h3>
						<p>Мы помогаем пациентам со всеми онлайн-услугами Telehealth & Telemedicine.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="what-we-provide-area pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="what-we-provide-img mr-15 wow fadeInLeft delay-0-6s">
						<img src="{{ asset('assets/images/what-we-provide-img.png') }}" alt="Изображение"/>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="what-we-provide-content ml-15 wow fadeInRight delay-0-6s">
						<span class="top-title">Что мы предоставляем</span>
						<h2>Разрешает болезнь, взаимодействуя с пациентами на платформе телемедицины.</h2>
						<p>Разрешает болезнь, взаимодействуя с пациентами на платформе телемедицины.</p>

						<ul>
							<li>
								<span>80%</span>
								Пациентов заинтересованы в использовании телемедицины
							</li>
							<li>
								<span>90%</span>
								Пациентов удовлетворены опытом телемедицины
							</li>
							<li>
								<span>40%</span>
								Пациентов используют телемедицину из-за короткого времени поездки
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="counter-area bg-color-3270ff pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-counter-item wow fadeInUp delay-0-2s">
						<h2>
							<span class="odometer" data-count="35200">00</span>
						</h2>
						<p>Завершено виртуальных консультаций</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-counter-item wow fadeInUp delay-0-4s">
						<h2>
							<span class="odometer" data-count="8520">00</span>
						</h2>
						<p>Клинически поддержанных домов</p>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-counter-item wow fadeInUp delay-0-6s">
						<h2>
							<span class="odometer" data-count="3571">00</span>
						</h2>
						<p>Виртуальные решения здравоохранения</p>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-counter-item wow fadeInUp delay-0-8s">
						<h2>
							<span class="odometer" data-count="99.9">00</span>
						</h2>
						<p>Коэффициент успешных подключений</p>
					</div>
				</div>
			</div>
		</div>

		<img src="{{ asset('assets/images/counter-shape-1.png') }}" alt="Image" class="shape counter-shape-1"/>
		<img src="{{ asset('assets/images/counter-shape-2.png') }}" alt="Image" class="shape counter-shape-2"/>
	</div>
	<div class="services-area ptb-100">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center wow fadeInUp delay-0-2s">
				<div class="section-title left-title">
					<span class="top-title">Наши услуги</span>
					<h2>Профессиональные услуги телемедицины</h2>
				</div>
				<a href="{{ route('service.index') }}" class="read-more"> Смотреть все услуги</a>
			</div>
		</div>
	</div>
	<div class="patients-area pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="patients-content mr-15 wow fadeInLeft delay-0-2s">
						<span class="top-title">Как мы помогаем пациентам</span>
						<h2>Мы помогаем пациентам с помощью всех онлайн-сервисов телездравоохранения и телемедицины.</h2>
						<p>Мы помогаем пациентам с помощью всех онлайн-сервисов телездравоохранения и телемедицины.</p>
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<ul class="next-uesed">
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Платите меньше
									</li>
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Качество сравнимо
									</li>
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Безопасно обменивайтесь документами
									</li>
								</ul>
							</div>
							<div class="col-lg-6 col-sm-6">
								<ul>
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Экономия времени
									</li>
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Телездравоохранение во время COVID-19
									</li>
									<li>
										<i class="ri-checkbox-circle-line"></i>
										Основная и неотложная медицинская помощь
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="patients-img ml-15 wow fadeInRight delay-0-2s">
						<img src="{{ asset('assets/images/patients-img.png') }}" alt="Image"/>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

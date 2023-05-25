@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Цены</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}">Главная</a>
					</li>
					<li class="active">Цены</li>
				</ul>
			</div>
		</div>
		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение"/>
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение"/>
	</div>
	<div class="faq-area bg-color-ffffff ptb-100">
		<div class="container">
			<div class="faq-content style-two">
				<div class="accordion" id="accordionExample">
					@foreach([1,2,3,4,5,6] as $i)
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button">ОБЩИЕ УСЛУГИ</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								@foreach([1,2,3,4,5,6] as $b)
									<div class="accordion-body">
										<div class="row">
											<div class="col-8">Консультация первичная (осмотр, оформление документов)</div>
											<div class="col-4">5000</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection

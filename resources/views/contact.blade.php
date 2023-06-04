@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Контакты</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}"> Главная </a>
					</li>
					<li class="active">Контакты</li>
				</ul>
			</div>
		</div>
		<img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Image"/>
		<img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Image"/>
	</div>
	<div class="contact-info-area pt-100 ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="info-content">
						<h3>Контакты</h3>
						<ul>
							<li>
								<span>Адрес:</span>
								Алматы, ул. Манаса 34/1
							</li>
							<li>
								<span>Телефон:</span>
								<a href="tel:+77474092621">+7 (747) 409 2621</a>
							</li>
							<li>
								<span>Время<br/>работы:</span>
								Круглосуточно, каждый день
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d572.7951926337698!2d76.90965194130945!3d43.23496140143344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692f027581ad%3A0x2426740f56437e63!2z0KXQsNC70YvSm9Cw0YDQsNC70YvSmyDQsNKb0L_QsNGA0LDRgtGC0YvSmyDRgtC10YXQvdC-0LvQvtCz0LjRj9C70LDRgCDRg9C90LjQstC10YDRgdC40YLQtdGC0ZY!5e0!3m2!1sen!2sbd!4v1682123558261!5m2!1sen!2sbd"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
{{--	<div class="contact-area ptb-100">--}}
{{--		<div class="container">--}}
{{--			<div class="section-title">--}}
{{--				<span class="top-title">Свяжитесь с нами</span>--}}
{{--				<h2>Свяжитесь с нами</h2>--}}
{{--			</div>--}}
{{--			<div class="contact-form">--}}
{{--				<form id="contactForm">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-6 col-md-6">--}}
{{--							<div class="form-group">--}}
{{--								<label>ФИО</label>--}}
{{--								<input type="text" name="name" id="name" class="form-control" required data-error="Введите ваше имя" placeholder="Ереке"/>--}}
{{--								<div class="help-block with-errors"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-lg-6 col-md-6">--}}
{{--							<div class="form-group">--}}
{{--								<label>Электронная почта</label>--}}
{{--								<input type="email" name="email" id="email" class="form-control" required data-error="Введите вашу электронную почту" placeholder="ereke@gmail.com"/>--}}
{{--								<div class="help-block with-errors"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-lg-6 col-md-6">--}}
{{--							<div class="form-group">--}}
{{--								<label>Телефон</label>--}}
{{--								<input type="text" name="phone_number" id="phone_number" required data-error="Введите ваш номер" class="form-control" placeholder="+7(747) 409 2621"/>--}}
{{--								<div class="help-block with-errors"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-lg-6 col-md-6">--}}
{{--							<div class="form-group">--}}
{{--								<label>Тема сообщения</label>--}}
{{--								<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Введите тему сообщения" placeholder="Тема сообщения"/>--}}
{{--								<div class="help-block with-errors"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-lg-12">--}}
{{--							<div class="form-group">--}}
{{--								<label>Ваше сообщение</label>--}}
{{--								<textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Напишите ваше сообщение" placeholder="Напишите ваше сообщение"></textarea>--}}
{{--								<div class="help-block with-errors"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-12">--}}
{{--							<div class="form-check">--}}
{{--								<div class="form-group">--}}
{{--									<div class="form-check">--}}
{{--										<input name="gridCheck" value="Я согласен с условиями и политикой конфиденциальности." class="form-check-input" type="checkbox" id="gridCheck" required/>--}}
{{--										<label class="form-check-label" for="gridCheck"> Я согласен с <a href="{{ route('login') }}">условиями</a> и <a href="{{ route('login') }}">политикой конфиденциальности</a> </label>--}}
{{--										<div class="help-block with-errors gridCheck-error"></div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="text-center col-lg-12 col-md-12">--}}
{{--							<button type="submit" class="default-btn">Отправить сообщение</button>--}}
{{--							<div id="msgSubmit" class="hidden text-center h3"></div>--}}
{{--							<div class="clearfix"></div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</form>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
@endsection

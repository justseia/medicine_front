@extends('layouts.app')

@section('content')
	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content wow fadeInUp delay-0-2s">
				<h2>Вход</h2>
				<ul>
					<li>
						<a href="{{ route('home.index') }}">Главная</a>
					</li>
					<li class="active">Вход</li>
				</ul>
			</div>
		</div>
		<img src="assets/images/page-shape-1.png" class="shape page-shape-1" alt="Изображение"/>
		<img src="assets/images/page-shape-2.png" class="shape page-shape-2" alt="Изображение"/>
	</div>
	<div class="login-area ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="login-img mr-15 wow fadeInUp delay-0-2s">
						<img src="assets/images/login-img.png" alt="Изображение"/>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login-register-content ml-15 wow fadeInUp delay-0-2s">
						<h2>Вход</h2>
						<form action="{{ route('login') }}" method="post">
							@csrf
							<div class="form-group">
								<label>Email</label>
								<input name="email" type="text" class="form-control" placeholder="ereke@gmail.com"/>
							</div>
							<div class="form-group">
								<label>Пароль</label>
								<input name="password" type="password" class="form-control" placeholder="************"/>
							</div>
							<div class="form-group">
								<a href="{{ route('login') }}">Забыли пароль?</a>
							</div>
							<div class="form-group">
								<button type="submit" class="default-btn">Вход</button>
							</div>
							<p>Новый пользователь? <a href="{{ route('register') }}">Создать аккаунт</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

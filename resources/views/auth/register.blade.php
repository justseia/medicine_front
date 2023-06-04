@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content wow fadeInUp delay-0-2s">
                <h2>Регистрация</h2>
                <ul>
                    <li>
                        <a href="{{ route('login') }}">Вход</a>
                    </li>
                    <li class="active">Регистрация</li>
                </ul>
            </div>
        </div>
        <img src="{{asset('assets/images/page-shape-1.png')}}" class="shape page-shape-1" alt="Изображение"/>
        <img src="{{asset('assets/images/page-shape-2.png')}}" class="shape page-shape-2" alt="Изображение"/>
    </div>
    <div class="register-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-img mr-15 wow fadeInUp delay-0-2s">
                        <img src="{{asset('assets/images/register-img.png')}}" alt="Изображение"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-register-content ml-15 wow fadeInUp delay-0-2s">
                        <h2>Регистрация</h2>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Имя и Фамилия</label>
                                <input name="name" type="text" class="form-control" placeholder="Ереке"/>
                            </div>
                            <div class="form-group">
                                <label>Электронная почта</label>
                                <input name="email" type="email" class="form-control" placeholder="ereke@gmail.com"/>
                            </div>
                            <div class="form-group">
                                <label>Пароль</label>
                                <input name="password" type="password" class="form-control" placeholder="************"/>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('register') }}">Забыли пароль?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="default-btn">Зарегистрироваться</button>
                            </div>
                            <p>Уже есть аккаунт? <a href="{{ 'login' }}">Войти</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

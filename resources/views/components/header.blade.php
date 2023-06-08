<div class="fixed-top" style="background-color: #ffffff">
    <div class="bg-transparent navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home.index') }}" class="font-bold text-[22px]">Dental Clinic</a>
                    </div>
                    <div id="mobile-menu" class="show_menu_mobile">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home.index') }}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('appointment.index') }}">Запись</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('doctor.index') }}">Наши доктора</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('price.index') }}">Цены</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service.index') }}">Сервисы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="tel:+77474092621">
                                    <i class="ri-phone-line"></i>
                                    <span>+7(747) 409 2621</span>
                                </a>
                            </li>
                            @if(auth()->user())
                                @if(auth()->user()->type == 1)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.index') }}">
                                            <i class="ri-account-circle-line"></i>
                                            Админ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="ri-logout-box-r-line"></i>
                                            Выйти
                                        </a>
                                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </li>
                                @elseif(auth()->user()->type == 2)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.index') }}">
                                            <i class="ri-account-circle-line"></i>
                                            Доктор
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="ri-logout-box-r-line"></i>
                                            Выйти
                                        </a>
                                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </li>
                                @elseif(auth()->user()->type == 3)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profile.index') }}">
                                            <i class="ri-account-circle-line"></i>
                                            Профиль
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="ri-logout-box-r-line"></i>
                                            Выйти
                                        </a>
                                        <form id="logout-form" method="post" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <span>Войти</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand font-bold text-[22px]" href="/">Dental Clinic</a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="{{ route('home.index') }}" class="nav-link">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('appointment.index') }}" class="nav-link">Запись</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about.index') }}" class="nav-link">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('doctor.index') }}" class="nav-link">Наши доктора</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('price.index') }}" class="nav-link">Цены</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('service.index') }}" class="nav-link">Сервисы</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact.index') }}" class="nav-link">Контакты</a>
                            </li>
                        </ul>
                        <div class="others-options">
                            <ul>
                                <li>
                                    <a href="tel:+77474092621" class="call-us">
                                        <i class="ri-phone-line"></i>
                                        <span>+7(747) 409 2621</span>
                                    </a>
                                </li>
                                @if(auth()->user())
                                    @if(auth()->user()->type == 1)
                                        <li>
                                            <a href="{{ route('admin.index') }}" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-account-circle-line" style="font-size: 20px;"></i>
                                                Админ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-logout-box-r-line" style="font-size: 20px;"></i>
                                                Выйти
                                            </a>
                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </li>
                                    @elseif(auth()->user()->type == 2)
                                        <li>
                                            <a href="{{ route('admin.index') }}" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-account-circle-line" style="font-size: 20px;"></i>
                                                Доктор
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-logout-box-r-line" style="font-size: 20px;"></i>
                                                Выйти
                                            </a>
                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </li>
                                    @elseif(auth()->user()->type == 3)
                                        <li>
                                            <a href="{{ route('profile.index') }}" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-account-circle-line" style="font-size: 20px;"></i>
                                                Профиль
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="display: flex;flex-direction: column;justify-content: center;align-items: center;font-size: 16px;">
                                                <i class="ri-logout-box-r-line" style="font-size: 20px;"></i>
                                                Выйти
                                            </a>
                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="default-btn">
                                            <span>Войти</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div id="menu-button" class="dot-menu" style="top:-28px;right:10px;">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .show_menu_mobile {
        display: none;
    }

    .full-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(236, 236, 236, 0.97);
        z-index: 1000;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        overflow-y: scroll;
    }
</style>

<script>
    var menuButton = document.getElementById('menu-button');
    var mobileMenu = document.getElementById('mobile-menu');

    mobileMenu.addEventListener('click', function () {
        if (mobileMenu.classList.contains('full-screen')) {
            mobileMenu.classList.remove('full-screen');
        } else {
            mobileMenu.classList.add('full-screen');
        }
    });

    menuButton.addEventListener('click', function () {
        if (mobileMenu.classList.contains('full-screen')) {
            mobileMenu.classList.remove('full-screen');
        } else {
            mobileMenu.classList.add('full-screen');
        }
    });
</script>


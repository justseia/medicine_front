<template>
    <div class="fixed-top" style="background-color: #ffffff">
        <div class="bg-transparent navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <RouterLink to="/" class="font-bold text-[22px]"> Центр Ереке </RouterLink>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <RouterLink class="navbar-brand font-bold text-[22px]" to="/"> Центр Ереке </RouterLink>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <RouterLink to="/" class="nav-link">Главная</RouterLink>
                                </li>
                                <li class="nav-item">
                                    <RouterLink to="/about" class="nav-link">О нас</RouterLink>
                                </li>
                                <li class="nav-item">
                                    <RouterLink to="/our-doctors" class="nav-link">Наши доктора</RouterLink>
                                </li>
                                <li class="nav-item">
                                    <RouterLink to="/prices" class="nav-link">Цены</RouterLink>
                                </li>
                                <li class="nav-item">
                                    <RouterLink to="/news" class="nav-link">Новости</RouterLink>
                                </li>
                                <li class="nav-item">
                                    <RouterLink to="/contact" class="nav-link">Контакты</RouterLink>
                                </li>
                            </ul>

                            <div class="others-options">
                                <ul>
                                    <li>
                                        <form class="search-form">
                                            <input type="text" class="form-control" placeholder="Поиск..." />
                                            <button type="submit" class="src-btn">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="tel:+77474092621" class="call-us">
                                            <i class="ri-phone-line"></i>
                                            <span>+7(747) 409 2621</span>
                                        </a>
                                    </li>
                                    <li>
                                        <RouterLink to="/login" class="default-btn">
                                            <i class="ri-todo-line"></i>
                                            <span>Войти</span>
                                        </RouterLink>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options justify-content-center d-flex align-items-center">
                                <ul>
                                    <li>
                                        <form class="search-form">
                                            <input type="text" class="form-control" placeholder="Поиск..." />
                                            <button type="submit" class="src-btn">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="tel:+77474092621" class="call-us">
                                            <i class="ri-phone-line"></i>
                                            <span>+7(747) 409 2621</span>
                                        </a>
                                    </li>
                                    <li>
                                        <RouterLink to="/login" class="default-btn">
                                            <span>Войти</span>
                                        </RouterLink>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

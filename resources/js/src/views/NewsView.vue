<template>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Блог</h2>
                <ul>
                    <li>
                        <a href="index.html"> Главная </a>
                    </li>
                    <li class="active">Блог</li>
                </ul>
            </div>
        </div>
        <img src="@/assets/images/page-shape-1.png" class="shape page-shape-1" alt="Изображение" />
        <img src="@/assets/images/page-shape-2.png" class="shape page-shape-2" alt="Изображение" />
    </div>
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Записи в блоге</span>
                <h2>Последние статьи из нашего блога</h2>
            </div>
            <div class="row justify-content-center">
                <div v-for="i in [1, 2, 3, 4, 5, 6]" class="col-lg-4 col-md-6">
                    <div class="single-blog wow fadeInUp delay-0-2s">
                        <a href="blog-details.html">
                            <img src="@/assets/images/blog/blog-1.jpg" alt="Изображение" />
                        </a>
                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="ri-calendar-line"></i>
                                    18 декабря 2021
                                </li>
                                <li>
                                    <a href="blog-details.html">
                                        <i class="ri-chat-2-line"></i>
                                        (0) Комментарий
                                    </a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html"> Что такое телемедицина и обслуживание клиентов телездравоохранения? </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

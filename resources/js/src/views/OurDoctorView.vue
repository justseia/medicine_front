<template>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Наши доктора</h2>
                <ul>
                    <li>
                        <a href="index.html"> Главная </a>
                    </li>

                    <li class="active">Наши доктора</li>
                </ul>
            </div>
        </div>

        <img src="@/assets/images/page-shape-1.png" class="shape page-shape-1" alt="Изображение" />
        <img src="@/assets/images/page-shape-2.png" class="shape page-shape-2" alt="Изображение" />
    </div>
    <div class="doctors-area ptb-100">
        <div class="container">
            <div class="section-title wow fadeInUp delay-0-2s">
                <span class="top-title">Наши доктора</span>
                <h2>Познакомьтесь с нашими специалистами</h2>
            </div>

            <div class="row">
                <div v-for="i in [1, 1, 1, 1, 1, 1, 1, 1]" class="col-lg-3 col-sm-6">
                    <div class="single-doctor wow fadeInUp delay-0-2s">
                        <img src="@/assets/images/doctors/doctor-1.jpg" alt="Изображение" />
                        <h3>Доктор Смит Макдональд</h3>
                        <span>Кардиолог</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<template>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Цены</h2>
                <ul>
                    <li>
                        <RouterLink to="/">Главная</RouterLink>
                    </li>
                    <li class="active">Цены</li>
                </ul>
            </div>
        </div>
        <img src="@/assets/images/page-shape-1.png" class="shape page-shape-1" alt="Изображение" />
        <img src="@/assets/images/page-shape-2.png" class="shape page-shape-2" alt="Изображение" />
    </div>
    <div class="faq-area bg-color-ffffff ptb-100">
        <div class="container">
            <div class="faq-content style-two">
                <div class="accordion" id="accordionExample">
                    <div v-for="i in [1, 2, 3, 4, 5, 6]" class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" @click="showMobileMenu = !showMobileMenu" type="button">ОБЩИЕ УСЛУГИ</button>
                        </h2>
                        <div id="collapseOne" :class="{ show: showMobileMenu }" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div v-for="i in [1, 2, 3, 4, 5, 6]" class="accordion-body">
                                <div class="row">
                                    <div class="col-8">Консультация первичная (осмотр, оформление документов)</div>
                                    <div class="col-4">5000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showMobileMenu: false,
        }
    },
}
</script>

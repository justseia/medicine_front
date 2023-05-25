import { createRouter, createWebHistory } from "vue-router"

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("../views/HomeView.vue"),
        },
        {
            path: "/about",
            name: "about",
            component: () => import("../views/AboutView.vue"),
        },
        {
            path: "/register",
            name: "register",
            component: () => import("../views/RegisterView.vue"),
        },
        {
            path: "/login",
            name: "login",
            component: () => import("../views/LoginView.vue"),
        },
        {
            path: "/our-doctors",
            name: "our-doctors",
            component: () => import("../views/OurDoctorView.vue"),
        },
        {
            path: "/prices",
            name: "prices",
            component: () => import("../views/PriceView.vue"),
        },
        {
            path: "/services",
            name: "services",
            component: () => import("../views/PriceView.vue"),
        },
        {
            path: "/news",
            name: "news",
            component: () => import("../views/NewsView.vue"),
        },
        {
            path: "/contact",
            name: "contact",
            component: () => import("../views/ContactView.vue"),
        },
    ],
})

export default router

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import { createApp } from 'vue';

import App from './App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';

import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'home',
            path: '/',
            component: AllProduct
        },
        {
            name: 'create',
            path: '/create',
            component: CreateProduct
        },
        {
            name: 'edit',
            path: '/edit/:id',
            component: EditProduct
        }
    ]
})

export default router;

const app = createApp(App);

app.config.globalProperties.$axios = axios;

app.use(router);
app.mount("#app");
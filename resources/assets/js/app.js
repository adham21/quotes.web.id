require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

import Vue from 'vue'

window.Vue.use(VueRouter);

//DASHBOARD
import DashboardIndex from './components/dashboard/Dashboard.vue'

const routes = [{
        path: '/',
        components: {
            dashboardIndex: DashboardIndex
        },
        name: 'indexDashboard'
    }
    ]

const router = new VueRouter({
    routes
})
const app = new Vue({
    router
}).$mount('#app')
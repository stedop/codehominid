"use strict";

import VueRouter from "vue-router";

// setup routes
import Home from './../components/admin/home.vue';
import Oauth from './../components/admin/oauth.vue';

const routes = [
    { path: '/admin/', name: 'home',  component: Home },
    { path: '/admin/oauth/', name: 'oauth',  component: Oauth },
];

const router =  new VueRouter({
    scrollBehavior ( to, from, savedPosition ) {
        return ( savedPosition ) ? savedPosition : { x: 0, y: 0 };
    },
    mode:'history',
    history: true,
    saveScrollPosition: true,
    root: '/admin/',
    routes // short for routes: routes
});

export default router;

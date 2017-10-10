/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require( './bootstrap' );

import Vue from 'vue'
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue';

import Clients from './components/passport/Clients.vue';
import AuthorisedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';
import router from './routes/admin-routes';

window.Vue = Vue;

Vue.use( BootstrapVue );
Vue.use( VueRouter );
Vue.use( Vuex );

Vue.component( 'passport-clients', Clients );
Vue.component( 'passport-authorized-clients', AuthorisedClients );
Vue.component( 'passport-personal-access-tokens', PersonalAccessTokens );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue( {
    data: () => {
        return {
            drawer: false,
            transitionName: 'slide-left'
        }
    },

    el: '#admin',

    watch: {
        '$route' ( to, from ) {
            const toDepth = to.path.split( '/' ).length;
            const fromDepth = from.path.split( '/' ).length;
            this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
        }
    },

    router
} );

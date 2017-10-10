/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require( './bootstrap' );

import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import Clients from './components/passport/Clients.vue';
import AuthorisedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';

window.Vue = Vue;

Vue.use( Vuetify );
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
            drawer: false;
        }
    },

    el: '#admin'
} );

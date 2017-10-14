/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require( './bootstrap' );

import Vue from 'vue'
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import VueMaterial from 'vue-material';

import Clients from './components/passport/Clients.vue';
import AuthorisedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';
import router from './routes/admin-routes';
import store from './state/store';

window.Vue = Vue;

Vue.use( VueRouter );
Vue.use( Vuex );
Vue.use( VueMaterial );

Vue.component( 'passport-clients', Clients );
Vue.component( 'passport-authorized-clients', AuthorisedClients );
Vue.component( 'passport-personal-access-tokens', PersonalAccessTokens );

Vue.material.registerTheme('default', {
    primary: 'brown',
    accent: 'orange',
    warn: 'red',
    background: 'white'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import {axios, blogPosts} from "./api/api";
import { mapGetters, mapMutations } from 'vuex'

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

    created: () =>{
        this.setPosts(blogPosts);
        this.setApi(axios);

        console.log(this.getApi);
        console.log(this.getPosts);

        this.getApi.get().then(console.log);
    },

    methods: {
        ...mapGetters(
            {
                'getPosts' : 'posts/api',
                'getApi' : 'api'
            }
        ),

        ...mapMutations(
            {
                'setPosts' : 'posts/api',
                'setApi' : 'api'
            }
        ),

       toggleSidenav() {
            this.$refs.leftSidenav.toggle();
        },

        open(ref) {
            console.log('Opened: ' + ref);
        },

        close(ref) {
            console.log('Closed: ' + ref);
        },

        tryAxios() {
            return '';
        },

        tryPosts() {
            return '';
        }


    },

    router,

    store
} );

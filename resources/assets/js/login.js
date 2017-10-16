import Vue from 'vue'
import VueMaterial from 'vue-material';

window.Vue = Vue;

Vue.use( VueMaterial );

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

import axios from "./api/api";
import { mapGetters, mapMutations } from 'vuex'

const app = new Vue( {
    data: () => {
        return {
        }
    },

    el: '#login',
} );

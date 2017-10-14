'use strict';

import Vue from "vue";
import Vuex from "vuex";
import axios from './../api/api.js';

// Modules
import posts from './modules/postsModule'

Vue.use( Vuex );
Vue.use( VueResource );

// Init store
const codehominidStore = new Vuex.Store( {
    state: {
        loading: true, //utilised if I need a loading screen for long data loads
        previousRequest: {}, // so I can abort if needed
        api: {}
    },

    getters: {
        loading: ( state ) => {
            return state.loading;
        },

        api: (state) => {
            return state.api;
        }
    },

    mutations: {
        loading: ( state ) => {
            state.loading = !state.loading;
        },

        api: (state, api) => {
            state.api = api;
        }
    },
    modules: {
        posts
    }
} );

export default codehominidStore;

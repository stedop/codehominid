'use strict';

const posts = {
    namespaced: true,

    state: {
        api : {}
    },

    getters: {
        api : (state) => {
            return state.api;
        }
    },

    mutations: {
        api : (state, api) => {
            state.api = api;
        }
    }
};

export default posts;
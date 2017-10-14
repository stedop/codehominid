"use strict"

import Axios from 'axios';

let baseURL = 'https://stephendop.co.uk/api/v1/';
let token = document.head.querySelector('meta[name="csrf-token"]');
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'X-CSRF-TOKEN' : token.content,
    'Authorization' : 'Bearer ' + process.env.MIX_API_KEY
};

const axios = Axios.create({
    baseURL: baseURL,
    timeout: 1000,
    headers: headers
});

const blogPosts = Axios.create({
    baseURL: baseURL + 'post/',
    timeout: 1000,
    headers: headers
});

export {axios, blogPosts};
export default axios;

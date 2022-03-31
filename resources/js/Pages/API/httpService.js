import axios from "axios";

import store from '../store';

export const apiHttp = axios.create({
    // dont put baseURL yet
  //  baseURL: process.env.VUE_API_API_ENDPOINT,
    headers: {
        "X-Requested-With": "XMLHttpRequest"
    }
});

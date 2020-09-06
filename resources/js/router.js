import Vue from 'vue'
import Router from "vue-router"
import Home from "./components/Home";
import Albums from "./components/Albums";

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home

    },
    {
        path: '/album',
        name: 'albums',
        component: Albums

    },

]




export default new Router({
    mode: 'history',
    routes
})

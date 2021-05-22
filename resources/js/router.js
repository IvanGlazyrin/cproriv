import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./views/Index";
import Profile from "./views/Profile";

const routes = [{
        path: "/",
        component: Index
    },
    {
        path: "/profile",
        component: Profile
    }
];

export default new VueRouter({
    mode: "history",
    routes
})
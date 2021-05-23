import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./views/Index";
import Profile from "./views/Profile";
import SummerSeason from "./views/SummerSeason";
import WinterSeason from "./views/WinterSeason";

const routes = [{
        path: "/",
        component: Index
    },
    {
        path: "/profile",
        component: Profile
    },
    {
        path: "/summer",
        component: SummerSeason
    },
    {
        path: "/winter",
        component: WinterSeason
    }
];

export default new VueRouter({
    mode: "history",
    routes
})
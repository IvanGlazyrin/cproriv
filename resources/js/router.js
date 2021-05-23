import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Index from "./views/Index";
import Profile from "./views/Profile";
import SummerSeason from "./views/SummerSeason";
import WinterSeason from "./views/WinterSeason";
import AddMark from "./views/AddMark";

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
    },
    {
        path: "/addmark",
        component: AddMark
    }
];

export default new VueRouter({
    mode: "history",
    routes
})
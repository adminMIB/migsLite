import VueRouter from "vue-router";
import auth from "./auth";
import non_auth from "./non_auth";

let routes;
let role_user;

if (window.user) {
    role_user = window.user.role;
} else {
    role_user = 0;
}

if (role_user == 0) {
    routes = non_auth;
} else {
    routes = auth;
}

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;

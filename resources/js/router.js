import VueRouter from 'vue-router';
// import Users from './components/Users';
import Main from './components/Main';
// import AutoCategories from './components/category/AutoCategories';
import Page404 from './components/includes/Page404';
import Login from './components/Login';
import Register from './components/Register';


// import Favorites from './components/Favorites';

// export default new VueRouter({
//     routes: [
//         {
//             path: '/',
//             component: Main
//         },
//         {
//             path: '/categories',
//             // name:'search',
//             // component: Search,
//         },
//         {
//             path: '/category/auto/:id',
//             component: AutoCategories,
//
//         },
//         {
//             path: "*",
//             redirect: '/',
//             component: Page404
//         },
//         {
//             path:'/login',
//             component: Login,
//             meta: {
//                 auth: false
//             }
//         },
//         {
//             path: '/favorites',
//             component: Favorites
//         },
//         {
//             path: '/register',
//             component: Register,
//             meta: {
//                 auth: false
//             }
//         }
//
//     ],
//     mode: 'history',
//
// });


export default new VueRouter({
    routes: [
        {
            path: '/',
            component: Main
        },
        {
            path: "*",
            redirect: '/',
            component: Page404
        },
        {
            path:'/login',
            component: Login,
            meta: {
                auth: false
            }
        },
        {
            path: '/register',
            component: Register,
            meta: {
                auth: false
            }
        }

    ],
    mode: 'history',

});

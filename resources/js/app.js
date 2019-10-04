require('./bootstrap');
//
//
// window.Vue = require('vue');
//
// // Vue.component('Footer', require('./components/includes/Footer'));
//
// import VueRouter from 'vue-router';
// import router from './router';
// import App from './App.vue';
//
//
//
// Vue.use(VueRouter);
//
// const app = new Vue({
//     el: '#app',
//     render: h =>h(App),
//     router
// });
//
//
//
//
//
//
//


import Vue from 'vue';
//---------------------------------------

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

//---------------------------------------


import VueRouter from 'vue-router';
Vue.use(VueRouter);

//---------------------------------------


import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

//---------------------------------------



import App from './App.vue';

//---------------------------------------

import router from './router';
Vue.router = router;

//---------------------------------------

import { library } from '@fortawesome/fontawesome-svg-core'
import { faSpinner, faAlignLeft,faUserSecret,faSearch,faHeart,faShoppingCart,faUser,faPlus,faUserPlus,faArrowAltCircleDown } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(faSpinner, faAlignLeft,faUserSecret,faSearch,faHeart,faShoppingCart,faUser,faPlus,faUserPlus,faArrowAltCircleDown)
Vue.config.productionTip = false
Vue.component('font-awesome-icon', FontAwesomeIcon)
//---------------------------------------

import Vuex from 'vuex';

Vue.use(Vuex);


//---------------------------------------


axios.defaults.baseURL = 'http://localhost:8000/api';

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});
App.router = Vue.router
new Vue(App).$mount('#app');









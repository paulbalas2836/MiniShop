require('./bootstrap');

window.Vue = require('vue').default;
window.Fire = new Vue();
import { library } from '@fortawesome/fontawesome-svg-core'
import {faPlusCircle, faSearchPlus} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import Vue from 'vue';
import VueRouter from 'vue-router'
library.add(faPlusCircle,faSearchPlus)
Vue.use(VueRouter)
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.component('item-component', require('./components/ItemComponent.vue').default);
Vue.component('shop-component', require('./components/ShopComponent.vue').default);
Vue.component('register-component', require('./components/RegisterComponent.vue').default);
Vue.component('my-list-component', require('./components/MyListComponent.vue').default);
Vue.prototype.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');
const app = new Vue({
    el: '#app'
});

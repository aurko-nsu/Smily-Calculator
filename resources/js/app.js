require('./bootstrap');

window.Vue = require('vue');

//Import v-from
import { Errors, Form } from 'vform'
window.Form = Form;
Vue.component(Errors.name, Errors)
Vue.component(Errors.name, Errors)

//component
//Vue.component('register-component', require('./components/RegisterComponent.vue').default);

const app = new Vue({
    el: '#app',
});
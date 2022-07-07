require('./bootstrap');

window.Vue = require('vue');

Vue.component('calculate-component', require('./components/CalculateComponent.vue').default);


const app = new Vue({
    el: '#app',
});
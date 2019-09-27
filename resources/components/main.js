import Vue from 'vue';
import VueResource from 'vue-resource';
import moment from 'moment';
import localization from 'moment/locale/pt-br'
import VTooltip from 'v-tooltip';
import VueTheMask from 'vue-the-mask';
import InputTag from 'vue-input-tag';
import VueSweetAlert from 'vue-sweetalert';
import Mixins from './Mixin.js';
import Datepicker from 'vuejs-datepicker';
import money from 'v-money';
import pagination from 'laravel-vue-pagination';
import VueEditor    from "vue2-editor";

// import vSelect from 'vue-select'

Vue.use(VueTheMask);
Vue.use(VTooltip);
Vue.use(VueResource);
Vue.use(VueSweetAlert);
Vue.use(VueEditor);
Vue.mixin(Mixins);
Vue.component('pagination', pagination);

// register directive v-money and component <money>
Vue.use(money, {precision: 4});
Vue.component('Datepicker', Datepicker);
Vue.component('InputTag', InputTag);

// Vue.component('vSelect', vSelect);


// window.Vue = myComponent;
window.Vue = Vue;
window.moment = moment;
window.VTooltip = VTooltip;
window.VueTheMask = VueTheMask;
// window.InputTag = InputTag;
//


// import App from './App.vue'
//
// new Vue({
//   el: '#app',
//   render: h => h(App)
// })


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './../metronic/tools/webpack/vendors/global';
import './../metronic/tools/webpack/scripts';

// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

window.moment = require('moment');
window._ = require('underscore');
// window.route = require('./router.js').route;

$('.bootstrap-select').selectpicker();

// jQuery(document).ready(function() {
//     // predefined ranges
//     let start = moment().subtract(29, 'days');
//     let end = moment();
//
//     $('#search_daterangepicker').daterangepicker({
//         buttonClasses: ' btn',
//         applyClass: 'btn-primary',
//         cancelClass: 'btn-secondary',
//
//         startDate: start,
//         endDate: end,
//         ranges: {
//             'Today': [moment(), moment()],
//             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//             'This Month': [moment().startOf('month'), moment().endOf('month')],
//             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
//         }
//     }, function(start, end, label) {
//         $('#search_daterangepicker .form-control').val( start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
//     });
// });
//

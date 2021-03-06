
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const url = window.location.pathname;
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import vSelect from 'vue-select';
Vue.component('v-select', vSelect);
Vue.component('tags', require('./components/TagsComponent.vue'));
Vue.component('publish', require('./components/PublishPostComponent.vue'));

    if (url === '/admin/create') {
		new Vue({
		  el: '#container-tags',
		});
	}
	else if (url === '/admin/posts') {
		new Vue({
		  el: '#container-publish',
		});
	}






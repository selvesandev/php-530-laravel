window.Vue = require('vue');
import VueRouter from 'vue-router';


import Users from './components/Users.vue';
import CreateUser from './components/CreateUser.vue';

Vue.use(VueRouter);
const routes = [
	{
		path: '/',
		component: Users
	},
	{
		path: '/create-user',
		component: CreateUser
	}
];

const router = new VueRouter({routes});

Vue.component('app', require('./components/App.vue'));

const app = new Vue({
	el: '#app',
	router,
	data:{}
});


import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({

	state: {
		userDashboard: '#',
		user: {
			name: 'Sign-in',
			id: ''
		},
		maincategories: [],
		merchantCategories: [],
		alertMessage: '',
		loginText: true,
		pageTitle: '',
		baseUrl: window.location.origin + '/',
		categoryId: '',
		countries: [],
		provinces: [],
		cities: [],
		
	},
	mutations: {

		cities(state, cities){
			state.cities = cities
		},
		provinces(state, provinces){
			state.provinces = provinces
		},
		countries(state, countries){
			state.countries = countries
		},
		categoryId(state, categoryId){
			state.categoryId = categoryId
		},
		pageTitle(state, pageTitle){
			state.pageTitle = pageTitle
		},
		loginText(state, loginText){
			state.loginText = loginText
		},
		userDashboard(state, userDashboard){
			store.state.userDashboard = userDashboard
		},
		user(state, user){

			store.state.user = user
		},
		merchantCategories(state, merchantCategories){
			store.state.merchantCategories = merchantCategories
		},
		maincategories(state, maincategories){

			store.state.maincategories = maincategories
		},
		alertMessage(state, alertMessage){
			store.state.alertMessage = alertMessage
		}
	},
	getters: {

		cities(){
			return store.state.cities
		},
		provinces(){
			return store.state.provinces
		},
		countries(){
			return store.state.countries
		},
		categoryId(){

			return store.state.categoryId
		},
		baseUrl(){

			return store.state.baseUrl
		},
		pageTitle(){

			return store.state.pageTitle
		},
		
		loginText(){

			return store.state.loginText
		},
		userDashboard(){

			return store.state.userDashboard
		},
		user(){

			return store.state.user
		},
		merchantCategories(){
			return store.state.merchantCategories
		},
		maincategories(){

			return store.state.maincategories
		},
		alertMessage(){

			return store.state.alertMessage
		}
	}
})
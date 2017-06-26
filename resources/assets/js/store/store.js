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
		maincategories: {},
		alertMessage: ''
	},
	mutations: {
		userDashboard(state, userDashboard){
			store.state.userDashboard = userDashboard
		},
		user(state, user){

			store.state.user = user
		},
		maincategories(state, maincategories){

			store.state.maincategories = maincategories
		},
		alertMessage(state, alertMessage){
			store.state.alertMessage = alertMessage
		}
	},
	actions: {

	},
	getters: {
		userDashboard(){

			return store.state.userDashboard
		},
		user(){

			return store.state.user
		},
		maincategories(){

			return store.state.maincategories
		},
		alertMessage(){

			return store.state.alertMessage
		}
	}
})
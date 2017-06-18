import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({

	state: {

		maincategories: {},
		alertMessage: ''
	},
	mutations: {

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

		maincategories(){

			return store.state.maincategories
		},
		alertMessage(){

			return store.state.alertMessage
		}
	}
})
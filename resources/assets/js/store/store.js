import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({

	state: {

		maincategories: {}
	},
	mutations: {

		maincategories(state, maincategories){

			store.state.maincategories = maincategories
		}
	},
	actions: {

	},
	getters: {

		maincategories(){

			return store.state.maincategories
		}
	}
})
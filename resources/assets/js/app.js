import Vue from 'vue'
import axios from 'axios'
import MainNav from './routes/nav/main-nav.vue'
import {store} from './store/store.js'

var app = new Vue({
  
  store,
  data: {
  	a: 'asdf'
  },
  components: {
  	MainNav
  }
  
}).$mount('#app')


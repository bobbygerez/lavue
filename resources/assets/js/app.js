import Vue from 'vue'
import axios from 'axios'
import NavbarBefore from './routes/nav/navbar-before.vue'
import MainNav from './routes/nav/main-nav.vue'
import LoginDialog from './routes/home/login-dialog.vue'
import AccountDialog from './routes/home/account-dialog.vue'
import PasswordRecovery from './routes/home/password-recovery.vue'

import MainFooter from './routes/home/main-footer.vue'
import CopyrightArea from './routes/home/copyright-area.vue'
import VueRouter from 'vue-router'
import { routes } from './routes/routes.vue'
import { store } from './store/store.js'

Vue.use(VueRouter)
const router = new VueRouter({
  routes // short for routes: routes
})

var app = new Vue({
  router,
  store,
  components: {
  	NavbarBefore,
  	MainNav,
  	LoginDialog,
  	AccountDialog,
  	PasswordRecovery,
  	MainFooter,
  	CopyrightArea
  },
  created(){

    this.checkLogin();

  },

  methods: {

     checkLogin(){
        var store = this.$store;
        axios.post(window.location.origin + '/home')
        .then(function(response){
            if(response.data.error === false){
               store.commit('user', response.data.user);
              store.commit('loginText', false);
            }
           
        })
        .catch(function(response){

        })

     }
  }
  
}).$mount('#global-wrapper')


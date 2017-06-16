import Vue from 'vue'
import axios from 'axios'
import NavbarBefore from './routes/nav/navbar-before.vue'
import MainNav from './routes/nav/main-nav.vue'
import LoginDialog from './routes/home/login-dialog.vue'
import AccountDialog from './routes/home/account-dialog.vue'
import PasswordRecovery from './routes/home/password-recovery.vue'
import PageHeader from './routes/home/page-header.vue'
import CategoryFilters from './routes/home/category-filters.vue'
import CategoryResults from './routes/home/category-results.vue'
import MainFooter from './routes/home/main-footer.vue'
import CopyrightArea from './routes/home/copyright-area.vue'
import {store} from './store/store.js'

var app = new Vue({
  
  store,
  data: {
  	a: 'asdf'
  },
  components: {
  	NavbarBefore,
  	MainNav,
  	LoginDialog,
  	AccountDialog,
  	PasswordRecovery,
  	PageHeader,
  	CategoryFilters,
  	CategoryResults,
  	MainFooter,
  	CopyrightArea
  }
  
}).$mount('#global-wrapper')


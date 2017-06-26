<template>
	
	<ul class="nav navbar-nav navbar-right">
		<li v-if="loginText === false">
			<router-link to="/"><i class="fa fa-home" > </i> Home</router-link>
		</li>
		<li v-if="loginText">
			<a href="#" data-effect="mfp-move-from-top" @click="showLoginModal($event)" > {{user.name}}</a> 
		</li>
		
		<li v-else>
			<router-link :to="'/user/' + user.id "><i class="fa fa-user" > </i> {{ user.name}}</router-link>
		</li>

		<li v-if="loginText"><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text"> Create Account</a>
		</li>
		<li v-else>
			<router-link to="/" @click.native="logout"><i class="fa fa-power-off" aria-hidden="true"></i> Log-out</router-link>
		</li>
		<li class="dropdown">
			<a class="fa fa-shopping-cart" href="shopping-cart.html"></a>
			<ul class="dropdown-menu dropdown-menu-shipping-cart">
				<li>
					<a class="dropdown-menu-shipping-cart-img" href="#">
						<img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
					</a>
					<div class="dropdown-menu-shipping-cart-inner">
						<p class="dropdown-menu-shipping-cart-price">$58</p>
						<p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
						</p>
					</div>
				</li>
				<li>
					<a class="dropdown-menu-shipping-cart-img" href="#">
						<img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
					</a>
					<div class="dropdown-menu-shipping-cart-inner">
						<p class="dropdown-menu-shipping-cart-price">$51</p>
						<p class="dropdown-menu-shipping-cart-item"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
						</p>
					</div>
				</li>
				<li>
					<a class="dropdown-menu-shipping-cart-img" href="#">
						<img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
					</a>
					<div class="dropdown-menu-shipping-cart-inner">
						<p class="dropdown-menu-shipping-cart-price">$61</p>
						<p class="dropdown-menu-shipping-cart-item"><a href="#">Apple 11.6" MacBook Air Notebook </a>
						</p>
					</div>
				</li>
				<li>
					<a class="dropdown-menu-shipping-cart-img" href="#">
						<img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
					</a>
					<div class="dropdown-menu-shipping-cart-inner">
						<p class="dropdown-menu-shipping-cart-price">$99</p>
						<p class="dropdown-menu-shipping-cart-item"><a href="#">Fossil Women's Original Boyfriend</a>
						</p>
					</div>
				</li>
				<li>
					<p class="dropdown-menu-shipping-cart-total">Total: $150</p>
					<button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
				</li>
			</ul>
		</li>
		<modal v-model="loginModal" effect="fade" large width="400px">
			<!-- custom header -->
			<div slot="modal-header" class="modal-header">
				<h3 class="widget-title">Member Login</h3>
				<p>Welcome back, friend. Login to get started</p>

			</div>

			<div class="modal-body"> 

				<form method="post" role="form" @submit.prevent="validateBeforeSubmit">
					<div class="form-group">
						<label>Email</label>
						<input name="email" v-model="email" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" type="text" class="form-control" placeholder="Email">
						<i v-show="errors.has('email')" class="fa fa-warning text-danger"></i>
						<span v-cloak v-show="errors.has('email')" class="help text-danger">{{ errors.first('email') }}</span>
						
					</div>
					<div class="form-group">
						<div class="form-group">
							<label>Password</label>
							<input name="password" v-model="password" v-validate="'required'" type="password" class="form-control" placeholder="Password" :class="{'input': true, 'is-danger': errors.has('password') }">
							<i v-show="errors.has('password')" class="fa fa-warning text-danger"></i>
							<span v-cloak v-show="errors.has('password')" class="help text-danger">{{ errors.first('password') }}</span>
						</div>
					</div>
					<div class="checkbox">
						<label>
							<input class="i-check" type="checkbox" />Remeber Me</label>
						</div>
						<div class="pull-right" >
							<button type="button" class="btn btn-default btn-fill" @click="loginModal = false">Exit</button>
							<input class="btn btn-primary" type="submit" value="Sign In" >
						</div>
						<div class="gap gap-small"></div>
						
					</form>
					
				</div>

				<div slot="modal-footer" class="modal-footer">
					<ul class="list-inline">
						<li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
						</li>
						<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
						</li>
					</ul>
				</div>
				<alert v-model="alertLogin" placement="top" :type="alertType" width="350px" dismissable duration="4000">
					<i class="fa" :class="{'fa-warning' : faWarning, 'fa-check-circle' : faSuccess }"> </i>
					<strong>{{ alertTitle }}</strong>
					<p>&nbsp; &nbsp; {{ alertMessage }}</p>
				</alert>
			</modal>
		</ul>
	</template>

<script type="text/javascript">

	import axios from 'axios'
	import modal from 'vue-strap/src/modal' 
	import alert from 'vue-strap/src/alert'
	export default {

		data(){

			return {

				loginModal: false,
				email: '',
				password: '',
				location: window.location.origin + '/',
				alertLogin: false,
				alertType: '',
				alertTitle: '',
				faWarning: false,
				faSuccess: false,

			}
		},
		created(){
			
		},
		components:{

			modal, alert
		},
		computed: {
			
			loginText(){

				return this.$store.getters.loginText
			},
			alertMessage(){

				return this.$store.getters.alertMessage
			},
			userName(){

				return this.$store.getters.userName
			},
			user(){

				return this.$store.getters.user
			}
		},
		methods: {

			logout(){
				var store = this.$store
				axios.get(this.location + 'logout')
				.then(function(response){
					store.commit('user', { name: 'Sign-in', id: ''});
					store.commit('loginText', true);
				})
				.catch()
			},

			showLoginModal(e){
				e.preventDefault()
				this.loginModal = true
			},
			login(e){
				
				var store = this.$store
				var vm = this
				e.preventDefault()
				axios.post(this.location + 'api/login',{

					email: this.email,
					password: this.password
				}).then(function(response){

						vm.alertType = 'success'
						vm.alertTitle = 'Authentication Success'
						vm.faSuccess = true
						store.commit('alertMessage', response.data.message );
						store.commit('user', response.data.user);
						vm.alertLogin = true
						
						store.commit('loginText', false);
						
						setTimeout(function() {
							vm.loginModal = false
						}, 5000);

				}).catch(function(error){
					console.log(error);
					store.commit('alertMessage', error.response.data)
					vm.alertTitle = 'Authentication Failed!'
					vm.alertType = 'danger'
					vm.alertLogin = true
				})
			},

			validateBeforeSubmit(e) {
                	var vm = this
                	var store = this.$store

                    this.$validator.validateAll().then(() => {
                     	
                        vm.login(e)


                    })

                    .catch(() => {
						vm.alertTitle = 'Authentication Failed!'
						vm.alertType = 'danger'
						vm.alertLogin = true
						vm.faWarning = true
						store.commit('alertMessage', 'Please correct all fields!' );
						
                    });
                
            }
		}
	}
</script>
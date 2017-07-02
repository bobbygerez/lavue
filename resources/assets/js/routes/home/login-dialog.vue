<template>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
		<h3 class="widget-title">Member Login</h3>
		<p>Welcome back, friend. Login to get started</p>
		<hr />
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
				<input class="btn btn-primary" type="submit" value="Sign In" >
			</form>
			<div class="gap gap-small"></div>
			<ul class="list-inline">
				<li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
				</li>
				<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
				</li>
			</ul>

			<alert v-model="alertLogin" placement="top" :type="alertType" width="350px" dismissable duration="4000">
                <i class="fa fa-check-circle alert-icon-float-left"></i>
                <strong>{{ alertTitle }}</strong>
                <p>&nbsp; &nbsp; {{ alertMessage }}</p>
             </alert>
	</div>
</template>
<script type="text/javascript">
	
	import Vue from 'vue'
	import VeeValidate from 'vee-validate';
    import alert from 'vue-strap/src/alert'
    Vue.use(VeeValidate);
	import axios from 'axios'

	export default {

		data(){

			return {

				email: '',
				password: '',
				location: window.location.origin + '/',
				alertLogin: false,
				alertType: '',
				alertTitle: '',

			}
		},
		components: {
			alert
		},
		computed: {
			alertMessage(){

				return this.$store.getters.alertMessage
			}
		},
		methods: {

			login(e){
				
				var store = this.$store
				var vm = this
				e.preventDefault()
				axios.post(this.location + 'api/login',{

					email: this.email,
					password: this.password
				}).then(function(response){

					if(response.data.error){

						vm.alertType = 'danger'
						vm.alertTitle = response.data.message
						store.commit('alertMessage', 'Invalid Email or Password' );
						vm.alertLogin = true


					}
					else {
						
						this.alertSuccess = true
						setTimeout(function() {

						}, 5000);
					}

				}).catch(function(response){

				})
			},

			validateBeforeSubmit(e) {
                	var vm = this
                	var store = this.$store
                    this.$validator.validateAll().then(() => {
                     
                        vm.login(e)


                    }).catch(() => {
                        
                        vm.alertType = 'danger'
						vm.alertTitle = 'Authentication Failed!'
						store.commit('alertMessage', 'Please correct all fields!' );
						vm.alertLogin = true
                    });
                
            }
		}
		
	}
</script>

<style type="text/css" scoped>
	.alert-icon-float-left{
      font-size:40px;
      float:left;
      margin: 5px;
      margin-right:20px;
    }
</style>
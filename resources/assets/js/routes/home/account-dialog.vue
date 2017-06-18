<template>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create  Rbsell Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <form id="register-form"  method="post" role="form" @submit.prevent="validateBeforeSubmit">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" v-model="name" v-validate="'required|alpha_spaces'" :class="{'is-danger': errors.has('name') }" type="text" class="form-control" placeholder="Name">
                    <i v-show="errors.has('name')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('name')" class="help text-danger">{{ errors.first('name') }}</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                   <input name="email" v-model="email" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" type="text" class="form-control" placeholder="Email" @blur="checkEmail()">
                    <i v-show="errors.has('email')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('email')" class="help text-danger">{{ errors.first('email') }}</span>
                    
                </div>
                 <div class="form-group">
                    <label>Phone Number</label>
                    <input name="phone_number" data-vv-as="Phone number" v-model="phone_number" v-validate="'required|digits:11'" :class="{'input': true, 'is-danger': errors.has('phone_number') }" type="text"  class="form-control" placeholder="Phone Number (11 digits)" @blur="checkPhone()">
                    <i v-show="errors.has('phone_number')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('phone_number')" class="help text-danger">{{ errors.first('phone_number') }}</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                   <input v-validate v-validate="'required|min:6|confirmed:confirm_password'" name="password" type="password" class="form-control" placeholder="Password" v-model="password" :class="{'input': true, 'is-danger': errors.has('password') }">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input name="confirm_password" v-model="confirm_password" type="password" class="form-control" placeholder="Confirm Password" :class="{'input': true, 'is-danger': errors.has('password') }">
                    <i v-show="errors.has('password')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('password')" class="help text-danger">{{ errors.first('password') }}</span>
                </div>
                
                <input class="btn btn-primary" type="submit" value="Create Account" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
                </li>
            </ul>
             <alert v-model="registerAlert" placement="top" :type="alertType" width="350px" dismissable>
                <span class="icon-info-circled alert-icon-float-left"></span>
                <strong> {{ alertTitle }}</strong>
                <p>&nbsp; &nbsp;{{ alertMessage }}</p>
              </alert>
        </div>
</template>

<script type="text/javascript">
    
    import Vue from 'vue'
    import axios from 'axios'
    import VeeValidate from 'vee-validate';
    import alert from 'vue-strap/src/alert'
    Vue.use(VeeValidate);

    export default {

        data(){

            return {

                location: window.location.origin + '/',
                name: '',
                email: '',
                password: '',
                confirm_password: '',
                phone_number: '',
                registerAlert: false,
                alertType: '',
                alertTitle: ''
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

            validateBeforeSubmit() {
                this.checkEmail();
                var vm = this;
                var store = this.$store;

                if (this.errors.has('email') === false && this.errors.has('phone_number') === false) {

                    this.$validator.validateAll().then(() => {
                     
                         axios.post(this.location + 'register',{
                                name: this.name,
                                email: this.email,
                                password: this.password,
                                confirm_password: this.confirm_password,
                                phone_number: this.phone_number
                         })
                         .then(function(response){
                            
                            store.commit('alertMessage', response.data.message);

                            vm.name = ''
                            vm.email = ''
                            vm.password = ''
                            vm.confirm_password = ''
                            vm.phone_number = ''
                            vm.alertTitle =  'Registration Success.'
                            setTimeout(function(){
                                vm.errors.clear()
                            }, 100)                        

                         })
                         .catch(function(response){

                         })

                         this.registerAlert = true
                         this.alertType = 'success'

                    }).catch(() => {
                        alert('Please correct the error fields.');
                    });
                }
                else{

                    vm.registerAlert = true
                    vm.alertType = 'danger'
                    store.commit('alertMessage', 'Please check your errors.');
                    vm.alertTitle = 'Registration Failed!'
                }
                
            },
            checkEmail(){

                var validator = this.$validator;

                axios.post(this.location + 'api/email/unique',{
                     email : this.email
                })
                .then(function(response){

                    if(response.data.success === false)
                        { validator.errorBag.add('email', response.data.email, 'server'); }
                })
                .catch()
                
                
            },

            checkPhone(){

                var validator = this.$validator;
                axios.post(this.location + 'api/phone/unique',{

                    phone_number: this.phone_number

                }).then(function(response){

                    if(response.data.success === false)
                         { validator.errorBag.add('phone_number', response.data.phone_number, 'server'); }

                }).catch(function(response){

                })
            }

        }
    }
</script>
<style type="text/css" scoped>
    .is-danger{

        border: 1px solid #a94442;
    }
</style>
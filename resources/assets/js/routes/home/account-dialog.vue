<template>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create  Rbsell Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <form id="register-form"  method="post" role="form" @submit.prevent="validateBeforeSubmit">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" v-model="name" v-validate="'required|alpha_spaces'" :class="{'is-danger': errors.has('name') }" type="text" class="form-control" >
                    <i v-show="errors.has('name')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('name')" class="help text-danger">{{ errors.first('name') }}</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                   <input name="email" v-model="email" v-validate="'required|email|fieldName'" :class="{'input': true, 'is-danger': errors.has('email') }" type="text" class="form-control" >
                    <i v-show="errors.has('email')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('email')" class="help text-danger">{{ errors.first('email') }}</span>
                    <i v-show="errors.has('fieldName')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('fieldName')" class="help text-danger">{{ errors.first('fieldName') }}</span>
                </div>
                 <div class="form-group">
                    <label>Phone Number</label>
                    <input name="phone_number" data-vv-as="Phone number" v-model="phone_number" v-validate="'required|digits:11'" :class="{'input': true, 'is-danger': errors.has('phone_number') }" type="text"  class="form-control" >
                    <i v-show="errors.has('phone_number')" class="fa fa-warning text-danger"></i>
                    <span v-cloak v-show="errors.has('phone_number')" class="help text-danger">{{ errors.first('phone_number') }}</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                   <input v-validate data-vv-rules="required|min:6|confirmed:confirm_password" name="password" type="password" class="form-control" placeholder="Password" v-model="password" :class="{'input': true, 'is-danger': errors.has('password') }">
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
        </div>
</template>

<script type="text/javascript">
    
    import Vue from 'vue'
    import axios from 'axios'
    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);

    export default {

        data(){

            return {

                location: window.location.origin + '/',
                name: '',
                email: '',
                password: '',
                confirm_password: '',
                phone_number: ''
            }
        },
        created(){

        },
        methods: {

            validateBeforeSubmit() {
                
                this.$validator.validateAll().then(() => {
                     
                     axios.post(this.location + 'register',{
                            name: this.name,
                            email: this.email,
                            password: this.password,
                            confirm_password: this.confirm_password,
                            phone_number: this.phone_number
                     })
                     .then(function(response){
                        
                     

                     })
                     .catch(function(response){

                     })

                }).catch(() => {
                    alert('Please correct the error fields.');
                });
            }
        },
      watch: {

        email(){

            this.$validator.errorBag.add('fieldName', 'errorMessage', 'server');
        }
      }
    }
</script>
<style type="text/css" scoped>
    .is-danger{

        border: 1px solid #a94442;
    }
</style>
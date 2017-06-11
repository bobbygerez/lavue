<template>
	<div class="collapse navbar-collapse" id="main-nav-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; All Categories<i class="drop-caret" data-toggle="dropdown"></i></a>
				<ul class="dropdown-menu dropdown-menu-category">
					<li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Home & Garden</a></li>
				</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-left navbar-main-search" role="search">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Search the Entire Store..." />
			</div>
			<a class="fa fa-search navbar-main-search-submit" href="#"></a>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a>
			</li>
			<li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a>
			</li>
			<li class="dropdown">
				<a class="fa fa-shopping-cart" href="shopping-cart.html"></a>
				<ul class="dropdown-menu dropdown-menu-shipping-cart">
					<li>
						<a class="dropdown-menu-shipping-cart-img" href="#">
							<img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
						</a>
						<div class="dropdown-menu-shipping-cart-inner">
							<p class="dropdown-menu-shipping-cart-price">$45</p>
							<p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
							</p>
						</div>
					</li>
					
					<li>
						<p class="dropdown-menu-shipping-cart-total">Total: $150</p>
						<button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</template>
<script type="text/javascript">
import axios from 'axios'

	export default {

		data(){

			return {

				windowLocation: window.location.origin + '/'
			}
		},
		created(){

			this.mainCategories()
		},
		methods: {

			mainCategories(){

				var store = this.$store
				axios.get(this.windowLocation + 'api/main-categories')
				.then(function(response){
					store.commit('maincategories', response.data.maincategories);
				})
			}
		}
	}
</script>
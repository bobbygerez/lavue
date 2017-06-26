<template>
    <nav class="navbar navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo-w.png" alt="Image Alternative text" title="Image Title" />
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu dropdown-menu-category">
                            <li v-for="maincategory in maincategories"><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>{{ maincategory.name }}</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6" v-for="merchantCat in maincategory.merchant_category">
                                                    <h5 class="dropdown-menu-category-title"><a href="#">{{ merchantCat.name }}</a></h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li v-for="sub in merchantCat.merchant_subcategory"><a href="#">{{ sub.name }}</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            
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
                    <sign-in></sign-in>
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
                </ul>
            </div>
        </div>
    </nav>
    
</template>
<script type="text/javascript">
    import axios from 'axios'
    import signIn from '../home/sign-in'

    export default {

      data(){

         return {

            windowLocation: window.location.origin + '/'
        }
    },
    components:{
        signIn
    },
    created(){

     this.mainCategories()
 },
 computed: {

    maincategories(){

        return this.$store.getters.maincategories
    }
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
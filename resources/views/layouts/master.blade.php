<!DOCTYPE HTML>
<html>

<head>
    <title>Lavue</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('template1/css/all.css') }}">

</head>

<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="navbar-before mobile-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="navbar-before-sign">Everything You Need is theBox</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Contact Us</a>
                            </li>
                            <li><a href="#">FAQ</a>
                            </li>
                            <li><a href="#">Wishlist</a>
                            </li>
                            <li><a href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email or Username</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Remeber Me</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
                </li>
                <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create TheBox Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Create Account" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
            <h3 class="widget-title">Password Recovery</h3>
            <p>Enter Your Email and We Will Send the Instructions</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <nav class="navbar navbar-inverse navbar-main yamm navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        Lavue
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; All Categories<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">
                                @foreach($mainCategories as $mainCat)
                                <li><a href="{{ url('browse/'.$mainCat->name, Obfuscate::encode($mainCat->id) ) }}" class="capitalize-text"><i class="fa fa-plug dropdown-menu-category-icon"></i>{{ $mainCat->getOriginal('name') }}</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    @foreach($mainCat->merchantCategory as $merchantCat)
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title"><a href="#"> {{ $merchantCat->name }}</a></h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            @foreach($merchantCat->merchantSubcategory as $merchantSub)
                                                            <li><a href="#">{{ $merchantSub->name }}</a>
                                                                <p>{{ $merchantSub->desc }}</p>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/5-i.png" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                @endforeach
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
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$57</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$66</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Apple 11.6" MacBook Air Notebook </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$76</p>
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

        <div class="container" id="app">
            <header class="page-header">
                <h1 class="page-title">Lavue <span class="company-quote">- Build your trust</span> </h1> 
                <div class="col-md-4">
                    <ol class="breadcrumb page-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a>
                        </li>
                    </ol>
                </div>
                <div class="col-md-8">

                    <div class="row">

                        <span class="category-pagination-sign pull-left" style="padding: 15px; display: inline-block;">Showing 1 - 12 from 58 items</span>
                        <nav class="pull-right">
                        <paginate
                            :page-count="productLastPage"
                            :container-class="'pagination'"
                            :prev-text="'prev'"
                            :next-text="'next'"
                            :click-handler="clickCallback">
                        </paginate>
                        <nav>
                    </nav>
                </div>
            </header>
            <div class="row">
                <div class="col-md-3">
                    <aside class="category-filters">
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Category</h3>
                            <select class="form-control">
                                <option>asdf asdf</option>
                            </select>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Price</h3>
                            <input type="text" id="price-slider" />
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Relese Date</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 30 days<span class="category-filters-amount">(100)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 90 days<span class="category-filters-amount">(59)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Comming Soon<span class="category-filters-amount">(94)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Brand</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Apple<span class="category-filters-amount">(10)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Samsung<span class="category-filters-amount">(15)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />LG<span class="category-filters-amount">(86)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Sony<span class="category-filters-amount">(62)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Micosoft<span class="category-filters-amount">(49)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Dell<span class="category-filters-amount">(75)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />HP<span class="category-filters-amount">(22)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Carrier</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />AT&amp;T<span class="category-filters-amount">(32)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Verizon<span class="category-filters-amount">(37)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Sprint<span class="category-filters-amount">(86)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />T-Mobile<span class="category-filters-amount">(80)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Virgin Mobile<span class="category-filters-amount">(66)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Operating System</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Android<span class="category-filters-amount">(41)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />iOS<span class="category-filters-amount">(18)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Windows 8<span class="category-filters-amount">(98)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />BlackberryOS<span class="category-filters-amount">(40)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Discount</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(99)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(59)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(62)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(10)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Features</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(29)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(97)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(99)</span>
                                </label>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <span v-for="product in products.data" >
                    <div class="row" data-gutter="15" >
                        <div class="col-md-4" v-for="prod in product">
                            <div class="product" >
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap" v-for="photo in prod.photos" v-if="photo.is_primary">
                                    <img class="product-img-primary" :src="windowLocation + photo.path" alt="Image Alternative text" title="Image Title" />
                                    <img class="product-img-alt" :src="windowLocation + photo.path" alt="Image Alternative text" title="Image Title" />
                                </div>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <ul class="product-caption-rating">
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-caption-title">Apple iPhone 5c - 16GB - GSM Factory Unlocked White Blue Green Pink Yellow</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">$127</span>
                                    </div>
                                    <ul class="product-caption-feature-list">
                                        <li>Free Shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="clearfix"></div>
                    <span>
                   
                </div>
            </div>
        </div>
        <div class="gap"></div>

        <footer class="main-footer">
            <div class="container">
                <div class="row row-col-gap" data-gutter="60">
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">TheBox Shop</h4>
                        <p>Velit proin tempus accumsan ridiculus taciti tempor consequat aliquam felis lacinia lorem</p>
                        <ul class="main-footer-social-list">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Popular Tags</h4>
                        <ul class="main-footer-tag-list">
                            <li><a href="#">New Season</a>
                            </li>
                            <li><a href="#">Watches</a>
                            </li>
                            <li><a href="#">woman</a>
                            </li>
                            <li><a href="#">classic</a>
                            </li>
                            <li><a href="#">modern</a>
                            </li>
                            <li><a href="#">blue</a>
                            </li>
                            <li><a href="#">shoes</a>
                            </li>
                            <li><a href="#">running</a>
                            </li>
                            <li><a href="#">jeans</a>
                            </li>
                            <li><a href="#">sports</a>
                            </li>
                            <li><a href="#">laptops</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Newsletter</h4>
                        <form>
                            <div class="form-group">
                                <label>Sign up to the newsletter</label>
                                <input class="newsletter-input form-control" placeholder="Your e-mail address" type="text" />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Sign up" />
                        </form>
                    </div>
                </div>
                <ul class="main-footer-links-list">
                    <li><a href="#">About Us</a>
                    </li>
                    <li><a href="#">Jobs</a>
                    </li>
                    <li><a href="#">Legal</a>
                    </li>
                    <li><a href="#">Support & Customer Service</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Privacy</a>
                    </li>
                    <li><a href="#">Terms</a>
                    </li>
                    <li><a href="#">Press</a>
                    </li>
                    <li><a href="#">Shipping</a>
                    </li>
                    <li><a href="#">Payments & Refunds</a>
                    </li>
                </ul>
                <img class="main-footer-img" src="img/test_footer2-i.png" alt="Image Alternative text" title="Image Title" />
            </div>
        </footer>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright &copy; <a href="#">TheBox</a> 2014. Designed my remtsoy. All rights reseved</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="payment-icons-list">
                            <li>
                                <img src="img/payment/visa-straight-32px.png" alt="Image Alternative text" title="Pay with Visa" />
                            </li>
                            <li>
                                <img src="img/payment/mastercard-straight-32px.png" alt="Image Alternative text" title="Pay with Mastercard" />
                            </li>
                            <li>
                                <img src="img/payment/paypal-straight-32px.png" alt="Image Alternative text" title="Pay with Paypal" />
                            </li>
                            <li>
                                <img src="img/payment/visa-electron-straight-32px.png" alt="Image Alternative text" title="Pay with Visa-electron" />
                            </li>
                            <li>
                                <img src="img/payment/maestro-straight-32px.png" alt="Image Alternative text" title="Pay with Maestro" />
                            </li>
                            <li>
                                <img src="img/payment/discover-straight-32px.png" alt="Image Alternative text" title="Pay with Discover" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('template1/js/all.js') }}"></script>





</body>

</html>

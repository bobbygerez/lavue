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
    <div id="app">
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
                <main-nav></main-nav>
            </div>
        </nav>

        <div class="container" id="app">
             <header class="page-header">
                <h1 class="page-title">Man's Fashion</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Fashion</a>
                    </li>
                    <li class="active">Man</li>
                </ol>
                <ul class="category-selections clearfix">
                    <li>
                        <a class="fa fa-th-large category-selections-icon active" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-th-list category-selections-icon" href="#"></a>
                    </li>
                    <li><span class="category-selections-sign">Sort by :</span>
                        <select class="category-selections-select">
                            <option selected>Newest First</option>
                            <option>Best Sellers</option>
                            <option>Trending Now</option>
                            <option>Best Raited</option>
                            <option>Price : Lowest First</option>
                            <option>Price : Highest First</option>
                            <option>Title : A - Z</option>
                            <option>Title : Z - A</option>
                        </select>
                    </li>
                    <li><span class="category-selections-sign">Items :</span>
                        <select class="category-selections-select">
                            <option>9 / page</option>
                            <option selected>12 / page</option>
                            <option>18 / page</option>
                            <option>All</option>
                        </select>
                    </li>
                </ul>
            </header>

            <div class="row">
                <div class="col-md-3">
                    <aside class="category-filters">
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Category</h3>
                            <ul class="cateogry-filters-list">
                                <li><a href="#">Clothing</a>
                                </li>
                                <li><a href="#">Shoes</a>
                                </li>
                                <li><a href="#">Accessories</a>
                                </li>
                                <li><a href="#">Jewerly</a>
                                </li>
                                <li><a href="#">Watches</a>
                                </li>
                                <li><a href="#">Fine Jewerly</a>
                                </li>
                            </ul>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Price</h3>
                            <input type="text" id="price-slider" />
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Relese Date</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 30 days<span class="category-filters-amount">(89)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Last 90 days<span class="category-filters-amount">(49)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Comming Soon<span class="category-filters-amount">(67)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Brand</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />191 United<span class="category-filters-amount">(55)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Adidas<span class="category-filters-amount">(46)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Balmain<span class="category-filters-amount">(83)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Diesel<span class="category-filters-amount">(84)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Enzo<span class="category-filters-amount">(100)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Gap<span class="category-filters-amount">(56)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Hanes<span class="category-filters-amount">(66)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Jockey<span class="category-filters-amount">(51)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Just Cavalli<span class="category-filters-amount">(32)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Lacoste<span class="category-filters-amount">(13)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Lee<span class="category-filters-amount">(65)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Nike<span class="category-filters-amount">(15)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Paul Jones<span class="category-filters-amount">(87)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Puma<span class="category-filters-amount">(40)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Shark<span class="category-filters-amount">(63)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Discount</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(98)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(96)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(78)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(95)</span>
                                </label>
                            </div>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Features</h3>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(59)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(45)</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(35)</span>
                                </label>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="row" data-gutter="15">
                        <div class="col-md-4">
                            <div class="product product-sm-left ">
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap">
                                    <img class="product-img" src="{{ asset('template1/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-caption-title">Rock & Republic Bootcut Jeans Henlee Stonewashed Blue New Mens Jean Denim New</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">$96</span>
                                    </div>
                                    <ul class="product-caption-feature-list">
                                        <li>Free Shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="category-pagination-sign">58 items found in Cell Phones. Showing 1 - 12</p>
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul class="pagination category-pagination pull-right">
                                    <li class="active"><a href="#">1</a>
                                    </li>
                                    <li><a href="#">2</a>
                                    </li>
                                    <li><a href="#">3</a>
                                    </li>
                                    <li><a href="#">4</a>
                                    </li>
                                    <li><a href="#">5</a>
                                    </li>
                                    <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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
                        <h4 class="widget-title-sm">Popular Tags </h4>
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
                <img class="main-footer-img" src="{{ asset('template1/img/test_footer2-i.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <img src="{{ asset('template1/img/payment/visa-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Visa" />
                            </li>
                            <li>
                                <img src="{{ asset('template1/img/payment/mastercard-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Mastercard" />
                            </li>
                            <li>
                                <img src="{{ asset('template1/img/payment/paypal-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Paypal" />
                            </li>
                            <li>
                                <img src="{{ asset('template1/img/payment/visa-electron-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Visa-electron" />
                            </li>
                            <li>
                                <img src="{{ asset('template1/img/payment/maestro-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Maestro" />
                            </li>
                            <li>
                                <img src="{{ asset('template1/img/payment/discover-straight-32px.png') }}" alt="Image Alternative text" title="Pay with Discover" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('template1/js/all.js') }}"></script>


</body>

</html>

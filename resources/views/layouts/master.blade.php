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
        <navbar-before></navbar-before>
        <login-dialog></login-dialog>
        <account-dialog></account-dialog>
        <password-recovery></password-recovery>
        <main-nav></main-nav>

        <router-view></router-view>
        
        <div class="gap"></div>
        
        <main-footer></main-footer>
        <copyright-area></copyright-area>
    </div>
    
    </div>
     <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('template1/js/jquery.js') }}"></script>
    <script src="{{ asset('template1/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template1/js/icheck.js') }}"></script>
    <script src="{{ asset('template1/js/ionrangeslider.js') }}"></script>
    <script src="{{ asset('template1/js/jqzoom.js') }}"></script>
    <script src="{{ asset('template1/js/card-payment.js') }}"></script>
    <script src="{{ asset('template1/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('template1/js/magnific.js') }}"></script>
    <script src="{{ asset('template1/js/custom.js') }}"></script>
   


</body>

</html>

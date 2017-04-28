const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'public/template1/css/bootstrap.css',
    'public/template1/css/font-awesome.css',
    'public/template1/css/styles.css',
    'public/template1/css/mystyles.css',
    'public/template1/css/public/css',
    'public/css/app.css',
], 'public/template1/css/all.css');


mix.scripts([
    'public/template1/js/jquery.js',
    'public/template1/js/bootstrap.js',
    'public/template1/js/icheck.js',
    'public/template1/js/ionrangeslider.js',
    'public/template1/js/jqzoom.js',
    'public/template1/js/card-payment.js',
    'public/template1/js/owl-carousel.js',
    'public/template1/js/magnific.js',
    'public/template1/js/custom.js',
    'public/js/app.js'
], 'public/template1/js/all.js');


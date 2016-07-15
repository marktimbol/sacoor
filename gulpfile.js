var elixir = require('laravel-elixir');
const bowersPath = '../../../bower_components';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('admin.scss', 'resources/assets/css/admin.css')
        .styles([
            bowersPath + '/bootstrap/dist/css/bootstrap.css',
            'admin.css'
        ], 'public/css/admin.css')

        .scripts([
            bowersPath + '/jquery/dist/jquery.js',
            bowersPath + '/bootstrap/dist/js/bootstrap.js',
        ], 'public/js/admin.js')

        .styles([
            bowersPath + '/sweetalert/dist/sweetalert.css',
        ], 'public/css/flash.css')

        .scripts([
            bowersPath + '/sweetalert/dist/sweetalert-dev.js'
        ], 'public/js/flash.js')

    mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
    		bowersPath + '/bootstrap/dist/css/bootstrap.css',
            // 'filter.css',
            'mobile.nav.css',
    		'app.css'
    	], 'public/css/app.css')

    	.scripts([
    		'modernizr.custom.js',
            bowersPath + '/jquery/dist/jquery.js',
    		bowersPath + '/bootstrap/dist/js/bootstrap.js',
            'classie.js',
            'mobile.nav.js',
    	], 'public/js/app.js')

        .styles([
            bowersPath + '/owlcarousel/owl-carousel/owl.carousel.css',
            bowersPath + '/owlcarousel/owl-carousel/owl.theme.css',
            bowersPath + '/owlcarousel/owl-carousel/owl.transitions.css',
        ], 'public/css/carousel.css')

        .scripts([
            bowersPath + '/owlcarousel/owl-carousel/owl.carousel.js',
            'carousel.js'
        ], 'public/js/carousel.js')

        .styles([
            'filter.css',
        ], 'public/css/filter.css')

        .scripts([
            'jquery.mixitup.min.js',
            'filter.js',
        ], 'public/js/filter.js')

    	.copy('bower_components/bootstrap/dist/fonts', 'public/build/fonts')

    	.version([
    		'public/css/app.css',
    		'public/js/app.js',
            'public/css/admin.css',
            'public/js/admin.js',
            'public/css/carousel.css',
            'public/js/carousel.js',
            'public/css/filter.css',
            'public/js/filter.js',
            'public/css/flash.css',
            'public/js/flash.js'
    	]);
});

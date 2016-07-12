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
    mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
    		bowersPath + '/bootstrap/dist/css/bootstrap.css',
            'filter.css',
    		'app.css'
    	], 'public/css/app.css')

    	.scripts([
    		'modernizr.js',
            bowersPath + '/jquery/dist/jquery.js',
    		bowersPath + '/bootstrap/dist/js/bootstrap.js',
            'jquery.mixitup.min.js',
            'filter.js',
    	], 'public/js/app.js')

    	.copy('bower_components/bootstrap/dist/fonts', 'public/build/fonts')

    	.version([
    		'public/css/app.css',
    		'public/js/app.js'
    	]);
});

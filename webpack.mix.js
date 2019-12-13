const mix = require('laravel-mix');

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

mix.js(['resources/js/bootstrap.bundle.min.js',
		'resources/js/chart-area-demo.js',
		'resources/js/jquery.easing.min.js',
		'resources/js/jquery.min.js',
		'resources/js/sb-admin-2.min.js'],
		 'public.js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/sb-admin-2.min.css','resources/css/all.min.css'],
    	'public/css/all.css');
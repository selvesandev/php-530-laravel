let mix = require('laravel-mix');

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

mix.js(['resources/assets/js/app.js'], 'public/js')
	.js('resources/assets/js/vueapp.js', 'public/js')
	.js('resources/assets/js/custom/admin-custom.js', 'public/js/customa.js')
	.sass('resources/assets/sass/app.scss', 'public/css')
	.sass('resources/assets/sass/vueapp.scss', 'public/css')
	.sass('resources/assets/sass/custom/admin-sass.scss', 'public/css/customa.css');

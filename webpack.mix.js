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

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


   mix.styles([
      'public/css/bootstrap-4.3.1/bootstrap.min.css',
      'public/css/font-awesome/css/font-awesome.min.css',
   ], 
   'public/css/hasil_combine.css').version();
   
   mix.scripts([
      'public/js/JQuery/jquery-3.4.1.min.js',
      'public/js/bootstrap-4.3.1/bootstrap.min.js',
      'public/js/bootstrap-4.3.1/popper.min.js',
   ],
   'public/js/hasil_combine.js').version();
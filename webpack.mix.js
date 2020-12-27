const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/bootstrap.css',
    // 'resources/css/styleSideBar.css',
    'resources/css/style.css',
] ,'public/css/app.css' , 'public/css');
mix.scripts([
    'resources/js/slim.js',
    'resources/js/popper.js',
    'resources/js/bootstrap.js',
],'public/js/app.js' , 'public/js');
mix.scripts([
    'resources/js/solid.js',
    'resources/js/fontawesome.js'
] , 'public/js/fontawesome.js' , 'public/js')

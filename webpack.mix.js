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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/aside/aside.js', 'public/js/')
    .js('resources/js/main/request-part.js', 'public/js/')
    .copy('resources/images', 'public/images', false)
    .copy('resources/js/jquery-3.1.1.js', 'public/js', false)
    .copy('resources/js/jquery-ui-1.12.1.min.js', 'public/js', false)
    .copy('resources/js/jquery.min.js', 'public/js', false)
    .copy('resources/js/bootstrap-nav.min.js', 'public/js', false)
    .copy('resources/sass/jquery-ui.min.css', 'public/css', false)
    .sass('resources/sass/app.scss', 'public/css/style.css');

mix.scripts([
    'resources/js/main-scrips/jquery.ui.timepicker.js',
    'resources/js/main-scrips/jquery.ui.datepicker-ru.js',
    'resources/js/main-scrips/jquery.ui.datepicker-uk.js',
    'resources/js/main-scrips/jquery.thumbhover.js',
    'resources/js/main-scrips/jquery.form.js',
    'resources/js/main-scrips/jquery.tags.js',
], 'public/js/main-scripts.js');

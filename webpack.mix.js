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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/metronic/src/assets/sass/pages/login/login-4.scss', 'public/css/pages');

// copy images folder into laravel public folder
mix.copyDirectory('resources/assets/metronic/src/assets/media', 'public/assets/media');
mix.copyDirectory('resources/assets/media/logos', 'public/assets/media/logos');

/**
 * plugins specific issue workaround for webpack
 * @see https://github.com/morrisjs/morris.js/issues/697
 * @see https://stackoverflow.com/questions/33998262/jquery-ui-and-webpack-how-to-manage-it-into-module
 */
mix.webpackConfig({
    resolve: {
        alias: {
            'morris.js': 'morris.js/morris.js',
            'jquery-ui': 'jquery-ui',
        },
    },
});

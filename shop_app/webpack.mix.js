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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/admin.js', 'public/js')
   .js('resources/js/adminEdit.js', 'public/js')
   .js('resources/js/userCreate.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/adminEdit.css', 'public/css')
    .postCss('resources/css/userCreate.css', 'public/css')
    .postCss('resources/css/userIndex.css', 'public/css');

if (mix.inProduction()) {
    mix.version();
}

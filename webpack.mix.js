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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/backend.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css', {
        precision: 10
    })
    .sass('resources/assets/sass/backend.scss', 'public/css', {
        precision: 10
    })
    .copy('resources/assets/images','public/images')
    .sourceMaps()
    .browserSync({
        open: false,
        proxy: {
            target: '192.168.1.201:8000',
            reqHeaders: function() {
                return {
                    host: '192.168.1.201:3000'
                };
            }
        }
    });

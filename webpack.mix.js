let mix = require('laravel-mix');

mix.js('src/js/script.js', 'dist').vue().sass('src/scss/style.scss', 'dist').options({
    processCssUrls: false
});
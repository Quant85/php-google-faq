// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('./assets/sass/style.scss', 'assets/css').setPublicPath('public');

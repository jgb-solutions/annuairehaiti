var elixir = require('laravel-elixir');

require( 'elixir-jshint' );
require('laravel-elixir-vue-2');

var jsAssets = 'resources/assets/js/';
var jsVendor = jsAssets + 'vendor/';

elixir(function(mix) {
   mix
   // .copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.js')
   // .copy('node_modules/axios/dist/axios.min.js', 'resources/assets/js/vendor/axios.js')
   // .copy('node_modules/vee-validate/dist/vee-validate.min.js', 'resources/assets/js/vendor/vee-validate.js')

   // .less('style.less', 'public/css/app.css')

   // .jshint([
   //    jsAssets + 'app.js'
   // ])

   .webpack('app.js')

   // .combine([
   //    jsVendor + 'jquery.js',
   //    jsVendor + 'bootstrap.js',
   //    jsVendor + 'axios.js',
   // ], 'public/js/vendor.js')

   .version(['css/app.css', 'js/vendor.js', 'js/app.js'])
});
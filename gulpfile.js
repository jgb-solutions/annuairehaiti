var elixir = require('laravel-elixir');

elixir(function(mix) {
   mix
   // .copy('vendor/bower/angular/angular.js', 'resources/assets/js/angular.js')
   // .copy('vendor/bower/jquery/dist/jquery.min.js', 'resources/assets/js/jquery.js')

   .less('style.less', 'public/css/app.css')

   // .styles([
   //    'font-awesome.css',
   // ])

   .scripts([
      'vendor/jquery.js',
      'vendor/vue.js',
      'vendor/bootstrap.min.js',
      // 'vendor/angular.js',
      // 'vendor/angular-animate.min.js',
      // 'vendor/loading-bar.js',
      // 'vendor/bootstrap.min.js',
      // 'vendor/ng-file-upload-shim.min.js',
      // 'vendor/ng-file-upload.min.js',
      'app.js',
      // 'ng-search.js',
      // 'ng-upload.js',
   ])

   .version(['css/app.css', 'js/all.js']);
});
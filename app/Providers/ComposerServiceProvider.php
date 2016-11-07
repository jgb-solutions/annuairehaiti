<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer(
         ['inc.modules.categories'],
         'App\Http\ViewComposers\SiteComposer@categories'
      );
      view()->composer(
         ['inc.modules.departments'],
         'App\Http\ViewComposers\SiteComposer@departments'
      );
      view()->composer(
         ['inc.modules.cities'],
         'App\Http\ViewComposers\SiteComposer@cities'
      );
      view()->composer(
         ['inc.modules.towns'],
         'App\Http\ViewComposers\SiteComposer@towns'
      );
      view()->composer(
         ['inc.navigation'],
         'App\Http\ViewComposers\SiteComposer@navigation'
      );
      view()->composer(
         ['inc.sponsors'],
         'App\Http\ViewComposers\SiteComposer@sponsors'
      );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Http\Middleware;

use App, Closure, Session;

class ChangeAppLanguage
{
   protected $languages = ['en', 'fr'];

   public function handle($request, Closure $next)
   {
     if ($request->has('lang') && in_array($request->lang, $this->languages)) {
         Session::put('lang', $request->lang);
     }

     App::setLocale(Session::get('lang', 'fr'));

     return $next($request);
   }
}

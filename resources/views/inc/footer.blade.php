<section class="footer" >
 	<div class="container">
     	<div class="row">
        	@include('inc.modules.categories')
         @include('inc.modules.departments')
         @include('inc.modules.cities')
         @include('inc.modules.towns')

      </div>

      {{-- Credits and social links --}}
      <div class="row">
         <div class="col-sm-12">
            <hr class="dark">
         	<div class="text-center">
               <p>
                  <a href="https://twitter.com/annuairehaiti" target="_blank" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/annuairehaiti" target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                  <a href="https://plus.google.com/106816270262102955445/posts" target="_blank" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
               </p>
               <p>&copy;
                  <strong>
                     <a href="{{ config('site.url') }}"
                        title="@lang('text.site.description')">
                        {{ config('site.name') }}
                     </a>
                  </strong>
                  {{ date('Y') }}
               </p>

               <br />

               <p class="text-center">
               	<small>
                     @lang('text.site.devBy') <strong>
                     <a href="https://jgbnd.com" target="_blank"
                        title="@lang('text.site.jgbnd')">JGB! Neat Design</a></strong>
                  </small>
               </p>
            </div>
         </div>
     	</div>
 	</div>
</section>

{{--@include('inc.searchModal')--}}
@include('inc.assets.scripts')

</body>
</html>
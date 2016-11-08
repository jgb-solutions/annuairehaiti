{{-- <section class="sponsors bg-white">
   <div class="container">
      <h3 class="text-center">
         <span class="fa fa-heart"></span>
         @lang('text.sponsors.title')
      </h3>
     	<div class="row paddingTopBottom40">
         @foreach ($sponsors as $enterprise)
            <div class="col-sm-2 col-xs-4">
               <p>
               	<a href="{{ $enterprise->url }}">
                  	<img width="319" height="319"
                        src="{{ $enterprise->logoUrl }}"
                        class="img-bordered 	img-rounded img-responsive"
                        alt="{{$enterprise->name}}" title="{{$enterprise->name}}" />
                  </a>
               </p>
            </div>
         @endforeach
     	</div>
     	<h3 class="text-center">
         <span class="fa fa-star"></span>
         @lang('text.sponsors.callToAction')
         <a href="{{ AH::route('contact') }}">@lang('text.pages.contact')</a>.
      </h3>
 	</div>
</section> --}}
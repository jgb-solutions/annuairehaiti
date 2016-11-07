@extends('layouts.default')

@section('content')

{{--     <div class="container-fluid">
        <div class="row">
            @include('inc.carousel')
        </div>
    </div> --}}

<section class="entries">
   <div class="container">
  	   <div class="row paddingTopBottom40">
   		@foreach($enterprises as $enterprise)
       		<div class="col-sm-3 col-xs-6">
     			    @include('enterprises.unit')
            </div>
   		@endforeach
  	   </div>
   </div>
</section>

    {{-- // @include('inc.cta') --}}

   @include('inc.sponsors')

@stop
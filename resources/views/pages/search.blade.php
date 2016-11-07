@extends('layouts.page')

@section('title')
    {{ $title }}
@stop

@section('page')

   @if ( $results->count() > 0 )
      <h2 class="text-center">({{$results->count()}}) {{ $title }}</h2>

      <br>

      <div class="row">

      @foreach ($results as $enterprise )
         <div class="col-sm-4 col-xs-6">
            @include('enterprises.unit')
         </div>
      @endforeach

      </div>

      <br>

      <div class="col-sm-12 text-center">
         {{ $results->links() }}
      </div>
   @else
      <h2 class="text-center">{{$title}}</h2>

      <hr>

      <p>
         @lang('text.pages.notFoundSearchOther') <a href="/">@lang('text.pages.home').</a>
      </p>

    @endif
@stop
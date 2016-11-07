@extends('layouts.page-full')

@section('title')
    {{ $title }}
@stop

@section('page-full')

   <h2 class="text-center">
      <i class="fa fa-th-large"></i>
      {{ $title }}
   </h2>

   <br>

   @foreach ( $towns as $town )
      <div class="col-sm-3 col-xs-6 text-center">
         @include('towns.unit')
      </div>
   @endforeach
@stop
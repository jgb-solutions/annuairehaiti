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

   @foreach ( $cities as $city )
      <div class="col-sm-3 col-xs-6 text-center">
         @include('cities.unit')
      </div>
   @endforeach
@stop
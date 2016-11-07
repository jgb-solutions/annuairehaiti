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

   @foreach ( $categories as $category )
      <div class="col-sm-3 col-xs-6 text-center">
         @include('categories.unit')
      </div>
   @endforeach
@stop
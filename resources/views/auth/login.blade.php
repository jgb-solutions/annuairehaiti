@extends('layouts.page-small')

@section('title')
  {{ $title }}
@stop

@section('page-small')

   <div class="col-sm-12">
      <h2 class="text-center">
         {{ $title }}
      </h2>

      <hr>

      @include('inc.alert')

      @include('inc.errors')
      @include('auth.form-login')
    </div>
@stop
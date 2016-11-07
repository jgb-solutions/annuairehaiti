@extends('layouts.page-small')

@section('title')
  {{ $title }}
@stop

@section('page-small')

   <div class="col-sm-12">
      <h2 class="text-center">
         <i class="fa fa-user"></i> {{ $title }}
      </h2>
      <hr>

      @include('inc.alert')

      @include('inc.errors')
      @include('users.form-edit')
    </div>
@stop
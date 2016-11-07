@extends('layouts.page-average')

@section('title')
    {{ $title = trans('text.enterprises.edit') }}
@stop

@section('page-average')

   <div class="col-sm-12">
      <h2 class="text-center">
         <i class="fa fa-th"></i> {{ $title }}
      </h2>

      <hr>

      @include('inc.errors')

      @include('enterprises.form-edit')

   </div>
@stop
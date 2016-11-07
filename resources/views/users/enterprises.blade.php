@extends('layouts.page')

@section('title')
    {{ $title = trans('text.enterprises.my') }}
@stop

@section('page')

    <h2 class="text-center">
        <i class="fa fa-th"></i> {{ $title }}
    </h2>

    <br>

    @include('inc.alert')

    @foreach( $enterprises as $enterprise )

    <div class="col-sm-4 col-xs-6">
        @include('enterprises.unit')
    </div>

    @endforeach

    <div class="col-sm-12 text-center">
        {{ $enterprises->links() }}
    </div>

@stop
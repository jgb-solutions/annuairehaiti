@extends('layouts.page')

@section('title')
    {{ $title = trans('text.pages.404') }}
@stop

@section('page')

    <h2 class="text-center">{{ $title }}</h2>
    <p>
        @lang('text.pages.notFoundGoTo') <a href="/">@lang('text.pages.home').</a>
    </p>

@stop
@extends('layouts.page-average')

@section('title')
	{{ $title }}
@stop

@section('page-average')
    <div class="col-sm-12">
        <h2 class="text-center">{{ $title }}</h2>
        <hr>

        @include('inc.alert')

        @include('inc.errors')

        <h3>
            @lang('text.enterprises.my') ({{ $enterprises->count() }})
        </h3>

        <div class="row">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <table class="table table-striped table-bordered text-center">

                    @foreach ($enterprises as $enterprise)
                         <tr>
                            <td>
                                <img src="{{ $enterprise->logoUrl }}" style="height:50px">
                            </td>
                            <td>
                                <a href="{{ $enterprise->url }}">
                                    {{ $enterprise->name }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ $enterprise->editUrl }}"
                                    class="btn btn-default"
                                    title="Modifier la catégorie {{ $enterprise->name }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a
                                    href="{{ $enterprise->deleteUrl }}"
                                    class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr?')"
                                    title="Effacer la catégorie {{ $enterprise->name }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
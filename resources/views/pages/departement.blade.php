@extends('pages.page')

@section('title')
    {{ $title }}
@stop

@section('page')

    <h2 class="text-center">
        <span class="glyphicon glyphicon-th"></span>
        {{ $title }}
    </h2>

    <hr>

    @if ( $entreprises )
        @foreach( $entreprises as $entreprise )

            <div class="row">
                <div class="col-sm-4 col-xs-4">
                    <a href="/entreprise/{{ $entreprise->slug }}">
                        <img
                            width="319"
                            height="317"
                            src="/uploads/images/{{ $entreprise->logo }}"
                            class="img-responsive img-rounded img-bordered"
                            alt="{{ $entreprise->name }}"
                            title="{{ $entreprise->name }}" />
                    </a>
                </div>
                <div class="col-sm-8 col-xs-8">
                    <a href="/entreprise/{{ $entreprise->slug }}">
                        <h3 class="noMarginTop forced">{{ $entreprise->name }}</h3>
                    </a>
                    <p>{{ $entreprise->details }}</p>
                </div>
            </div>
            <hr>

        @endforeach
    @endif

    <div class="col-sm-12 text-center">
        {{ $entreprises->links() }}
    </div>

@stop
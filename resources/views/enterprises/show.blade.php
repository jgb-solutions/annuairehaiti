@extends('layouts.page-single')

@section('title')
    {{ $enterprise->name }}
@stop

@section('page')

    <article>

        @include('inc.alert')

        <h2 class="text-center business-title">
            {{ $enterprise->name }}
            {!! Auth::check() ?
                "<small>
                    <a href='$enterprise->editUrl'>
                        <i class='fa fa-edit'></i>
                    </a>
                </small>" :''
            !!}
        </h2>
        <div class="row">
            <img
                class="img-responsive"
                width="768px"
                height="317"
                src="{{ $enterprise->headerImageUrl }}"
                alt="{{ $enterprise->name }}"
                title="{{ $enterprise->name }}">

            <div class=" col-sm-12">
                <div class="row">
                    <div class="col-sm-4 col-xs-5">
                        <img
                            width="319"
                            height="317"
                            src="{{ $enterprise->logoUrl }}"
                            class="img-rounded img-bordered img-responsive business-logo"
                            alt="{{ $enterprise->name }}"
                            title="{{ $enterprise->name }}">
                    </div>

                    <div class="col-sm-8 col-xs-7 social-group">
                        @if ( $enterprise->twitter )
                            <a
                                href="{{ $enterprise->twitter }}"
                                target="_blank"
                                class="btn btn-info">
                                <i class="fa fa-twitter"></i>
                                <span class="social-icons fab"><b>Twitter</b></span>
                            </a>
                        @endif

                        @if ( $enterprise->facebook )
                            <a
                                href="{{ $enterprise->facebook }}"
                                target="_blank"
                                class="btn btn-primary">
                                <i class="fa fa-facebook"></i>
                                <span class="social-icons fab"><b>Facebook</b></span>
                            </a>
                        @endif

                        @if ($enterprise->google)
                            <a
                                href="{{ $enterprise->google }}"
                                target="_blank"
                                class="btn btn-danger">
                                <i class="fa fa-google-plus"></i>
                                <span class="social-icons fab"><b>Google+</b></span>
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-sm-12 data">
                <div class="panel panel-default">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <i class="fa fa-th-list" aria-hidden="true"></i> @lang('text.enterprises.category.label')
                                </td>
                                <td>
                                    <a
                                        href="{{ $enterprise->categoryUrl }}"
                                        title="@lang('text.enterprises.category.title') {{ $enterprise->category->name }}">
                                        {{ $enterprise->category->name }}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa fa-th-large" aria-hidden="true"></i> @lang('text.enterprises.department.label')
                                </td>
                                <td>
                                    <a
                                        href="{{ $enterprise->departmentUrl }}"
                                        title="@lang('text.enterprises.department.title') {{ $enterprise->department->name }}">{{ $enterprise->department->name }}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa fa-road" aria-hidden="true"></i> @lang('text.enterprises.city.label')
                                </td>
                                <td>
                                    <a
                                        href="{{ $enterprise->cityUrl }}"
                                        title="@lang('text.enterprises.city.title') {{ $enterprise->city->name }}">
                                        {{ $enterprise->city->name }}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa fa-th" aria-hidden="true"></i> @lang('text.enterprises.town.label')
                                </td>
                                <td>
                                    <a
                                        href="{{ $enterprise->townUrl }}"
                                        title="@lang('text.enterprises.town.title') {{ $enterprise->town->name }}">{{ $enterprise->town->name }}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <i class="fa fa-phone" aria-hidden="true"></i> @lang('text.enterprises.telephone.label')
                                </td>
                                <td>
                                    <a href="tel:+509{{ str_replace(' ', '', $enterprise->telephone ) }}"
                                        title="@lang('text.enterprises.telephone.title')">
                                        {{ $enterprise->telephone }}
                                    </a>
                                </td>
                            </tr>

                            @if ( $enterprise->fax )
                                <tr>
                                    <td>
                                        <i class="fa fa-print" aria-hidden="true"></i> Fax
                                    </td>
                                    <td>
                                        <a
                                            href="tel:+509{{ str_replace(' ', '', $enterprise->fax ) }}"
                                            title="@lang('text.enterprises.fax.title')">
                                            {{ $enterprise->fax }}
                                        </a>
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <td>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> E-mail
                                </td>
                                <td>
                                    <a
                                        href="mailto:{{ $enterprise->email }}"
                                        title = "@lang('text.enterprises.email.title')"
                                        target="_top">
                                        {{ $enterprise->email }}
                                    </a>
                                </td>
                            </tr>

                            @if ( $enterprise->website )
                                <tr>
                                    <td>
                                        <i class="fa fa-globe" aria-hidden="true"></i> @lang('text.enterprises.website.label')
                                    </td>
                                    <td>
                                        <a
                                            href="{{ $enterprise->website }}"
                                            title = "@lang('text.enterprises.website.title')"
                                            target="_blank">
                                            {{ $enterprise->website }}
                                        </a>
                                    </td>
                                </tr>
                            @endif

                            <tr>
                                <td>
                                    <i class="fa fa-home" aria-hidden="true"></i> @lang('text.enterprises.address.label')
                                </td>
                                <td>{{ $enterprise->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div role="tabpanel">
                  <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">

                        @if( $enterprise->details )
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details"
                                    role="tab" data-toggle="tab"
                                    title="@lang('text.enterprises.details.title')">
                                    <i class="fa fa-star-empty"></i> @lang('text.enterprises.details.label')</a>
                            </li>
                        @endif

                        @if( $enterprise->map )
                            <li role="presentation">
                                <a href="#carte" aria-controls="carte"
                                 role="tab" data-toggle="tab"
                                 title="@lang('text.enterprises.map.title')">
                                 <i class="fa fa-map-marker"></i> @lang('text.enterprises.map.label')
                              </a>
                            </li>
                        @endif

                        <li role="presentation">
                            <a href="#ent-share" aria-controls="ent-share"
                              role="tab" data-toggle="tab"
                              title="@lang('text.enterprises.sharing.title')">
                              <i class="fa fa-share"></i> @lang('text.enterprises.sharing.label')</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content marginTop10">
                        @if( $enterprise->details )
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <p>{{ $enterprise->details }}</p>
                            </div>
                        @endif

                        @if( $enterprise->map )
                            <div role="tabpanel" class="tab-pane" id="carte">
                                <div class="google-maps">
                                    {{ $enterprise->map }}
                                </div>
                            </div>
                        @endif

                        <div role="tabpanel" class="tab-pane" id="ent-share">
                           @include('inc.sharing')
                        </div>
                    </div>
                </div>

                @if ($related->count())
                    @include('enterprises.related')
                @endif
            </div>
        </div>
    </article>

@stop
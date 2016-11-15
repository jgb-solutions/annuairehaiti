<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta id="token" name="token" value="{{csrf_token()}}">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<title>
		@section('title')
			@lang('text.site.description')
		@show
		&mdash; {{ config('site.name') }}
	</title>

	<!-- SEO -->
	@section('seo')
		<meta name="description" content="{{ config('site.description') }}"/>
		<link rel="canonical" href="{{ config('site.url') }}" />
		<meta property="og:locale" content="fr_FR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="{{ config('site.name') }} &mdash; {{ config('site.description') }}" />
		<meta property="og:description" content="{{ config('site.description') }}" />
		<meta property="og:url" content="{{ config('site.url') }}" />
		<meta property="og:site_name" content="{{ config('site.name') }}" />
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:description" content="{{ config('site.description') }}"/>
		<meta name="twitter:title" content="{{ config('site.name') }} &mdash; {{ config('site.description') }}"/>
		<meta name="twitter:domain" content="{{ config('site.name') }}"/>
	@show
	<!-- / SEO -->

	@include('inc.assets.styles')
</head>
<body>
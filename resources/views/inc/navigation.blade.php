<nav class="navbar navbar-default navbar-custom">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		     </button>
      		<a class="navbar-brand visible-xs" href="{{AH::route('home')}}">
        			<img src="{{ config('site.logo_url') }}">
      		</a>
    			{{-- <a class="navbar-brand" height="50"
    				href="/"
    				title="Retourner sur la page d'accueil">
    				<i class="fa-home fa-lg fa"></i>
    			</a> --}}
    	</div>

	    <div id="navbar" class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav">
				<li>
					<a
						title="Toutes les Entreprises" href="/entreprises">
						<i class="fa fa-building"></i>
						@lang('text.enterprises.name')
					</a>
				</li>
				<li>
					<a title="Catégories d'Entreprises" href="{{AH::route('categories')}}">
						<i class="fa fa-th-large"></i>
						@lang('text.categories.name')
					</a>
				</li>
				<li>
					<a title="Catégories d'Entreprises" href="{{AH::route('departments')}}">
						<i class="fa fa-th-large"></i>
						@lang('text.departments.name')
					</a>
				</li>
				<li>
					<a title="Catégories d'Entreprises" href="{{AH::route('cities')}}">
						<i class="fa fa-th-large"></i>
						@lang('text.cities.name')
					</a>
				</li>
				<li>
					<a title="Catégories d'Entreprises" href="{{AH::route('towns')}}">
						<i class="fa fa-th-large"></i>
						@lang('text.towns.name')
					</a>
				</li>
				<li>
					<a
						title="Contactez-nous" href="{{ AH::route('contact') }}">
						<i class="fa fa-envelope"></i>
						Contact
					</a>
				</li>
				<li class="searchAnchor">
					<a
						title="Rechercher dans l'Annuaire"
						href="{{ AH::route('search') }}">
						<i class="fa-search fa"></i>
						<span>@lang('text.search.label')</span>
					</a>
				</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				@if (Auth::check())
					<li class="dropdown">
						<a	href="#"
							class="dropdown-toggle"
							data-toggle="dropdown">
							<i class="fa fa-user"></i>
							{{ $user->firstname }} <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a	title="Inscrivez votre entreprise dans l'Annuaire du pays"
									href="{{AH::route('enterprise.create')}}">
									<i class="fa fa-building"></i>
									@lang('text.enterprises.add')
								</a>
							</li>
		 					<li>
								<a href="{{AH::route('account.enterprises')}}">
									<i class="fa fa-building"></i>
									@lang('text.enterprises.my')
								</a>
							</li>
							{{-- @if ( Auth::user()->role == 'admin' ) --}}
							{{-- <li>
								<a href="{{AH::route('admin.index')}}">
									<i class="fa fa-th-list"></i>
									Administration
								</a>
							</li> --}}
							{{-- @endif --}}
							<li>
								<a href="{{AH::route('account.index')}}">
									<i class="fa fa-user"></i>
									@lang('text.account.my')
								</a>
							</li>
							<li>
								<a href="{{AH::route('account.edit')}}">
									<i class="fa fa-edit"></i>
									@lang('text.account.edit')
								</a>
							</li>
							<li>
								<a
									href="{{AH::route('auth.logout')}}"
									title="@lang('text.account.disconnect')">
									<i class="fa fa-sign-out"></i>
									@lang('text.account.logout')
								</a>
							</li>
						</ul>
					</li>
				@else
					<li>
						<a
							href='{{AH::route('auth.login')}}'
							title="@lang('text.account.connect')">
							<i class="fa fa-user"></i>
							@lang('text.account.login')
						</a>
					</li>
					{{-- <li>
						<a
							href='{{AH::route('auth.register')}}'
							title="Connectez-vous ou créez un compte sur AH">
							<i class="fa fa-user"></i>
							@lang('text.account.create')
						</a>
					</li> --}}
				@endif
			</ul>
			{{-- 	<form class="navbar-form navbar-right" title="Rechercher dans l'Annuaire"
				action="{{AH::route('search')}}">
	      	<div class="input-group">
		      	<input type="text" class="form-control"
		      		placeholder="Rechercher une entreprise..."
		      		name="q">
		      	<span class="input-group-btn">
		        		<button class="btn btn-yellow" type="submit">
		        			<i class="fa-search fa"></i>
		        		</button>
		      	</span>
		    	</div><!-- /input-group -->
	      </form> --}}
		</div>
  	</div>
</nav>
<form role="search" action="{{AH::route('search')}}" id="ahSearchForm">
	<div class="input-group">
     	<input
     		id="query"
     		name="q"
     		type="text"
     		class="form-control"
     		placeholder="@lang('form.enterprise.search')"
     		autocomplete="off"
     		v-model="searchTerm"
     		@keyup="search">

     		<span class="input-group-btn">
	         	<button class="btn btn-yellow" type="submit">
	            	<i class="fa fa-search fa-2x" v-show="!loading"></i>
					<i class="fa fa-spinner fa-spin fa-2x" v-show="loading"></i>
	         	</button>
     		</span>
 	</div>
 	{{-- <br> --}}
 	<div class="results" v-show="results.length" style="position:relative">
 		<ul class="list-group" style="position:absolute;width:100%;z-index:2">
 			<li v-for="enterprise in results" class="list-group-item">
 				<a :href="enterprise.url" style="display:block">@{{ enterprise.name }}</a>
 			</li>
 		</ul>
 	</div>
 	<p class="bg-info padding" v-show="noResults">
 		@lang('text.search.notFound')
 	</p>
</form>
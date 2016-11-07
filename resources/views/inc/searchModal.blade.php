<div class="modal fade" id="ahSearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" hidden="true">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">@lang('form.enterprise.search')</h4>
			</div>
			<div class="modal-body">
				@include('inc.searchform')
				<div id="ahSearchResults"></div>
			</div>
			<div class="modal-footer" hidden="true">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
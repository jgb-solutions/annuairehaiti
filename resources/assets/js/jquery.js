export default function($) {
	// let $ahSearchForm 	= $('#ahSearchForm'),
	let searchArea = $('#search-area');

	$('li.searchAnchor a').on('click', (e) => {
		e.preventDefault();

		searchArea.slideToggle()
	});
};
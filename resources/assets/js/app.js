(function( $ ) {
	var $ahSearchForm 	= $('#ahSearchForm'),
		$searchArea 	= $('#search-area'),
		$input 					= $ahSearchForm.find('input#query'),
		$ahSearchResults		= $('#ahSearchResults');
		$ahSearchModal 		= $('#ahSearchModal');

	$('li.searchAnchor a').on('click', function(e) {
		e.preventDefault();

		// $ahSearchModal.modal()
			// .on('shown.bs.modal', function() {
			// 	ahSearchS = $(this).find('input#query');
			// 	ahSearchS.focus();
			// });
		$searchArea.slideToggle()
	});


/*
* Contact Form
*/
	var form = $('form#jqueryForm'),
		results = $('#results'),
		notice = '',
		$sucFail,
		$envoyer = '<span class="glyphicon glyphicon-send"></span>';

	$( document ).on('submit', 'form#jqueryForm', function(e) {

		e.preventDefault();

		var $this = $(this),
			$name = $this.find('#name'),
			$email = $this.find('#email'),
			$subject = $this.find('#subject'),
			$message = $this.find('textarea#message');

		if ( $.trim( $name.val() ) === '' ) {
			notice = 1;
			$name.next().show();
		} else {
			$name.next().hide();
		}

		if ( $.trim( $email.val() ) === '' ) {
			notice = 1;
			$email.next().show();
		} else {
			$email.next().hide();
		}

		if ( $.trim( $subject.val() ) === '' ) {
			notice = 1;
			$subject.next().show();
		} else {
			$subject.next().hide();
		}

		if ( $.trim( $message.val() ) === '' ) {
			notice = 1;
			$message.next().show();
		} else {
			$message.next().hide();
		}

		if ( notice === 0 ) {

			$('span.error').hide();

			results.html('');

			$this.find('button[type=submit]').text(' En train d\'envoyer...').prepend( $envoyer );

			var data = $this.serialize();

			$.post( AH_JS.ajax_url + '?action=ah_contact_form', data, function( data ) {

				$this.slideUp('slow');

				var anchor = $('<button></button>', {
					'class': 'btn btn-success',
					'id'	 : 'resetForm',
					'text' : 'Envoyer un autre message'
				});

				anchor.prepend( $envoyer + ' ');

				if ( 1 === parseInt( data ) ) {
					$data = '<h4>E-mail envoyé avec succès!</h4>';
					$sucFail = '<div class="bg-success left-content col-sm-12 text-center"></div>'
				}
				else if ( 0 === parseInt( data ) ) {
					$data = '<h4>Echec d\'envoi de l\'e-mail</h4>';
					$sucFail = '<div class="bg-danger left-content col-sm-12 text-center"></div>'
				}

				$pSuc = $( $sucFail ).html( $data ).append( anchor );
				results.html( $pSuc ).show();

				$this.find('button[type=submit]').text(' Envoyer').prepend( $envoyer );

			});
		} else {
			// results.html( '<p class="text-danger">' + notice + '</p>' );
			// $('span.error').show();
			notice = 0;
		}

	});

	$( document ).on('click', '#resetForm', function(e) {
		form[0].reset();
		form.slideDown('slow', function() {
			results.fadeOut();
			$(this).find('input')[0].focus();
		});

		e.preventDefault();
	});
})( jQuery );


// Vue Search
var searchForm = new Vue({
	el: '#ahSearchForm',

	data: {
		searchTerm: '',
		results: [],
		noResults: false,
		loading: false
	},

	methods: {
		search: function() {
			vm = this;

			if (this.searchTerm.length > 2) {
				$.ajax({
					url: ah.searchUrl,
					dataType: 'json',
					data: {q: this.searchTerm},
				})
				.done(function(response) {
					if (response.data.length > 0) {
						vm.loading = true;
						vm.noResults = false;
						vm.results = response.data;
						// console.log(vm.results);
					} else {
						vm.results = [];
						vm.noResults = true;
						console.log('no results');
					}
				})
				.fail(function(error) {
					console.log("error: " + error);
				})
				.complete(function() {
					vm.loading = false;
					console.log('complete');
				});
			} else {
				this.results = [];
				vm.noResults = false;

			}
		}
	},
});
import messages from './locale/fr';
import Vue from 'vue';
import VeeValidate, { Validator } from 'vee-validate';

Vue.use(VeeValidate);

// Validator.updateDictionary({
// 	fr: {
// 		mesages: {
// 			email: (field) => 'Some English message'
// 		}
// 	}
// });

(function( $ ) {
	// let $ahSearchForm 	= $('#ahSearchForm'),
	let searchArea = $('#search-area');

	$('li.searchAnchor a').on('click', (e) => {
		e.preventDefault();

		searchArea.slideToggle()
	});

})(jQuery);

// // Vue Bootstraping

// // <input v-el="avatar" type="file" name="avatar" id="avatar" v-on="change:upload">
// // methods: {
// //     upload: function(e) {
// //         e.preventDefault();
// //         var files = this.$$.avatar.files;
// //         var data = new FormData();
// //         // for single file
// //         data.append('avatar', files[0]);
// //        // Or for multiple files you can also do
// //         //  _.each(files, function(v, k){
// //         //    data.append('avatars['+k+']', v);
// //        // });

// //         this.$http.post('/avatars/upload', data, function (data, status, request) {
// //               //handling
// //         }).error(function (data, status, request) {
// //              //handling
// //         });
// //     }
// // }

const $http = axios.create({
  	headers: {
  		'X-Requested-With': 'XMLHttpRequest',
  		'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
 	}
});

Vue.prototype.$http = $http;

// Vue Search
let searchForm = new Vue({
	el: '#ahSearchForm',

	data: {
		searchTerm: '',
		results: [],
		noResults: false,
		loading: false
	},

	methods: {
		search () {
			let vm = this;

			if (vm.searchTerm.length > 2) {
				vm.$http.get(ah.searchUrl, {
					params: {q: vm.searchTerm},
				})
				.then(function(response) {
					console.log('object', vm);
					console.log(response);
					let data = response.data.data;

					if (data.length > 0) {
						vm.loading = true;
						vm.noResults = false;
						vm.results = data;
						vm.loading = false;
					} else {
						vm.results = [];
						vm.noResults = true;
						console.log('no results');
					}
				})
				.catch(function(error) {
					console.log("error: " + error);
				});
			} else {
				this.results = [];
				this.noResults = false;

			}
		}
	},
});


let contactForm = new Vue({
	el: '#contactForm',

	data: {
		sending: false
	},

	methods: {
		validateBeforeSubmit: function (e) {
			this.$validator.validateAll();

            if (this.errors.any()) {
                e.preventDefault();
            }
		}
	},

	created () {
        this.$validator.setLocale('fr'); // Switch locale for this instance.
    }
});
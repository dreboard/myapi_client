/**
 * AJAX Events
 *
 * Perform ajax api GET and POST calls
 */

$( document ).ready(function() {
	$('#usersTblHdr').hide();
	try{
		var url = BASE_URL+"Welcome/getVersion";
		console.log('Ready');
		var versionUrl = "http://api.dev-php.site/v1/";
		$.get( url, function( data ) {
			$( "#results" ).text( data );
		});
	} catch (err){
		console.log(err.message);
	}


	/**
	 * Test Object
	 *
	 * @return object
	 */
	var test = {

		/**
		 * Register test object functions
		 *
		 * These function will fire or will be
		 * immediately attached to the dom
		 *
		 * @return void
		 */
		init: function () {
			this.dom();
			this.getEvent();
			this.postEvent();
			this.getUsers();
			this.getUser();
		},

		/**
		 * Set DOM elements to object vars
		 *
		 * @return void
		 */
		dom: function () {
			this.$contentbox = $('.page_body');
			this.$ajax_btn = $('#ajax_btn');
			this.$post_btn = $('#post_btn');
			this.$users_btn =  $('#users_btn');

			this.$usersLink =  $('.usersLink');
			this.$otherBtns = this.$contentbox.find('#ajax_btn');
		},

		/**
		 * Register a post event
		 *
		 * @return void
		 */
		postEvent: function () {
			this.$post_btn.on('click', this.postAjax);
		},

		/**
		 * Register a get event
		 *
		 * @return void
		 */
		getEvent: function () {
			this.$ajax_btn.on('click', this.getAjax);
		},

		/**
		 * Register a get event
		 *
		 * @return void
		 */
		getUsers: function () {
			this.$users_btn.on('click', this.getAllUsers);
		},

		/**
		 * Get user
		 *
		 * @return void
		 */
		getUser: function () {
			//this.$usersLink.on('click', this.userInfo);
			$( "#usersTblHdr" ).on( "click", "a", function( event ) {
				event.preventDefault();
				return false;
			});
		},
		/**
		 * Register a test event
		 *
		 * @return void
		 */
		doDiv: function (event) {
			try{
				event.preventDefault();
				alert('hello');
				$('#post_response').text('Some new text');
			} catch(err){
				mainObj.error(err.message);
			}

		},

		/**
		 * Fire an ajax GET request
		 *
		 * @return object
		 */
		getAjax: function (event) {
			event.preventDefault();
			try {
				$('#results').empty();
				var some_post_vars = {
					var1: 'one',
					var2: 'two'
				};

				$.ajax({
					method: "GET",
					data: some_post_vars,   // method #1
					//data: { name: "Dre", location: "Board" }  // Sample Method #2
					url: "https://jsonplaceholder.typicode.com/posts/1"
				})
					.done(function (data) {

						console.log(data);  // for testing only

						//var data = $.parseJSON(data); // If data does not come back as JSON

						jQuery.each(data, function (index, value) {
							$('#results').append($('<div>', {
								html: '<h5>' + index + '</h5>' + '<p>' + value + '</p>'
							}));
						});
					})
					.fail(function (xhr, status, error) {
						if(APPLICATION_ENV === 'development'){
							$('#post_response').text(xhr.responseText);
							$('#post_response').text(error.message);
							mainObj.error(err.message);
							mainObj.error(err.message);
						}
					});
			} catch (err) {
				mainObj.error(err.message);
			}
		},

		/**
		 * Fire an ajax GET request
		 *
		 * @return object
		 */
		postAjax: function (event) {
			event.preventDefault();
			try {
				$('#post_response').empty();

				var post_var = $("#post_var").val();
				var params = { post_var: post_var };
				$.ajax({
					method: "POST",
					data: { post_var: post_var },
					url: BASE_URL+"/PostController/postVersion"
				})
					.done(function (data) {

						console.log(data);  // for testing only

						$('#post_response').text(data);
					})
					.fail(function (xhr, status, error) {
						if(APPLICATION_ENV === 'development'){
							$('#post_response').text(xhr.responseText);
							$('#post_response').text(error.message);
							mainObj.error(err.message);
							mainObj.error(xhr.responseText);
						}
					});

			} catch (err) {
				mainObj.error(err.message);
			}
		},
		/**
		 * Fire an ajax GET request
		 *
		 * @return object
		 */
		getAllUsers: function (event) {
			event.preventDefault();
			try {
				$('.usersTblRows').empty();
				$('#usersTblHdr').show();
				var tableData;
				$.ajax({
					method: "POST",
					data: { 'fetch': 'all' },
					dataType: 'json',
					url: BASE_URL+"/UserController/getAllUsersPost"
				})
					.done(function (data) {
						//var data2 = $.parseJSON(data); // If data does not come back as JSON
						console.log(data);  // for testing only
						var obj = jQuery.parseJSON(data);
						//console.log(data2);
						jQuery.each(obj, function (key, obj) {
							console.log(obj.name);
							tableData += "<tr class='usersTblRows'>" +
								"<td><a class='usersLink'>"+ obj.name +"</a></td><td>"+ obj.email +"</td>" +
								"</tr>";
						});
						$('#usersTbl').append(tableData);
					})
					.fail(function (xhr, status, error) {
						if(APPLICATION_ENV === 'development'){
							console.log(error.message);
						}
					});
			} catch (err) {
				mainObj.error(err.message);
			}
		},

	};

	test.init();
});
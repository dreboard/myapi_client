

$( document ).ready(function() {
	/**
	 * Main Object
	 *
	 * @return object
	 */
	var mainObj = {

		/**
		 * Register mainObj object functions
		 *
		 * These function will fire or will be
		 * immediately attached to the dom in GLOBAL scope
		 *
		 * @return void
		 */
		init: function () {
			//this.error();
		},

		/**
		 * Error Handling
		 *
		 * @return void
		 */
		error: function (msg) {
			if (APPLICATION_ENV === 'development') {
				console.log(msg);
			} else {
				return false;
			}
		}

	};

	mainObj.init();
});
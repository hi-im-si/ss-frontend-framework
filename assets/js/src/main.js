MAIN = (function ($) {

	init = function () {
		// Code here runs straight away

		$(DOMready);
	},

	DOMready = function () {
		// Code here runs when the DOM is ready

		Scroll();
		Resize();

		imager('.js-load-img');

		accordion = new Accordion({
	        'wrapper' : $('#js-accordion'),
	        'trigger' : '.js-accordion-trigger',
	        'target'  : '.js-accordion',
	        'open_first': true/*,
	        'open_which' : 'selected'*/
	    });

	};

	Scroll = function() {
		$(window).on('scroll', function (e) {

		});
	};

	Resize = function() {
		$(window).on('resize', function (e) {

		});
	};

	imager = function(el) {
		new Imager(el, {
			//availableWidths: [360, 480, 600, 800, 1024],
			lazyload: true
		});
	};


	return {
		start : init
	};

})(jQuery);

MAIN.start();

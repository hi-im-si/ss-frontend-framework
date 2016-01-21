window.init = function() {

	'use strict';

	window.pxlCore = {};

	var events = {}, operation;

	var tidy = function(operation, task) {

		var result = operation.split('__');

		if(task === true) {

			result = result[0];

		} else {

			result.shift();

		}

		return result;

	}

	var bindEvents = function(events, operation) {

		var clean = tidy(operation, true);

		for(var i = 0, l = events.length; i < l; i++) {

			try {

				pxlCore[clean] = new pxlFuncs[operation];

				if(events[i] === 'scroll' || events[i] === 'resize') {

					var action = events[i];

					$(window).on(events[i], function(e) {

                        var event = e;

                        if(window.requestAnimationFrame) {

                            window.requestAnimationFrame(function() {

                                pxlCore[clean][action](event);

                            });

                        } else {

                            pxlCore[clean][action](event);

                        }

					});

				}

			} catch(error) {

				if(console.groupCollapsed) {

                    console.groupCollapsed('%c ['+ operation +' error] - ' + error['message'] + '. Expand for details:', 'color: #ff5a5a');
                    console.info('%c '+error['stack'], 'color: #ff5a5a');
                    console.groupEnd();

				}

			}

		}

	}

	for(operation in window.pxlFuncs) {

		var clean = tidy(operation, true);

		events[clean] = tidy(operation);
		bindEvents(events[clean], operation);

	}

}
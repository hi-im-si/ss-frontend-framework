window.pxlFuncs = {

    createMap__ready : function() {

		var self = this;

		self.init = function() {

			if(!document.getElementById('google-map')) return;

            var element = $('#google-map'),

				myOptions = {

					zoom: element.data('zoom'),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					panControl: false,
					zoomControl: true,
					scaleControl: false,
					mapTypeControl: false,
					streetViewControl: false,
					scrollwheel: false,
					draggable: true
				};

			var map = new google.maps.Map(document.getElementById("google-map"), myOptions),
				image = new google.maps.MarkerImage('/assets/img/map-icon.png',

				new google.maps.Size(64, 72),
				new google.maps.Point(0, 0),
				new google.maps.Point(32, 72)

			);

			var centreBounds = new google.maps.LatLngBounds(),
				markers = {

                    1: [51.5092431, -0.1371313]

                };

			for(var key in markers) {

				var pos = new google.maps.LatLng(markers[key][0], markers[key][1]),
					marker = new google.maps.Marker({

						position: pos,
						map: map,
						icon: image,
                        animation: google.maps.Animation.DROP

					});

				centreBounds.extend(pos);

			}

			var finalPos = centreBounds.getCenter();

			map.setCenter(finalPos);

		}

	},

	mapScript__ready : function() {

		if(!document.getElementById('google-map')) return;

		var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&callback=pxlCore.createMap.init';

		document.body.appendChild(script);

	},


	imager__ready : function() {

        window.imager = new Imager('.js-load-img', {

            lazyload: true,
            lazyloadOffset : 100,
            onImagesReplaced: function(images) {

                $('.image-replace').addClass('visible');

            }

        });

	},

	accordion__ready : function() {

		window.accordion = new Accordion({
	        'wrapper' : $('#js-accordion'),
	        'trigger' : '.js-accordion-trigger',
	        'target'  : '.js-accordion',
	        'open_first': true/*,
	        'open_which' : 'selected'*/
	    });

	},

	alerts__ready : function() {

		var el = '.js-notify-flash',
			trigger = 'is-alerted',
			close = '.js-notify-flash-close';

		if ( $(el).length !== 0 ) {
			var $msg = $(el);
			$msg.addClass(trigger);

			setTimeout(function() {
				$msg.removeClass(trigger);
			}, 3500);
		}

		$(document).on('click', close, function() {
			$(el).removeClass(trigger);
		});

	},

	notifications__ready : function() {
		$('.js-trigger').on('click', function(e) {
			e.preventDefault();
			$('.js-notify').removeClass('is-hid').addClass('is-vis');
		});

		$('.js-notify-close').on('click', function(e) {
			e.preventDefault();
			$('.js-notify').removeClass('is-vis').addClass('is-hid');
		});
	},

	dialog__ready : function() {

		$('.js-dialog-trigger').on('click', function(e){

		    e.preventDefault();

		    $.confirm({
		        'title'     : 'The Dialog Title',
		        'message'   : 'Are you sure?',
		        'buttons'   : {
		            'Yes'   : {
		                'action': function(){
		                    alert('yay!')
		                }
		            },
		            'No'    : {
		                'action': function(){

		                }  // Nothing to do in this case. You can as well omit the action property.
		            }
		        }
		    });

		});

	}

}
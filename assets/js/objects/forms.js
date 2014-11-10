FORMS = (function ($) {

	init = function () {
		// Code here runs straight away

		$(DOMready);

	},

	DOMready = function () {
		// Code here runs when the DOM is ready
		$('form').placeholder();
		$('form').radioWrapper();
		createSelects('select.select');
		createCheckbox();
	};

	createSelects = function(elem) {

		$(elem).each(function(){

			if (!$(this).parent().is('.select-wrap')) {
				/* added select-wrap around select and span as it cant be done with php */
				$(this).wrap("<div class='select-wrap' />");
			}

			var title = $(this).attr('title');

			if($('option:selected', this).val()) { title = $('option:selected',this).text() };

			$(this)
				.css({'z-index':10,'opacity':0})
				.after('<span class="select">' + title + '</span>')
				.on('change, change.address-form', function(){
					var val = $(this).find(':selected').text().length > 0 ? $(this).find(':selected').text() : 'Select';
					// TODO find a way to do this without repeating the markup.
					$(this).next().text(val);

				});
		});

		$(elem).each(function () {
			if($(this).parents().hasClass('error')) {
				$(this).siblings('span.select').addClass('error-select');
			}
		});

	}


	createCheckbox = function() {

		$('input:checkbox').wrap('<span class="checkbox"></span>');
		$('input:checkbox:checked').parent('span.checkbox').addClass('checkbox--selected');

		$('span.checkbox').click(function (e) {
			if($(this).hasClass('checkbox--selected')) {
				$(this).removeClass('checkbox--selected');
				$(this).children('input').removeAttr("checked");
			} else {
				$(this).addClass('checkbox--selected');
				$(this).children('input').attr("checked", true);
			}

			// fire change event
			$(this).children('input:checkbox:not(#shipping_chk)').change();
		});
	}


	return {
		start : init
	};

})(jQuery);

FORMS.start();

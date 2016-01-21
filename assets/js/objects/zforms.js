FORMS = (function ($) {

	init = function () {
		// Code here runs straight away

		$(DOMready);

	},

	DOMready = function () {
		// Code here runs when the DOM is ready
		$('form').radioWrapper();
		createSelects('.js-select');
		createCheckbox('checkbox', 'checkbox--selected');
	};

	createSelects = function(elem) {

		$(elem).each(function(){

			if (!$(this).parent().is('.selectdd')) {
				/* added select-wrap around select and span as it cant be done with php */
				$(this).wrap("<div class='selectdd' />");
			}

			var title = $(this).attr('title');

			if($('option:selected', this).val()) { title = $('option:selected',this).text() };

			$(this)
				.css({ 'opacity': 0 })
				.after('<span class="selectdd__option">' + title + '</span>')
				.on('change, change.address-form', function(){
					var val = $(this).find(':selected').text().length > 0 ? $(this).find(':selected').text() : 'Select';
					// TODO find a way to do this without repeating the markup.
					$(this).next().text(val);

				});
		});

		$(elem).each(function () {
			if($(this).parents().hasClass('error')) {
				$(this).siblings('.selectdd__option').addClass('selectdd__option--error');
			}
		});

	}


	createCheckbox = function(elem, selected) {

		$('input:checkbox').wrap('<span class="'+elem+'"></span>');
		$('input:checkbox:checked').parent('span.'+elem).addClass(selected);

		$('span.'+elem).on('click', function (e) {

			var $this = $(this);

			if( $this.hasClass(selected) ) {
				$this.removeClass(selected);
				$this.children('input').removeAttr("checked");
			} else {
				$this.addClass(selected);
				$this.children('input').attr("checked", true);
			}

			// fire change event
			$this.children('input:checkbox:not(#shipping_chk)').change();
		});
	}


	return {
		start : init
	};

})(jQuery);

FORMS.start();
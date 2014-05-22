/* Radio Styling */
(function($) {

	var RadioWrapper = function(element, options) {
		this.options = $.extend({}, $.fn.radioWrapper.defaults, options)
		this.$element = $(element);
		this.init();
	}

	RadioWrapper.prototype = {

		constructor: RadioWrapper,

		init: function() {
			var self = this;
			self.$element.find('input[type=radio]').each(function() {
				var $this = $(this);

				$this.wrap(self.options.wrapper);

				if ($this.is(':checked')) {
					$this.parent().addClass(self.options.checkedClass);
				}

				$this.on('click', function(e) {
					e.stopPropagation();
					self.handleClick.call($(this), self, e);
				});
				$this.parent().on('click', self.handleWrapperClick);
			});
		},

		// Colour in the wrapper when radio is clicked
		handleClick: function(self) {
			var $radio = $(this);
			var $wrapper = $radio.parent();

			if ($wrapper.hasClass(self.options.checkedClass)) return;

			// Uncheck the others.
			self.$element.find("input[name='"+$radio.attr('name')+"']").each(function(){
				$(this).parent().removeClass(self.options.checkedClass);
			})
			// trigger handlers on the underlying element
			$wrapper.addClass(self.options.checkedClass);
		},

		// Despatch to the radio when the wrapper is clicked
		handleWrapperClick: function() {
			$(this).find('input').click();
			return false;
		}
	}

	var radioWrapped = [];

	$.fn.radioWrapper = function(option) {

		return this.each(function() {
			var $this = $(this),
			options = $.extend({}, $this.data(), option)

			radioWrapped.push(new RadioWrapper(this, options));
		})
	};

	$.fn.radioWrapper.defaults = {
		'wrapper' : '<span class="radio"></span>',
		'checkedClass' : 'radio--selected'
	};
})(jQuery);
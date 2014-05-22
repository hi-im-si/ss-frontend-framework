	// Accordion object to be instantiated on the client side
	var Accordion = function(options) {
		this.wrapper = options.wrapper;
		this.settings = {
			'target' : options.target,
			'trigger' : options.trigger,
			'open_first' : options.open_first || false,
			'open_which': options.open_which || false,
			'wrapper' : this.wrapper
		}
		this.sections = [];
		this.init();
		return this;
	};

	Accordion.prototype = {

		init : function() {

			// obtain reference
			var self = this;

			// get total section count
			this.wrapper.find('li').not('li ul li').each(function() {
				
				// create new section object passing in the li into it's constructor
				self.sections.push(new AccordionSection($(this), self.settings));
			});

			self.register_events();

		},

		register_events : function() {

			var self = this;

			// bind to generic selector
			self.wrapper.find('.js-accordion-trigger').bind('click', function(e) {

				e.preventDefault();

				// for each trigger...
				self.wrapper.find('.js-accordion-trigger').each(function(i) {

					// if it has a class of is-open then close it
					if ($(this).hasClass('is-open')) {
						self.sections[i].close();
					}

				});

			});

		}

	};

	// AccordionSection class to be instantiated inside of Accordion object only
	var AccordionSection = function($dom_section, options) {
		this.target  = $dom_section.find(options.target);
		this.trigger = $dom_section.find(options.trigger);
		this.options = options;
		this.register_events();
	};

	AccordionSection.prototype = {

		register_events : function() {

			// obtain reference
			var self = this;

			// bind click event handler
			self.trigger.bind('click', function(e) {

				e.preventDefault();

				// determine if we need to open or close
				if ($(this).hasClass('is-closed')) {

					// call open method
					self.open();
				}

				if ($(this).hasClass('is-open')) {

					// call close method
					self.close();
				}

			});

			// optionally open first

			if(self.options.open_which){
				self.options.wrapper.find(self.options.trigger + '.' + self.options.open_which).trigger('click');
			} else if (self.options.open_first) {
				self.options.wrapper.find(self.options.trigger + ':first').trigger('click');
			}

		},

		open : function() {

			// obtain reference
			var self = this;

			// first slide down
			this.target.slideDown(400, function() {

				// remove the is-closed class
				self.trigger.removeClass('is-closed');

				// add class of is-open
				self.trigger.addClass('is-open');
			})

		},

		close : function() {

			// obtain reference
			var self = this;

			// first slide up
			this.target.slideUp(400, function() {

				// remove is-open class
				self.trigger.removeClass('is-open');

				// add is-closed class
				self.trigger.addClass('is-closed');
			});

		}

	};
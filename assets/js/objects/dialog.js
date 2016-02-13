(function($){

	$.confirm = function(params){

		if($('#js-dialog').length){
			// A confirm is already shown on the page:
			return false;
		}

		var buttonHTML = '';
		$.each(params.buttons,function(name,obj){

			// Generating the markup for the buttons:

			buttonHTML += '<a href="#" class="dialog__btn  btn  btn--primary  btn--large  js-dialog-btn"><span>'+name+'</span></a>';

			if(!obj.action){
				obj.action = function(){};
			}
		});

		var markup = [
			'<div class="dialog" id="js-dialog">',
			'<div class="dialog__box">',
			'<h1 class="dialog__ttl">',params.title,'</h1>',
			'<p class="dialog__msg">',params.message,'</p>',
			'<div class="dialog__btns">',
			buttonHTML,
			'</div></div></div>'
		].join('');

		$(markup).hide().appendTo('body').fadeIn();

		var buttons = $('.js-dialog-btn'),
			i = 0;

		$.each(params.buttons,function(name,obj){
			buttons.eq(i++).click(function(){

				// Calling the action attribute when a
				// click occurs, and hiding the confirm.

				obj.action();
				$.confirm.hide();
				return false;
			});
		});
	}

	$.confirm.hide = function(){
		$('#js-dialog').fadeOut(function(){
			$(this).remove();
		});
	}

})(jQuery);
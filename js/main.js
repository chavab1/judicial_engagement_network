/* ------ Establish Namespace ------- */

var jen = {};

// Window Width
jen.viewport = window.innerWidth;


$(function() {
	$('.login-modal .form-group input').each(function(){

		if($(this).val()) {
			$(this).parent('.form-group').addClass('filled');
		}
		$(this).on('focus', function(){		
			$(this).parent('.form-group').addClass('focus');
	
		});
		$(this).on('change', function(){		
			if($(this).val()) {
				$(this).parent('.form-group').addClass('filled');
			}
			else
				$(this).parent('.form-group').removeClass('filled');	
		});	
		$(this).on('blur', function(){		
			$(this).parent().removeClass('focus');	
			if($(this).val()) {
				$(this).parent('.form-group').addClass('filled');
			}
			else
				$(this).parent('.form-group').removeClass('filled');			
		});	
	})
});



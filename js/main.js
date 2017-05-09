/* ------ Establish Namespace ------- */

var jen = {};

// Window Width
jen.viewport = window.innerWidth;


jQuery(function() {
	jQuery('.login-modal .form-group input').each(function(){

		if(jQuery(this).val()) {
			jQuery(this).parent('.form-group').addClass('filled');
		}
		jQuery(this).on('focus', function(){		
			jQuery(this).parent('.form-group').addClass('focus');
	
		});
		jQuery(this).on('change', function(){		
			if(jQuery(this).val()) {
				jQuery(this).parent('.form-group').addClass('filled');
			}
			else
				jQuery(this).parent('.form-group').removeClass('filled');	
		});	
		jQuery(this).on('blur', function(){		
			jQuery(this).parent().removeClass('focus');	
			if(jQuery(this).val()) {
				jQuery(this).parent('.form-group').addClass('filled');
			}
			else
				jQuery(this).parent('.form-group').removeClass('filled');			
		});	
	})
});



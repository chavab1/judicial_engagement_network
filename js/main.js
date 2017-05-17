/* ------ Establish Namespace ------- */

var jen = {};

// Window Width
jen.viewport = window.innerWidth;

// OnLoad
jQuery(function() {

	// Login Modal Input Fields
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

	// Increse/Decrease font size
	jQuery('.text-toggle').on('click', function(){
		jQuery('body').toggleClass('font-large');
	});


	// Main Nav Sub-Menu Reveal
	jQuery('.deeper.parent').hoverIntent({
		over: open,
		out: close,
		interval: 10,
		timeout: 400
	});


    function open(){
    	jQuery(this).addClass('open').children('a').attr('aria-expanded', true);
    	jQuery(this).children('ul').attr('aria-hidden', false).attr('aria-expanded', true);
    }
    function close(){
    	jQuery(this).removeClass('open').children('a').attr('aria-expanded', false);
    	jQuery(this).children('ul').attr('aria-hidden', true).attr('aria-expanded', false);
	}


});



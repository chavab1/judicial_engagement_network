

jQuery(function($){


	picUpload();


	// Add placeholder to select list
	$('#jform_profile_currentdocket').prepend('<option value="" disabled selected style="display:none;">Please Select One</option>');



	// Validate Registration Form
	// 
	// remove required flags from everything so our javascript can run
	// $('input,select').removeAttr('aria-required required');

	// Validate on Form Submit

	var errors = [];	
	var parent = $('.system-message-container');

	$('#member-registration').submit(function(e) {

		errors = [];			

		// remove old errors
		jen.bootstrapHelper.removeAlert(parent);
		jen.bootstrapHelper.hideAllValidationStates();

		// // validate title
		if(!jen.validate.hasValue($('#jform_profile_title'), 3)){
			errors.push('You must provide your title.');
		}	

		// validate first name
		if(!jen.validate.hasValue($('#jform_profile_firstname'), 3)){
			errors.push('You must provide your first name.');
		}	

		// validate last name
		if(!jen.validate.hasValue($('#jform_profile_lastname'), 3)){
			errors.push('You must provide your last name.');
		}	

		// password
		if(!jen.validate.password($('#jform_password1'), 3)){
			errors.push('You must enter a password that is at least 5 characters long.');
		}

		// password match
		if(!jen.validate.match($('#jform_password1'),$('#jform_password2'), 3)){
			errors.push('The passwords you entered do not match.');
		}

		// email
		if(!jen.validate.email($('#jform_email1'), 3)){
			errors.push('You must provide a valid email address.');
		}

		// email match
		if(!jen.validate.match($('#jform_email1'),$('#jform_email2'), 3)){
			errors.push('The email addresses you entered do not match.');
		}	

		// court
		if(!jen.validate.hasValue($('#jform_profile_court'), 3)){
			errors.push('You must provide your court name.');
		}

		// court type
		if(!jen.validate.radio($('input[id^="jform_profile_courttype"]'))){
			errors.push('You must provide your court type.');
		}

		// court address
		if(!jen.validate.hasValue($('#jform_profile_courtaddress'), 3)){
			errors.push('You must provide your court address.');
		}

		// city
		if(!jen.validate.hasValue($('#jform_profile_city'), 3)){
			errors.push('You must provide your city.');
		}	

		// state
		if(!jen.validate.hasValue($('#jform_profile_state'), 3)){
			errors.push('You must provide your state.');
		}	

		// zip
		if(!jen.validate.hasValue($('#jform_profile_zip'), 3)){
			errors.push('You must provide your zip.');
		}	

		// phone
		if(!jen.validate.phone($('#jform_profile_phone'), 3)){
			errors.push('You must provide your chambers phone number in 000-000-0000 format.');
		}	


		// describe court
		if(!jen.validate.checkboxes($('#jform_profile_courtdescribe'), 1)){
			errors.push('You must describe your court.');
		}	

		// current docket
		if(!jen.validate.select($('#jform_profile_currentdocket'), 1)){
			errors.push('You must provide current docket.');
		}	

		// handle domestic
		if(!jen.validate.radio($('input[id^="jform_profile_domestic"]'))){
			errors.push('You must select whether you handle domestic/sexual assault cases.');
		}	

		// experience domestic violance
		if(!jen.validate.hasValue($('#jform_profile_experience'), 3)){
			errors.push('You must provide your experience or role dealing with domestic violence, sexual assault, trafficking cases.');
		}

		// date value
		if(!jen.validate.hasValue($('#jform_profile_date'), 3)){
			errors.push('You must provide your appointment or election date in (m)m/(d)d/(yy)yy format');
		}

		// date format
		if(!jen.validate.date($('#jform_profile_date'), 3)){
			errors.push('You must provide your appointment or election date in (m)m/(d)d/(yy)yy format');
		}

		// education
		if(!jen.validate.hasValue($('#jform_profile_education'), 3)){
			errors.push('You must provide your education.');
		}

		// admission value
		if(!jen.validate.hasValue($('#jform_profile_admission'), 3)){
			errors.push('You must provide your admission date in (m)m/(d)d/(yy)yy format');
		}	

		// admission format
		if(!jen.validate.date($('#jform_profile_admission'), 3)){
			errors.push('You must provide your admission date in (m)m/(d)d/(yy)yy format');
		}	

		// judicial offices
		if(!jen.validate.hasValue($('#jform_profile_offices'), 3)){
			errors.push('You must provide your judicial offices.');
		}	

		// law practive
		if(!jen.validate.hasValue($('#jform_profile_beforejudge'), 3)){
			errors.push('You must provide your law practice prior to becoming a judge.');
		}	

		// referred
		if(!jen.validate.radio($('input[id^="jform_profile_referred"]'))){
			errors.push('You must select whether you were referred.');
		}	

		// why member
		if(!jen.validate.hasValue($('#jform_profile_whymember'), 3)){
			errors.push('You must provide why you want to become a member.');
		}	

		$('#jform_name').val($('#jform_profile_firstname').val()  + ($('#jform_profile_middleinitial') !== '' ? ' ' + $('#jform_profile_middleinitial').val() + ' ' : ' ') + $('#jform_profile_lastname').val());
		$('#jform_username').val($('#jform_email1').val());


		// if an error occured, show the message and stop submission
		if(errors.length){
			jen.bootstrapHelper.showAlert(parent, jen.bootstrapHelper.constructErrorMessage(errors), 'warning', true, true);
			e.preventDefault();
		}


	});

	// check title on change
	$('#jform_profile_title').change(function(){
		jen.validate.hasValue($(this),3);
	});

	// check first name on change
	$('#jform_profile_firstname').change(function(){
		jen.validate.hasValue($(this),3);

	});	

	// check last name on change
	$('#jform_profile_lastname').change(function(){
		jen.validate.hasValue($(this),3);
	});	

	// check password on change
	$('#jform_password1').change(function(){
		jen.validate.password($(this),3);
	});

	// check that both password fields match
	$('#jform_password2').change(function(){
		jen.validate.match($('#jform_password1'),$(this),3);
	});	

	// check the email on change and clone to the hidden username field
	$('#jform_email1').change(function(){
		jen.validate.email($(this),3);
	});

	// check that both email fields match
	$('#jform_email2').change(function(){
		jen.validate.match($('#jform_email1'),$(this),3);
	});	

	// check court on change
	$('#jform_profile_court').change(function(){
		jen.validate.hasValue($(this),3);
	});	


	// check court address on change
	$('#jform_profile_courtaddress').change(function(){
		jen.validate.hasValue($(this),3);
	});	

	// check city on change
	$('#jform_profile_city').change(function(){
		jen.validate.hasValue($(this),3);
	});		

	// check state on change
	$('#jform_profile_state').change(function(){
		jen.validate.hasValue($(this),3);
	});		

	// check zip on change
	$('#jform_profile_zip').change(function(){
		jen.validate.hasValue($(this),3);
	});				

	// check chambers phone on change
	$('#jform_profile_phone').change(function(){
		jen.validate.phone($(this),3);
	});		

	// check experience on change
	$('#jform_profile_experience').change(function(){
		jen.validate.hasValue($(this),3);
	});		

	// check appointment date on change
	$('#jform_profile_date').change(function(){
		jen.validate.date($(this),3);
	});		

	// check education on change
	$('#jform_profile_education').change(function(){
		jen.validate.hasValue($(this),3);
	});	

	// check admission on change
	$('#jform_profile_admission').change(function(){
		jen.validate.date($(this),3);
	});		

	// check offices on change
	$('#jform_profile_offices').change(function(){
		jen.validate.hasValue($(this),3);
	});		

	// check before judge on change
	$('#jform_profile_beforejudge').change(function(){
		jen.validate.hasValue($(this),3);
	});		

	// check whymember on change
	$('#jform_profile_whymember').change(function(){
		jen.validate.hasValue($(this),3);
	});		


	// Make currentdocket sub fieldsets require
	$( "#jform_profile_currentdocket" ).change(function() {
	  var selected = $(this).val();
	  $('#member-registration').off('submit.currentdocket');
	  $('#member-registration').on('submit.currentdocket', function(e){

		if(!jen.validate.checkboxes($('#jform_profile_'+selected), 1)){
			e.preventDefault();	
			if(errors.length > 0) {
				if($('.alert ul').length) {
					$('.alert ul').append('<li>You must select a ' + (selected == 'both' ? 'current': selected ) + ' docket type</li>');
				}
				else {
					$('.alert').append('<div>You must select a ' + (selected == 'both' ? 'current': selected )+ ' docket type</div>');
				}			
			}
			else {
				errors = [];
				errors.push('You must select a ' + (selected == 'both' ? 'current': selected ) + ' docket type.');
				jen.bootstrapHelper.showAlert(parent, jen.bootstrapHelper.constructErrorMessage(errors), 'warning', true, true);

			}
		}	  
	  });
	});


	// Format Date fields
	var format = "mm/dd/yyyy";
	var match = new RegExp(format
	    .replace(/(\w+)\W(\w+)\W(\w+)/, "^\\s*($1)\\W*($2)?\\W*($3)?([0-9]*).*")
	    .replace(/m|d|y/g, "\\d"));
	var replace = "$1/$2/$3$4"
	    .replace(/\//g, format.match(/\W/));

	function doFormat(target)
	{
	    target.value = target.value
	        .replace(/(^|\W)(?=\d\W)/g, "$10")   // padding
	        .replace(match, replace)             // fields
	        .replace(/(\W)+/g, "$1");            // remove repeats
	}

	// Auto formats fields to date format
	$("#jform_profile_date, #jform_profile_admission").keyup(function(e) {
	   if(!e.ctrlKey && !e.metaKey && (e.keyCode == 32 || e.keyCode > 46))
	      doFormat(e.target);
	});


	// Triggers click on field input field from image
	$('.pic-upload-wrapper').on('click', '.pic-upload-set', choosePic);


});



// Triggers click on field input field
function choosePic() {
	jQuery('#upload').click();

}



// Triggers croppie amd binds data to file field type

function picUpload() {
	var $uploadCrop;

	function readFile(input) {
			if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
				$('.pic-upload-wrapper').addClass('ready');
            	$uploadCrop.croppie('bind', {
            		url: e.target.result
            	}).then(function(){
            		console.log('jQuery bind complete');
            	});
            	
            };
            
            reader.readAsDataURL(input.files[0]);
        }
        else {
	        console.log("Sorry - you're browser doesn't support the FileReader API");
	    }
	}

	$uploadCrop = $('#croppie').croppie({
		viewport: {
			width: 320,
			height: 224,
		},
	    boundary: {
	        width: 360,
	        height: 300
	    },			
		enableExif: true
	});

	$('#upload').on('change', function () { readFile(this); });

	$('.upload-set').on('click', function (ev) {
		$uploadCrop.croppie('result', {
			type: 'base64',
			size: 'viewport'
		}).then(function (resp) {
			$('.pic-upload-set').html(convertImageToCanvas(resp));
			$('#jform_profile_pic').val(resp);
		});
	});
}

// Create image from base64
function sourceToImage(data) {
	var image = new Image();
	image.src = data;
	return image;
}

// Create canvas image from base64
function convertImageToCanvas(image) {
	var canvas = document.createElement("canvas");
	canvas.width = 320;
	canvas.height = 224;
	var context = canvas.getContext('2d');
	var img = new Image();
	img.onload = function() {
		context.drawImage(this, 0, 0, canvas.width, canvas.height);
	};
	img.src = image;

	return canvas;
}
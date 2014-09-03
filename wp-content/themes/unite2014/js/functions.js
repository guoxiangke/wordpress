/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */
( function( $ ) { 
	$('#phone_4').blur(function(){	
		phone = $('#phone_4').val();
		var regPartton=/1[3-8]+\d{9}/;
		if(!phone || phone==null){
			// alert("手机号码不能为空！");
			// $('#phone_4').focus();
			return false;
		}else if(!regPartton.test(phone)){
			// alert("手机号码格式不正确！");
			// $('#phone_4').focus();
			return false;
		}else{
			
			$('#password_2').val(phone);
			$('#confirm_password_password_2').val(phone);
			$('#email_1').val(phone+"@139.com");		
			console.log($('#password_2').val());	
		}
	});
	

})( jQuery );


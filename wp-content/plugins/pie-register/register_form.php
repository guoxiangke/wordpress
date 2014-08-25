<?php

function outputRegForm($fromwidget=false){

$form 		= new Registration_form();
$success 	= '' ;
$error 		= '' ;
$option 	= get_option( 'pie_register_2' );
$registration_from_fields = '<div class="pieregformWrapper pieregWrapper"><style type="text/css">
.field_note{font-size:12px; color:#FF0000;}
.required{color:#FF0000}
</style>';
$registration_from_fields .= '<div id="show_pie_register_error_js" class="piereg_entry-content"></div>';

/*//Printing Success Message
if($_POST['success'] != "")
	$registration_from_fields .= '<p class="piereg_message">'.apply_filters('piereg_messages',__($_POST['success'],"piereg")).'</p>';
if($_POST['error'] != "")
	$registration_from_fields .= '<p class="piereg_login_error">'.apply_filters('piereg_messages',__($_POST['error'],"piereg")).'</p>';
if(sizeof($errors->errors) > 0)
{
	foreach($errors->errors as $err)
	{
		$error .= $err[0] . "<br />";	
	}
	$registration_from_fields .= '<p class="piereg_login_error">'.apply_filters('piereg_messages',__($error,"piereg")).'</p>';
}
	*/
	
$registration_from_fields .= $form->addFormData();

$IsWidgetForm = "";
if($fromwidget)
	$IsWidgetForm = "widget_";

$registration_from_fields .= '<div id="pie_register_reg_form">';

$registration_from_fields .= '<form enctype="multipart/form-data" id="pie_'.(trim($IsWidgetForm)).'regiser_form" method="post" action="'.$_SERVER['REQUEST_URI'].'">';
if($form->countPageBreaks() > 1){
	$registration_from_fields .= '<div class="piereg_progressbar"></div>';
}
$registration_from_fields .= '<ul id="pie_register">';

	   //ob_start();
	   $output = $form->printFields($fromwidget);
	   $registration_from_fields .= $output;
		/*$registration_from_fields .= '<li class="pieloading_status">';
		$registration_from_fields .= __('Please wait..','piereg');
		$registration_from_fields .='</li>';*/
	   //return $registration_from_fields;
	   //ob_end_flush();
		/**
		 * Dale code begin.
		 * Add social connect in login form. 
		 */
		//depend on social connect plugin,see ui.php
		if( !isset( $images_url ) )
			$images_url = apply_filters('social_connect_images_url', SOCIAL_CONNECT_PLUGIN_URL . '/media/img/');
		$twitter_enabled = get_option( 'social_connect_twitter_enabled' ) && get_option( 'social_connect_twitter_consumer_key' ) && get_option( 'social_connect_twitter_consumer_secret' );
		$facebook_enabled = get_option( 'social_connect_facebook_enabled', 1 ) && get_option( 'social_connect_facebook_api_key' ) && get_option( 'social_connect_facebook_secret_key' );
		$registration_from_fields .= '<p class="comment-form-social-connect">
							<label>Or sign up with</label>
						</p><div class="social_connect_form">';
		if( $facebook_enabled )
			$registration_from_fields .= apply_filters('social_connect_login_facebook','<a href="javascript:void(0);" title="Facebook" class="social_connect_login_facebook"><img alt="Facebook" src="'.$images_url.'facebook_32.png" /></a>');

		if( $facebook_enabled )
			$registration_from_fields .= apply_filters('social_connect_login_twitter','<a href="javascript:void(0);" title="Twitter" class="social_connect_login_twitter"><img alt="Twitter" src="'.$images_url.'twitter_32.png" /></a>');
		$registration_from_fields .= '</div>';
		// add other links
			$registration_from_fields .= '<p class="nav">
				<a class="simplemodal-login" href="http://everydayparenting.proferochina.com/wp-login.php">Already have an account</a> | <a class="simplemodal-forgotpw" href="http://everydayparenting.proferochina.com/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
			</p>';
		/**
		 * Dale code end.
		 * Add social connect in login form. 
		 */
$registration_from_fields .= '</ul>	';
$registration_from_fields .= '</form>';

if($form->pages > 1)
{
	$registration_from_fields.= <<<EOL
	<script type="text/javascript">
	pieHideFields();
if(window.location.hash) 
{
	var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character 
	var elms = document.getElementsByClassName('pageFields_'+hash);
	for(a = 0 ; a < elms.length ; a++)
	{
		elms[a].style.display = "";	
	}   
} 
else 
{
    var elms = document.getElementsByClassName('pageFields_1');
	for(a = 0 ; a < elms.length ; a++)
	{
		elms[a].style.display = "";	
	}   
}


</script>
EOL;

 }
 if($form->countPageBreaks() > 1){
	$registration_from_fields .= PieRegister::piereg_ProgressBarScripts($form->countPageBreaks());
}
 $registration_from_fields.='</div></div>';
return $registration_from_fields;
}
<?php
add_action( 'unite2014_footer', 'unite2014_footer_info', 30 );
/**
 * function to show the footer info, copyright information
 */
function unite2014_footer_info() {
   $output = '<a href="###" title="Unite 2014">Unite 2014</a> powered by <a href="http://wordpress.org" title="WordPress" target="_blank">WordPress</a>.';
   echo $output;
}



/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function unite2014_scripts() {
	// // Add Lato font, used in the main stylesheet.
	// wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

	// // Add Genericons font, used in the main stylesheet.
	// wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

	// // Load our main stylesheet.
	// wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri(), array( 'genericons' ) );

	// // Load the Internet Explorer specific stylesheet.
	// wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-style', 'genericons' ), '20131205' );
	// wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	// if ( is_singular() && wp_attachment_is_image() ) {
	// 	wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	// }

	// if ( is_active_sidebar( 'sidebar-3' ) ) {
	// 	wp_enqueue_script( 'jquery-masonry' );
	// }
	if(!is_admin()){     
	    wp_deregister_script( 'jquery-ui-core' );
		wp_enqueue_script('jquery-ui-core', get_stylesheet_directory_uri().'/js/jquery-ui.min.js', array('jquery'), '1.10.4', 1 );
	}
	if ( is_page('75')) {
		
		// wp_enqueue_style( 'fullPage', get_stylesheet_directory_uri() . '/jquery.fullPage.css');
		wp_enqueue_script( 'fullPage', get_stylesheet_directory_uri() . '/js/jquery.fullPage.min.js', array('jquery'));
		wp_enqueue_script( 'photoswipe1', get_stylesheet_directory_uri() . '/1.0.11/lib/simple-inheritance.min.js', array('jquery'));
		wp_enqueue_script( 'photoswipe2', get_stylesheet_directory_uri() . '/1.0.11/code-photoswipe-1.0.11.min.js', array('jquery'));
		wp_enqueue_style( 'photoswipe3', get_stylesheet_directory_uri() . '/1.0.11/photoswipe.css');
	}

	wp_enqueue_script( 'unite2014-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20140319', true );
}
add_action( 'wp_enqueue_scripts', 'unite2014_scripts' );

/**
 * http://www.mywpku.com/wordpress-use-chinese-username.html
 让WordPress支持使用中文用户名注册
 */
function non_strict_login( $username, $raw_username, $strict ) {
	if( !$strict )
	return $username;
	return sanitize_user(stripslashes($raw_username), false);
}
add_filter('sanitize_user', 'non_strict_login', 10, 3);
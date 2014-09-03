<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<nav role="navigation" class="col-md-6">
					<?php unite_footer_links(); ?>
				</nav>

				<div class="copyright col-md-6">
					<?php do_action( 'unite_credits' ); ?>
					<?php echo of_get_option( 'custom_footer_text', 'Bluesky_still' ); ?>
					<?php do_action( 'unite2014_footer' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php 
//get leatest users
// @see http://codex.wordpress.org/Function_Reference/get_users
// @see http://codex.wordpress.org/Class_Reference/WP_Meta_Query]
// @see http://codex.wordpress.org/Class_Reference/WP_User_Query
// http://codex.wordpress.org/Function_Reference/wp_list_authors

$meta_query_args = array(
	// 'relation' => 'OR', // Optional, defaults to "AND"
	array(
		'key'     => 'description',
		'value'   => '',
		'compare' => '!='
	)
);
$args = array(
	// 'blog_id'      => $GLOBALS['blog_id'],
	'role'         => '',
	'meta_key'     => '',
	'meta_value'   => '',
	'meta_compare' => '',
	'meta_query'   => $meta_query_args,
	'include'      => array(),
	'exclude'      => array(),
	'orderby'      => 'registered',
	'order'        => 'DESC',
	'offset'       => '',
	'search'       => '',
	'number'       => '',
	'count_total'  => false,
	'fields'       => 'all',
	'who'          => ''
 ); 
$users = get_users( $args );
// echo '<pre>'.print_r($users,true).'</pre>';
foreach ( $users as $user ) {
	// echo '<div>' . esc_html( $user->user_login ) . '</div>';
	$user_id = $user->ID;
	$key = 'description';
	$single = true;
	$user_last = get_user_meta( $user_id, $key, $single ); 
	echo '<div>'.$user_last.'--'.$user->user_registered.'</div>';
}
 ?>
</body>
</html>
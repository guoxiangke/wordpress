<?php
/**
 * Template Name: invite20140811
 *
 * This is the template that displays full width page without sidebar
 *
 * @package unite2014
 */

	if ( is_front_page() ) {
	    get_header(  );
	} elseif ( is_page( '75' ) ) {
	    get_header( 'wedding' );
	} else {
	    get_header();
	}
?>
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

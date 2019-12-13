<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main apply-here" role="main">
<!-- <?php //the_title(); ?> -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>



<?php
//* Gravity Forms notification popup instead of the page redirect or AJAX notification
//* @link https://anythinggraphic.net/gravity-forms-notification-popup
/* Override the default Gravity Forms confirmation behavior, displaying it in a popup. Remember to style the divs.
----------------------------------------------------------------------------------------*/
add_filter( 'gform_confirmation', 'ag_custom_confirmation', 10, 4 );
function ag_custom_confirmation( $confirmation, $form, $entry, $ajax ) {
	add_filter( 'wp_footer', 'ag_overlay');
	return '<div id="gform-notification">' . $confirmation . '<a class="button" href="#">OK</a></div>';
}

?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

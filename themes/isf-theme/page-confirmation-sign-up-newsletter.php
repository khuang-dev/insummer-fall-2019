<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main confirmation-newsletter" role="main">

		<i class="far fa-times-circle"></i>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		
						
									
						</main><!-- #main -->
					</div><!-- #primary -->


				<?php get_footer(); ?>

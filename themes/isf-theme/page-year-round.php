<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_post_thumbnail(); ?>
			<?php the_field( 'banner_title' ); ?>
			<?php the_field( 'banner_date' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					<?php if(get_field('year_events')): ?>

						<?php while(has_sub_field('year_events')): ?>

							<h2><?php the_sub_field('event_year'); ?></h2>
							<p><?php the_sub_field('year_event_about'); ?></p>
							

						<?php endwhile; ?>

						<?php endif; ?>
					
					
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


				<!-- <php get_template_part( 'template-parts/content', 'page' ); ?> -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

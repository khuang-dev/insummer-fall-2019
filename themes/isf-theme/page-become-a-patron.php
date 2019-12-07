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

				<div class="patron-title">
					<?php
						if( have_rows('about_patron_circle') ):
							while ( have_rows('about_patron_circle') ) : the_row();
							?>
								<h1><?php the_sub_field('patron_header'); ?></h1>
								<p><?php the_sub_field('patron_information'); ?></p>
							<?php
							endwhile;
						else :
							// no rows found
						endif;
						?>
						</div>

						<div class="patron-packages">
							<?php
							if( have_rows('patron_packages') ):
								while ( have_rows('patron_packages') ) : the_row();
								?>
								<h3><?php the_sub_field('package_name'); ?></h3>
								<p><?php the_sub_field('package_price'); ?></p>
								<p><?php the_sub_field('package_options'); ?></p>

								<?php
								endwhile;
							else :
								// no rows found
							endif;
							?>
							</div>

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

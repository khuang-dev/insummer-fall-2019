<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main our-sponsors" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<div class="sponsors-content hide-mobile"><?php the_content(); ?></div>
					<div class="sponsors">

						<?php
						if( have_rows('sponsor_images') ):
							while ( have_rows('sponsor_images') ) : the_row();

							?>
							<div class="sponsors_box">
								<h2 class="sponsor_level"><?php the_sub_field('sponsor_level')?></h2>
								
								<div class="sponsor-img">
									<img src="<?php the_sub_field('sponsor_image'); ?>" />
								</div>
							</div>
								
						<?php
							endwhile;

						else :
							// no rows found
						endif;
						?>
					</div>
					
					<a class="become-sponsor" href ="become-a-sponsor">Become a Sponsor</a>
					
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div> <!-- entry-content -->
			</article><!-- #post-## -->


				<!-- <php get_template_part( 'template-parts/content', 'page' ); ?> -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

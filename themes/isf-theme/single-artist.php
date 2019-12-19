<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div class="artist-container">
					<div class="artist-img">
						<div class="artist_img-event"><img src="<?php echo get_field('artist_image');?>" /></div>
				
						<div class="artist-social hide-mobile">
							<a href="<?php the_field ('facebook_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Facebook.svg" alt="icon-facebok">
							</a>
							<a href="<?php get_field ('instagram_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/IG.svg" alt="icon-instagram">
							</a>
							<a href="<?php get_field ('twitter_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Twitter.svg" alt="icon-twitter">
							</a>
							<a href="<?php get_field ('youtube_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Youtube.svg" alt="icon-youtube">
							</a>
						</div>
					</div>

					<div class="artist-info">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="artist-testimonial hide-mobile">
							<?php
								if( have_rows('testimonials') ):
									while ( have_rows('testimonials') ) : the_row();
							?>
										<div class="testimonial-container">
											<p>"<?php the_sub_field('testimony'); ?>"</p> &nbsp
											<p class="testimonial_author"> --<?php the_sub_field('authors_name'); ?></p>
										</div>

							<?php
									endwhile;
								else :
									// no rows found
								endif;
							?>
						</div>
						<?php the_content(); ?>
						<?php the_field ('artist_description')?>
					</div>
				</div>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->


			<!-- <php get_template_part( 'template-parts/content', 'single' ); ?> -->


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

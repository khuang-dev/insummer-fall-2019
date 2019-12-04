<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class ="icon-message-us-wrapper">

						<img class="mobile-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Mobile.svg">

						<img class="email-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Email.svg">

						<img class="email-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Email.svg">

						<img class="location-tag"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Location.svg">
				</div>

								<?php while ( have_posts() ) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->

								<?php endwhile; // End of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->


			<?php get_footer(); ?>

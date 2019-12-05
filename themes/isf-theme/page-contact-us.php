<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main message-us-page" role="main">

				<div class ="icon-message-us-wrapper">

				<div class="contact-us-title">
                       <h3><?php the_title();?></h3> 
				</div>
				
					<div class="phone-message-us">
						<img class="mobile-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Mobile.svg">
						<a class="mobile">604-283-9172 </a>
					</div>


					<div class ="gen-inquires">
						<img class="email-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Email.svg">
						<a class="general-inquiries">General Inquiries 
							info@indiansummerfest.ca </a>
					</div>


					<div class ="med-inquires">
						<img class="email-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Email.svg">
						<a class="media-inquiries"><span>Media Inquiries</span>
								media@indiansummerfest.ca </a>
					</div>

					
					<div class ="adr-messge-us">

						<img class="location-tag"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Location.svg">
						<a class="adress-message-us">#201 - 1880 Fir Street Vancouver, B.C. V6J 3B1 </a>

				   </div>

				   <div class="map-wrapper">
					   <?php the_field('map_iframe'); ?>
				   </div>
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

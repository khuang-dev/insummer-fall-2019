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

				<?php

							// check if the repeater field has rows of data
							if( have_rows('contact_info') ): ?>

							<div class="contact-info-loop">

							<?php

								// loop through the rows of data
								while ( have_rows('contact_info') ) : the_row();

									// display a sub field value
									?>
								<div class="contact-info-item">
									<img class="mobile-svg" src="<?php the_sub_field('contact_info_icon'); ?>"/>
									<div class="contact-info-details"> <?php  the_sub_field('contact_info_details');?> </div>
								</div>
								
								<?php endwhile;
								
								?>
								</div>
								<?php

							else :

								// no rows found

							endif;

							?>
							

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

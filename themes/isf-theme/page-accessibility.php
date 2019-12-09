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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


						<!-- THIS IS THE LOOP FOR VIDEO NR.1 -->
									<?php

						// check if the repeater field has rows of data
						if( have_rows('accessibility', ) ):   ?>

							<div class="accessibility-video-loop">						

							<?php
										// loop through the rows of data
										while ( have_rows('accessibility', ) ) : the_row();

										// display a sub field value
										?>

							<div class="accessibility-about-info">
							<div class="accessibility-about-title"> <?php  the_sub_field('title_accessibility', );?> </div>
								<img class="accessibility-about-img" src="<?php the_sub_field('image_accessibility'); ?>"/>
								<div class="accessibility-about-info"> <?php  the_sub_field('contact_information');?> </div>
							</div>

											<?php endwhile;
											?>

										</div>

											<?php
									else :
										// no rows found
									endif;

									?>

									<!-- END OF THE LOOP VIDEO NR.1 -->





			<!-- THIS IS THE LOOP FOR ICONS NR.1 -->
			<?php

					// check if the repeater field has rows of data
					if( have_rows('about_accessibility', ) ):   ?>

						<div class="accessibility-info-loop">						

						<?php
									// loop through the rows of data
									while ( have_rows('about_accessibility', ) ) : the_row();

									// display a sub field value
									?>

						<div class="accessibility-info-item">
						<div class="accessibility-title"> <?php  the_sub_field('information_title', );?> </div>
							<img class="accessibility-icon-svg" src="<?php the_sub_field('accessibility_image'); ?>"/>
							<div class="accessibility-info-details"> <?php  the_sub_field('information_details');?> </div>
						</div>

										<?php endwhile;
										?>

									</div>

										<?php
								else :
									// no rows found
								endif;

								?>

								<!-- END OF THE LOOP ICONS NR.1 -->




										</main><!-- #main -->
									</div><!-- #primary -->

								<?php get_footer(); ?>

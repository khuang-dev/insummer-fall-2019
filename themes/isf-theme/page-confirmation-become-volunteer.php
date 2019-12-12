<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main confirmation-become-volunteer" role="main">

		<i class="far fa-times-circle"></i>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>


<?php
			
									if( have_rows('apply_here_button') ):   ?>

						<div class="volunteer-fifth-loop">						

								<?php	while ( have_rows('apply_here_button' ) ) : the_row();?>

							<div class="volunteer-apply-btn">
							    <?php
									
										$button = get_sub_field('apply_button'); 
										//var_dump($button);
									?>
									<a href="<?php echo $button[ 'url' ]; ?>" target="<?php echo $button[ 'target' ]; ?>" class="apply-btn"><p><?php echo $button[ 'title' ]; ?></p></a>

									<?php	endwhile;

									else :endif;?>
							</div>
						</div>





		</main><!-- #main -->
	</div><!-- #primary -->




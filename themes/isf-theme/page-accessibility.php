<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php if ( have_rows('banner_content') ) : ?>
			<?php /* Start the Loop */ ?>
			<div class="main-carousel">    

				<?php while ( have_rows('banner_content') ) : the_row(); ?>
				<section class="banner carousel-cell">

				<div class="banner__content">
					<h1 class="banner__title"><?php the_sub_field('banner_title');?></h1>
					<p class="banner__description p__white"><?php the_sub_field('banner_description');?></p>
				
							<?php if ( have_rows('banner_button')):?>
							<?php while ( have_rows('banner_button')) : the_row(); ?>
							<button class="banner__btn">
							<a class="banner__btn-label" href="<?php the_sub_field('banner_button_url');?>"><?php the_sub_field('banner_button_label');?></a>
							</button>
							<?php endwhile; ?>
							<?php else : ?>
							<?php endif; ?>
				</div>

		<div class="banner__image-wrapper">
			<img class="banner__image" src="<?php the_sub_field('banner_image'); ?>"/>
		</div>
	</section>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php //the_content(); ?>

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

					<div class="accessibility-about">

						<div class="accessibility-about-title"> <h3><?php  the_sub_field('title_accessibility', );?> </h3></div>
							<div class="title-vs-img">
						<img class="accessibility-about-img" src="<?php the_sub_field('image_accessibility'); ?>"/>
						
						<div class="accessibility-about-info"> <h5><?php  the_sub_field('contact_information');?> </h5></div>
					</div>
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
						
						<div class ="icon-vs-title">
							<img class="accessibility-icon-svg" src="<?php the_sub_field('accessibility_image'); ?>"/>
								
						
							<div class="accessibility-title"><h3> <?php  the_sub_field('information_title', );?></h3> </div>
						</div>

							<div class="accessibility-info-details"> <?php  the_sub_field('information_details');?> </div>
						

						</div>

						<?php
					$img=get_sub_field('accessibility_image');
					// var_dump($img);

					$title=get_sub_field('information_title' );
					$details=get_sub_field('information_details');
						?>
								
									<button class="accordion" >
										<span>
											<img src="<?=$img?>" width="20px">
											<?=$title?>
										</span>
										<i class="fas fa-angle-down"></i>
									
									</button>

											<div class="panel">
											<p><?=$details?></p>
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

								<img src="<?php echo get_field ('image_file')?> "/>

									<!-- THIS IS THE LOOP FOR ICONS NR.2 -->

									<?php

// check if the repeater field has rows of data
if( have_rows('about_accessibility_2', ) ):   ?>

	<div class="accessibility-info-loop">						

	<?php
				// loop through the rows of data
				while ( have_rows('about_accessibility_2', ) ) : the_row();

				// display a sub field value
				?>

	<div class="accessibility-info-item">
	
	<div class ="icon-vs-title">
		<img class="accessibility-icon-svg" src="<?php the_sub_field('accessibility_image'); ?>"/>

		<div class="accessibility-title"><h3> <?php  the_sub_field('information_title', );?></h3> </div>
							</div>

		<div class="accessibility-info-details"> <?php  the_sub_field('information_details');?> </div>
	</div>


	<?php
	$img=get_sub_field('accessibility_image');
	// var_dump($img);

	$title=get_sub_field('information_title' );
	$details=get_sub_field('information_details');
?>
					<button class="accordion">

									<span>
							<!-- <div class ="acces-img-title"> -->

											<!-- <div class ="access-img-accordion"> -->
												<img src="<?=$img?>" width="20px">
										<!-- </div> -->
										
												<?=$title?>

												
									</span>

									<i class="fas fa-angle-down"></i>
							<!-- </div> -->
							
							
					</button>


						<div class="panel">
						<p><?=$details?></p>
						</div>

						

					<?php endwhile;
					?>

				</div>

					<?php
			else :
				// no rows found
			endif;

			?>
									<!-- END OF THE LOOP ICONS NR.2 -->




									


										</main><!-- #main -->
									</div><!-- #primary -->

								<?php get_footer(); ?>

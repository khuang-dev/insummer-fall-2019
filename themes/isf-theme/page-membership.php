<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area page-membership">
		<main id="main" class="site-main" role="main">

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
			<img class="banner__image banner_imgfit" src="<?php the_sub_field('banner_image'); ?>"/>
		</div>
	</section>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>

					

				<div class="entry-content">

					<?php if(get_field('about_membership')): ?>

						<?php while(has_sub_field('about_membership')): ?>

						
							<h2><?php the_sub_field('members'); ?></h2>
							<p class="member-text"><?php the_sub_field('role_of_members'); ?></p>
							

						<?php endwhile; ?>

						<?php endif; ?>

						<?php if(get_field('membership_package')): ?>
						
							<div class="curator">
										<?php while(has_sub_field('membership_package')): ?> 
										<div class="member-title">		
										<h3 class="package-title" ><?php the_sub_field('membership_title'); ?></h3>
										<p><?php the_sub_field('membership_price'); ?></p>
										</div>
										<div class="package-text">
										<p><?php the_sub_field('membership_information'); ?></p>
										</div>
									</div>
							
							</div>

							<?php endwhile; ?>

							<?php endif; ?>


					<?php wp_link_pages( array(
							 'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							 'after'  => '</div>',
						 ) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

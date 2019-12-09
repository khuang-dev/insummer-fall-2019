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

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<?php if(get_field('isf_events')): ?>

						<?php while(has_sub_field('isf_events')): ?>

								<h1><?php the_sub_field('current_event'); ?></h1>
								<?php the_sub_field('event_information'); ?>
							
						<?php endwhile; ?>

						<?php endif; ?>
				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

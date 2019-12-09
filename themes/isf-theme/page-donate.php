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
		<main id="main" class="site-main page-donate" role="main">

		<div class ="donate-wrapper">

		<div class="donate-title">
					<h3><?php the_title();?></h3> 
					<a class="donate-text"> We extend our heartfelt gratitude to our visionary circle of patrons for their commitment, support and generosity in making the festival what it is. </a>
			</div>
		</div>

		<div class="donation-box">
			<img class="donate1-svg"src="<?php echo get_stylesheet_directory_uri();?>/assets/01_Icons/SVG/Donate1.svg">
			<a class="donation-amount">Donation Amount </a>
		</div>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<div class="submit-btn"> 
			<a class="submit-btn-txt">Submit </a>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php // get_sidebar(); ?>
<?php get_footer(); ?>

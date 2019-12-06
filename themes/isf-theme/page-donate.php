<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */


get_header(); ?>

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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


				<div class="submit-btn"> 
				<a class="submit-btn-txt">Submit </a>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php // get_sidebar(); ?>
<?php get_footer(); ?>

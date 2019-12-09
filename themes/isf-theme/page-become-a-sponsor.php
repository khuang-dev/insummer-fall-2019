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
		<main id="main" class="site-main become-a-sponsor" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<div class="sponsor-thumbnail">
						
						<?php the_post_thumbnail() ?>
						<div class="become_sponsor hide-mobile"><?php the_content(); ?></div>
					</div>
					<p class="sponsor-package">View Sponsorship Package</p>
					
					<?php if(get_field('testimony')): ?>

						<ul>

						<?php while(has_sub_field('testimony')): ?>

							<li class="testimony"> 
								<p class="testimony-quote"><?php the_sub_field('sponsor_testimony'); ?> </p>

								<div class="sponsors-author">								
									<p class="testimony-author"> <?php the_sub_field('testimony_author'); ?> </p>

									<p class="author-title"> <?php the_sub_field('author_title'); ?> </p>
								</div>

							</li>

						<?php endwhile; ?>

						</ul>

						<?php endif; ?>

						<p class="sponsor-info">Contact for more Information</p>


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

		</main><!-- #main -->
	</div><!-- #primary -->

	<!-- <php 
	

<?php get_footer(); ?>

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
			<img class="banner__image banner_imgfit" src="<?php the_sub_field('banner_image'); ?>"/>
		</div>
	</section>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
		<?php the_post_thumbnail(); ?>
        <?php the_field( 'banner_title' ); ?>
        <?php the_field( 'banner_date' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	</section>
<?php endwhile; ?>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div class="entry-content">
					<?php the_content(); ?>

				<div class="patron-title">
					<?php
						if( have_rows('about_patron_circle') ):
							while ( have_rows('about_patron_circle') ) : the_row();
							?>
								<h1><?php the_sub_field('patron_header'); ?></h1>
								<p><?php the_sub_field('patron_information'); ?></p>
							<?php
							endwhile;
						else :
							// no rows found
						endif;
						?>
						</div>

										


						<div class="patron-packages hide-mobile">
							<?php
							if( have_rows('patron_packages') ):
								while ( have_rows('patron_packages') ) : the_row();
								?>
								<div class="patron-package hide-mobile">
									<div class="patron-title-price">
								<h3><?php the_sub_field('package_name'); ?></h3>
								<p><?php the_sub_field('package_price'); ?></p>
									</div>
								<p><?php the_sub_field('package_options'); ?></p>
							</div>

							<?php
							$package_name=get_sub_field('package_name');
							$package_options=get_sub_field('package_options');
							?>

							<button class='accordion-patron hide-desktop'>
							<span>
							<?=$package_name?>
							<p><?php the_sub_field('package_price'); ?></p>
							</span>
							</button>

						<div class="panel-patron hide-desktop">
						<p><?=$package_options?></p>
						</div>

		
								<?php
								endwhile;
							else :
								// no rows found
							endif;
							?>
						</div>

					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


				<!-- <php get_template_part( 'template-parts/content', 'page' ); ?> -->

			<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

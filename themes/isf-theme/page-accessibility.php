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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					<div class="accessibility">
						<?php
							if( have_rows('accessibility') ):

								while ( have_rows('accessibility') ) : the_row();
								?>

								<h1><?php echo the_sub_field('title_accessibility');?></h1>
								<img src="<?php the_sub_field('image_accessibility');?>" />
								<p><?php the_sub_field('contact_information');?></p>

								<?php
								endwhile;

							else :
								// no rows found
							endif;

							?>
					</div>

					<div class="about-accessibility1">
							<?php

							if( have_rows('about_accessibility') ):

								while ( have_rows('about_accessibility') ) : the_row();
								?>
								<img src="<?php the_sub_field('accessibility_image'); ?>" ?>
								<h3><?php the_sub_field('information_title'); ?></h3>
								<p><?php the_sub_field('information_details'); ?></p>


								<?php

								endwhile;
							else :
								// no rows found
							endif;

							?>
					</div>

						<img src="<?php echo get_field ('image_file')?> "/>

					<div class="about-accessibility2">
						<?php

							if( have_rows('about_accessibility_2') ):

								while ( have_rows('about_accessibility_2') ) : the_row();
								?>
								<img src="<?php the_sub_field('accessibility_image'); ?>" ?>
								<h3><?php the_sub_field('information_title'); ?></h3>
								<p><?php the_sub_field('information_details'); ?></p>


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

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

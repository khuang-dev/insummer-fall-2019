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

					<?php

						// check if the repeater field has rows of data
						if( have_rows('accessibility') ):

							// loop through the rows of data
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

						<?php

						// check if the repeater field has rows of data
						if( have_rows('about_accessibility') ):

							// loop through the rows of data
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

						<img src="<?php echo get_field ('image_file')?> "/>

						<?php

							// check if the repeater field has rows of data
							if( have_rows('about_accessibility_2') ):

								// loop through the rows of data
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

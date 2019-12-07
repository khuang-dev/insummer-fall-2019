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

					<?php if(get_field('past_festival_testimonials')): ?>

						<?php while(has_sub_field('past_festival_testimonials')): ?>

							<p><?php the_sub_field('past_testimonial'); ?></p>
							<p><?php the_sub_field('author_of_testimony'); ?></p>
							<p><?php the_sub_field('festival_testimony_source'); ?></p>


						<?php endwhile; ?>

						<?php endif; ?>

						<?php
							if( have_rows('awards') ):
								while ( have_rows('awards') ) : the_row();
						?>
									<h1><?php the_sub_field('awards_type');?></h1>
									<p><?php the_sub_field('about_award');?></p>

						<?php
								endwhile;

							else :
								// no rows found
							endif;

							?>

						<?php
						if( have_rows('award_list') ):

							while ( have_rows('award_list') ) : the_row();
							?>

								<p><?php the_sub_field('column_one'); ?></p>
								<p><?php the_sub_field('column_two'); ?></p>
								<p><?php the_sub_field('column_three'); ?></p>

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

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php //if ( has_post_thumbnail() ) : ?>
					<?php// the_post_thumbnail( 'large' ); ?>
				<?php //endif; ?>

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">

			<section class="single_event-page">
				<?php the_content(); ?>
				<img src="<?php the_field ('event_image');?>" alt="Artist Image">
				
				<div class="single_event-info">
					<p><?php the_field ('event_date');?>DATE</p>

					<?php
						if( have_rows('event_time') ):
							while ( have_rows('event_time') ) : the_row();
							?>
								<?php the_sub_field('start_time'); ?>
								<?php the_sub_field('end_time'); ?>
								<?php
							endwhile;
						else :
							// no rows found
						endif;
						?>

						<?php the_field ('ticket_price'); ?>
						<?php the_field ('venue'); ?>


					<div class="single_e_details">
						<?php
							if( have_rows('event_address') ):
								while ( have_rows('event_address') ) : the_row();?>
									<?php the_sub_field('address'); ?>
									<?php the_sub_field('city'); ?>
									<?php the_sub_field('postal_code'); ?>
									<?php the_sub_field('country'); ?>
									<?php
								endwhile;
							else :
								// no rows found
							endif;
							?>
						</div>
				</div>


				<?php
					if( have_rows('event_button') ):
						while ( have_rows('event_button') ) : the_row();
						?>
						<button>
							<a href="<?php the_sub_field('event__btn-url'); ?>"><?php the_sub_field('event__btn-label'); ?></a>
						</button>
							<?php
						endwhile;
					else :
						// no rows found
					endif; ?>
			</section>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->


			<!-- <php get_template_part( 'template-parts/content', 'single' ); ?> -->

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

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
				
				<?php the_title( '<h1 class="entry-header hide-mobile">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

			<section class="single_event-page">
				<?php the_content(); ?>
				<img class="single_event-img"src="<?php the_field ('event_image');?>" alt="Artist Image">
				<?php the_title( '<h1 class="entry-title hide-desktop">', '</h1>' ); ?>

				<div class="single_event-mobile hide-desktop">
					<div>
						<p class="single_event-tags">DATE & TIME</p>
						<div class="single_event-content">
							<p><?php the_field ('event_date');?></p>
							<p>
								<?php
								if( have_rows('event_time') ):
									while ( have_rows('event_time') ) : the_row();
									?>
										<p><?php the_sub_field('start_time'); ?> - <?php the_sub_field('end_time'); ?></p>
										<?php
									endwhile;
								else :
									// no rows found
								endif;
								?>
							</p>
						</div>
					</div>
					<div>
						<p class="single_event-tags">LOCATION</p>
						<div class="single_event-content">
							<p><?php the_field ('venue'); ?></p>
							<p><?php
								if( have_rows('event_address') ):
									while ( have_rows('event_address') ) : the_row();?>
									<p>
										<?php the_sub_field('address'); ?>
										<?php the_sub_field('city'); ?>
										<?php the_sub_field('province');?>
										<?php the_sub_field('postal_code'); ?>
										<?php the_sub_field('country'); ?>
									</p>
										<?php
										
									endwhile;
								else :
									// no rows found
								endif;
								?>
							</p>
						</div>
					</div>
					<div>
						<p class="single_event-tags">TICKET PRICE</p>
						<div class="single_event-content">
							<p><?php the_field ('ticket_price'); ?></p>
						</div>
					</div>
					<div>
						<p class="single_event-tags">EVENT TAGS</p>
						<div class="single_event-content">
							<p>
								<?php
									$terms = get_the_terms( get_the_ID(), 
										'event-taxonomy'
									); ?>

									<?php foreach ( $terms as $term ) :
										echo  $term->name; 
									endforeach;?>	
							</p>
						</div>
					</div>
				</div>

				<div class="single_event-info hide-mobile">
					<p class="single_event-tags">DATE</p>
					<p><?php the_field ('event_date');?></p>
					<?php
						if( have_rows('event_time') ):
							while ( have_rows('event_time') ) : the_row();
							?>
								<p class="single_event-tags">TIME</p>
								<p><?php the_sub_field('start_time'); ?> - <?php the_sub_field('end_time'); ?></p>
								<?php
							endwhile;
						else :
							// no rows found
						endif;
						?>
						<p class="single_event-tags">TICKET PRICE</p>
						<p><?php the_field ('ticket_price'); ?></p>

						<div class="single_event-category">
						<p class="single_event-tags">EVENT TAGS</p>
							<p><?php
								$terms = get_the_terms( get_the_ID(), 
									'event-taxonomy'
								); ?>

								<?php foreach ( $terms as $term ) :
									echo  $term->name; 
								endforeach;?>	
							</p>						
						</div>
						<p class="single_event-tags">VENUE</p>
						<p><?php the_field ('venue'); ?></p>

					<div class="single_e_details">
						<?php
							if( have_rows('event_address') ):
								while ( have_rows('event_address') ) : the_row();?>
								<p class="single_event-tags">ADDRESS</p>
								<p>
									<?php the_sub_field('address'); ?>
									<?php the_sub_field('city'); ?>
									<?php the_sub_field('province');?>
									<?php the_sub_field('postal_code'); ?>
									<?php the_sub_field('country'); ?>
								</p>
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
						<butto class="single_event-btn hide-mobile">
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

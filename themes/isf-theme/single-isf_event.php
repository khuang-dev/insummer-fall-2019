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
				<h1 class="hide-mobile year_round-head">YEAR ROUND EVENTS</h1>
				<?php the_title( '<h1 class="single_event-title h3__left-border-pink hide-mobile">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

			<!-- MOBILE -->
			<section class="single_event-page">
				<?php the_content(); ?>
				<img class="single_event-img hide-desktop"src="<?php the_field ('event_image');?>" alt="Artist Image">
				<div>
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
			</div>

			<!-- Desktop version -->
				<div class="single_event-info hide-mobile">
				<img class="single_event-image"src="<?php the_field ('event_image');?>" alt="Artist Image">

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

							<!-- ARTIST -->
				<div class="artist-container">
					<div class="artist-img">
						<img src="<?php the_field('artist_image');?>" />
						
						<div class="artist-social hide-mobile">
							<a href="<?php the_field ('facebook_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Facebook.svg" alt="icon-facebok">
							</a>
							<a href="<?php get_field ('instagram_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/IG.svg" alt="icon-instagram">
							</a>
							<a href="<?php get_field ('twitter_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Twitter.svg" alt="icon-twitter">
							</a>
							<a href="<?php get_field ('youtube_url', 'options'); ?>">
								<img class="artist-icon icon__header" src="<?php echo get_template_directory_uri () ?>/assets/01_Icons/SVG/Youtube.svg" alt="icon-youtube">
							</a>
						</div>
					</div>
					
					<p class="h3__left-border-pink artist_event-name"><?php the_field('artist_name');?></p>

					<div class="artist-info">
						<div class="artist-testimonial hide-mobile">
							<?php
								if( have_rows('testimonials') ):
									while ( have_rows('testimonials') ) : the_row();
							?>
										<div class="testimonail-container">
										<p><?php the_sub_field('testimony'); ?></p>
										<p><?php the_sub_field('authors_name'); ?></p>
										</div>

							<?php
									endwhile;
								else :
									// no rows found
								endif;
							?>
						</div>
						<?php the_content(); ?>
						<p class="h3__left-border-pink artist_event-name"><?php the_field('artist_name');?></p>
						<?php the_field('artist_description');?>
					</div>
				</div>

							<!-- Buttons -->
				<?php
					if( have_rows('event_button') ):
						while ( have_rows('event_button') ) : the_row();
						?>
						<button class="single_event-btn hide-mobile">
							<a href="<?php the_sub_field('event__btn-url'); ?>"><?php the_sub_field('event__btn-label'); ?></a>
						</button>
							<?php
						endwhile;
					else :
						// no rows found
					endif; ?>
			</section>

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

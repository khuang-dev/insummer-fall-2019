<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php if ( have_rows('banner_content') ) : ?>
			<?php /* Start the Loop */ ?>
			<div class="main-carousel hide-mobile">    

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

				<div class="banner__image-wrapper hide-mobile">
					<img class="banner__image" src="<?php the_sub_field('banner_image'); ?>"/>
				</div>
				</section>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
		</div>
	
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">

					<section class="year-events">
						<?php if(get_field('year_events')): ?>
							<?php while(has_sub_field('year_events')): ?>
								<h1 class="year-round-head"><?php the_sub_field('event_year'); ?></h1>
								<p class="year-content"><?php the_sub_field('year_event_about'); ?></p>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>	

					<section class="yearly-events">
						<h2 class="events-title">Check out our Events</h2>

						<!-- <php get_category('');?> -->
						
						<div class="event-container">
						<?php
							$args = array( 'post_type' => 'isf_event', 'order' => 'ASC', 'posts_per_page' => 5);
							$event_posts = get_posts ($args);
						?>

						<?php foreach ( $event_posts as $post) : setup_postdata($post); ?>
						<div class="wrapper__image-event">
                            <img src="<?php the_field('event_image'); ?>">
                            <div class="thumbnail__date">
                                <?php $date = new DateTime(get_field('event_date')); ?>
                                <p class="thumbnail__date-day"><?php echo $date->format('d'); ?></p>
                                <p class="thumbnail__date-month"><?php echo $date->format('M'); ?></p>
                            </div>
                        </div>
                        
                        <div class="wrapper__info-event">
                            <p><?php the_title(); ?></p>
                            <p><?php the_field('event_date'); ?></p>
                            <?php if ( have_rows('event_time')):?>
                                <?php while ( have_rows('event_time')) : the_row(); ?>
                                    <?php the_sub_field('start_time');?> - <?php the_sub_field('end_time');?>
                                <?php endwhile; ?>
                                <?php else : ?>
								<?php endif; ?>
						</div>

						<div class="event-button">
						<button class="event_button">
							<a class="banner__btn-label" href="<?php the_sub_field('event__btn-url');?>"><?php the_sub_field('event__btn-label');?></a>
							</button>

							<!-- <php
									if( have_rows('event_buttone') ):
										while ( have_rows('event_button') ) : the_row();
										?>
											<php the_sub_field('event__btn-label'); ?>
											<a href="<php the_sub_field('event__btn-url'); ?>"></a>
									<php		
										endwhile;
									else :
									endif;
									?> -->
						</div>
						</div>
                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>


					</section>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

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
		<main id="main" class="site-main" role="main">

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title hide-mobile">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

				<section class="festival-content">
					<?php if(get_field('isf_events')): ?>

						<?php while(has_sub_field('isf_events')): ?>

								<h1 class="hide-mobile"><?php the_sub_field('current_event'); ?></h1>
								<?php the_sub_field('event_information'); ?>
							
						<?php endwhile; ?>

						<?php endif; ?>
				</section>

				<section class="festival-events">
						<h2 class="events-title">Know the Artists</h2>

						<div class="categories-info">
						<?php



							$terms = get_terms( array(
								'taxonomy' => 'event-taxonomy',
								'hide_empty' => 0,
							) );

							
							foreach ( $terms as $term ) :

								// echo '<pre>';
								// var_dump($term);
								// echo '</pre>';
								echo '<a href="' . get_term_link( $term )  .  '">' . $term->name.  '</a>';
	
							endforeach;




							$args = array(
								'orderby' => 'name',
								'order'   => 'ASC',
								'post_type' => 'isf_events', 'artist');
								$event_categories = get_categories ($args);
								// echo '<pre>';
								//  print_r(get_categories ());
								//  echo '</pre>';
							?>

							<?php foreach ($event_categories as $categories){ ?>
								
								<?php  // var_dump(get_term_link($categories)); ?>
								<a href="<?php echo get_term_link($categories);?>"><?php echo $categories->name;?></a> 
							<?php }?> 

							</div>
						<!-- <php get_category('');?> -->
						
						<div class="event-container">
						<?php
							$args = array( 
								'post_type' => 'isf_event', 
								'order' => 'RAND',
								'posts_per_page' => get_option('posts_per_page'));
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

						</div>
						</article>
                    <?php endforeach; wp_reset_postdata(); ?>


					</section>


					
				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

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
				</header><!-- .entry-header -->

				<div class="entry-content">

				<section class="festival-content">
					<?php if(get_field('isf_events')): ?>

						<?php while(has_sub_field('isf_events')): ?>
								<div class="wrapper__isf">
								<h3 class="hide-mobile h3__right-border-pink"><?php the_sub_field('current_event'); ?></h3>
								<span><?php the_sub_field('event_information'); ?></span>
						</div>
							
						<?php endwhile; ?>

						<?php endif; ?>
				</section>

				<section class="festival-events">
						<h3 class="events-title h3__left-border-pink">Know the Artists</h3>

						<div class="categories-info">
						<div class="wrapper__category"><button value="all" class="category-active category-all-btn">View All</button></div>
						<?php
							$terms = get_terms( array(
                                'taxonomy' => 'event-taxonomy', 'create_isf_categories',
                                'hide_empty' => 0,
							) ); ?>
								
                            <?php foreach ( $terms as $term ) :
                                echo '<div class="wrapper__category"><button class="category-btn" value='. $term->term_id .'>' . $term->name.  '</button></div>'; 
							endforeach;?>							

							</div>
						<!-- <php get_category('');?> -->
							<section class="wrapper__upcoming-events grid-column-3 remove-margin-bottom" id="content-output-isf">
							<?php 
				$args = array( 'post_type' => 'isf_event', 'order' => 'ASC', 'posts_per_page' => '-1');
   				$event_posts = get_posts( $args ); // returns an array of posts
			    ?>

			<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
                   <?php /* Content from your array of post results goes here */ ?>
                   <article class="wrapper__single-event">

                       <div class="wrapper__image-event">
                            <img src="<?php the_field('event_image'); ?>">
                            <div class="thumbnail__date">
                                <?php $date = new DateTime(get_field('event_date')); ?>
                                <p class="thumbnail__date-month"><?php echo $date->format('M'); ?></p>
                                <p class="thumbnail__date-day"><?php echo $date->format('d'); ?></p>
                            </div>
                        </div>
                        
                        <div class="wrapper__info-event">
                            <p class="title__event"><?php the_title(); ?></p>
                            <p><?php the_field('event_date'); ?></p>
                            <?php if ( have_rows('event_time')):?>
                                <?php while ( have_rows('event_time')) : the_row(); ?>
                                    <?php the_sub_field('start_time');?> - <?php the_sub_field('end_time');?>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?>
                        </div>
                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>
							</section>
							<p class="isf-plus-description"><?php the_field('isfplus_description');?></p>
							<section class="wrapper__upcoming-events grid-column-3 wrapper-isfplus-event" id="content-output-isfplus">
							</section>



					
				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

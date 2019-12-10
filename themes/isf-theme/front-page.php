<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php if ( have_rows('banner_content') ) : ?>

<?php if ( is_home() && ! is_front_page() ) : ?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
<?php endif; ?>

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
        
        <section class="wrapper__upcoming-events">
            <h2 class="title__upcoming-event">Upcoming Events</h2>

                <?php 
				$args = array( 'post_type' => 'isf_event', 'order' => 'ASC', 'posts_per_page' => 3);
   				$event_posts = get_posts( $args ); // returns an array of posts
			    ?>

			<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
                   <?php /* Content from your array of post results goes here */ ?>
                   <article class="wrapper__single-event">

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
                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>

            </section>

            <section class="wrapper__testimony">
                <?php the_field('testimony_header'); ?>
                <article class="container__testimony">
                    <?php the_field('testimony_image'); ?>
                    <?php the_field('testimony_video'); ?>
                    <div class="wrapper__testimony-text">
                    <?php if ( have_rows('testimony')):?>
                            <?php while ( have_rows('testimony')) : the_row(); ?>
                                <p><?php the_sub_field('testimony_text');?></p>
                                <p><?php the_sub_field('testimony_author');?></p>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>  
                    </div>
                </article>          
            </section>

            <section class="wrapper__featured">
            <?php if ( have_rows('featured_page')):?>
                            <?php while ( have_rows('featured_page')) : the_row(); ?>
                                <div class="wrapper__featured-content" style="background-image: url(<?php the_sub_field('featured_page_image');?>); background-size: cover;">
                                <div class="wrapper__featured-text featured-left featured-right">
                                <h2><?php the_sub_field('featured_page_title');?></h2>
                                <?php if ( have_rows('featured_page_description')):?>
                                    <?php while ( have_rows('featured_page_description')) : the_row(); ?>
                                    <p class="p__white"><?php the_sub_field('line_one');?></p>
                                    <p class="p__white"><?php the_sub_field('line_two');?></p>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?> 
                                </div>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?> 
            </section>


		</main><!-- #main -->
    </div><!-- #primary -->
    

<?php get_footer(); ?>

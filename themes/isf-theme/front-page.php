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
            <img class="banner__image banner_imgfit" src="<?php the_sub_field('banner_image'); ?>"/>
            </div>
    </section>
<?php endwhile; ?>

<?php else : ?>


<?php endif; ?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <h3 class="h3__left-border-pink title__upcoming-event">Upcoming Events</h3>
        <section class="wrapper__upcoming-events">
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

                        <div class="wrapper__btn-info">
                            <?php if ( have_rows ('event_button'));?>
                            <?php while (have_rows('event_button')) : the_row(); ?>
                                    <button class="events-btn">
                                    <a href="<?php the_sub_field('event_btnurl');?>"><?php the_sub_field('event_btnlabel');?></a>
                                    </button>
                                    <?php endwhile; ?>
                        </div>

                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>

            </section>
            
            <section class="wrapper__testimony">
            <h3 class="h3__left-border-pink"><?php the_field('testimony_header'); ?></h3>
                <article class="container__testimony">
                    <?php the_field('testimony_image'); ?>
                    <?php the_field('testimony_video'); ?>
                    <div class="wrapper__testimony-text">
                    <?php if ( have_rows('testimony')):?>
                            <?php while ( have_rows('testimony')) : the_row(); ?>
                            <div class="wrapper__testimony-single">
                                <p><?php the_sub_field('testimony_text');?></p>
                                <p class="author__testimony">- <?php the_sub_field('testimony_author');?></p>
                    </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>  
                    </div>
                </article>          
            </section>

            <section class="wrapper__featured">
            <?php if ( have_rows('featured_content')):?>
                            <?php while ( have_rows('featured_content')) : the_row(); ?>
                                <div class="wrapper__featured-content" style="background-image: url(<?php the_sub_field('featured_page_image');?>); background-size: cover;">
                                <div class="wrapper__featured-text">
                                <h2 class="h2__featured"><?php the_sub_field('featured_title')?></h2>
                                <?php if ( have_rows('featured_description')):?>
                                    <?php while ( have_rows('featured_description')) : the_row(); ?>
                                    <p class="p__featured p__white"><?php the_sub_field('line_one');?></p>
                                    <p class="p__featured p__white"><?php the_sub_field('line_two');?></p>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?> 
                                </div>
                                </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?> 
            </section>
            
            <section>
                <h3 class="h3__left-border-pink title__sponsor"><?php echo get_the_title(21); ?><h3>
                <div class="wrapper__fp-sponsor">
                <?php if ( have_rows('sponsor_images', 21)):?>
                                    <?php while ( have_rows('sponsor_images', 21)) : the_row(); ?>
                                    <div class="wrapper__single-sponsor-img">
                                        <img src="<?php the_sub_field('sponsor_image', 21);?>">
                                    </div>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?> 
                </div>
            </section>

            <div class="wrapper_btn_sponsor">
                <button class="link_btn-sponsors">
                    <a href="our-sponsors">SEE MORE</a>
                </button>
            </div>

		</main><!-- #main -->
    </div><!-- #primary -->
    

<?php get_footer(); ?>

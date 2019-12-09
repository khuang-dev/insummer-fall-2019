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
                <h2>Upcoming Events</h2>
                <?php 
				$args = array( 'post_type' => 'isf_event', 'order' => 'DSC', 'posts_per_page' => 3);
   				$event_posts = get_posts( $args ); // returns an array of posts
			    ?>
			<div class="">

			<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
   				<?php /* Content from your array of post results goes here */ ?>
					   <div class="wrapper_single-event">
                        <img src="<?php the_field('event_image'); ?>">
                        <?php $date = new DateTime(get_field('event_date')); ?>
                        <div>
                        <?php echo $date->format('M'); ?>
                        <?php echo $date->format('d'); ?>
                        </div>
                        <?php the_title(); ?>
                        <?php the_field('event_date'); ?>
                        <?php if ( have_rows('event_time')):?>
                            <?php while ( have_rows('event_time')) : the_row(); ?>
                                <?php the_sub_field('start_time');?> - <?php the_sub_field('end_time');?>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
            </section>

            <section class="wrapper__testimony">
                <?php the_field('testimony_header'); ?>
                <?php the_field('testimony_image'); ?>
                <?php the_field('testimony_video'); ?>
                <?php if ( have_rows('testimony')):?>
                            <?php while ( have_rows('testimony')) : the_row(); ?>
                                <?php the_sub_field('testimony_text');?>
                                <?php the_sub_field('testimony_author');?>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>            
            </section>

            <section class="wrapper__featured">
            <?php if ( have_rows('featured_page')):?>
                            <?php while ( have_rows('featured_page')) : the_row(); ?>
                                <img src="<?php the_sub_field('featured_page_image');?>">
                                <?php the_sub_field('featured_page_title');?>
                                <?php if ( have_rows('featured_page_description')):?>
                                    <?php while ( have_rows('featured_page_description')) : the_row(); ?>
                                    <?php the_sub_field('line_one');?>
                                    <?php the_sub_field('line_two');?>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?> 
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?> 
            </section>


		</main><!-- #main -->
    </div><!-- #primary -->
    

<?php get_footer(); ?>

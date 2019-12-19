<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title archive-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<section class="wrapper__upcoming-events grid-column-3">
                <?php 
				$args = array( 'post_type' => 'isf_event', 'order' => 'ASC', 'posts_per_page' => -1);
   				$event_posts = get_posts( $args ); // returns an array of posts
			    ?>

			<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
                   <?php /* Content from your array of post results goes here */ ?>
                   <article class="wrapper__single-event">

                       <div class="wrapper__image-event">
					   <a href="<?php echo get_the_permalink(); ?>"><img src="<?php the_field('event_image'); ?>"></a>
                            <div class="thumbnail__date">
                                <?php $date = new DateTime(get_field('event_date')); ?>
                                <p class="thumbnail__date-month"><?php echo $date->format('M'); ?></p>
                                <p class="thumbnail__date-day"><?php echo $date->format('d'); ?></p>
                            </div>
                        </div>
                        
                        <div class="wrapper__info-event archive-event-margin">
						<a href="<?php echo get_the_permalink(); ?>"><p class="title__event"><?php the_title(); ?></a>
                            <div>
                        </div>

                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>

            </section>

			<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

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
			
			<section class="featured-artist-wrapper grid-column-3">
                <?php 
				$args = array( 'post_type' => 'artist', 'order' => 'ASC', 'posts_per_page' => -1);
   				$event_posts = get_posts( $args ); // returns an array of posts
			    ?>

			<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
                   <?php /* Content from your array of post results goes here */ ?>
                   <article class="wrapper__single-artist" style="background-image: url(<?php the_field('artist_image');?>); background-size: cover; background-position: center;">
						<div class="p__white artist-name artist-archive-bg"><p><?php the_title(); ?></p></div>
                    </article>
                    <?php endforeach; wp_reset_postdata(); ?>


            </section>

			<?php the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

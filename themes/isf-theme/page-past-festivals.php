<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php if ( have_rows('banner_content') ) : ?>
			<?php /* Start the Loop */ ?>
			<div class="fp-main-carousel">    

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



			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">

					<div class="past-testimony"> 
						<?php if(get_field('past_festival_testimonials')): ?>

						<?php while(has_sub_field('past_festival_testimonials')): ?>
							<div class="past-testimony-wrapper">
							<p class="past-testimonial"><?php the_sub_field('past_testimonial'); ?></p>
							</div>
							<p class="p__black testimonial-author">- <?php the_sub_field('author_of_testimony'); ?></p>
							<p class="p__black testimonial-source"><?php the_sub_field('festival_testimony_source'); ?></p>


						<?php endwhile; ?>

						<?php endif; ?>
					</div>



				<section class="award-wrapper">
					<div class="award-title">
						<?php
							if( have_rows('awards') ):
								while ( have_rows('awards') ) : the_row();
						?>
									<h3 class="h3__left-border-pink"><?php the_sub_field('awards_type');?></h3>
									<p class="award-description"><?php the_sub_field('about_award');?></p>

						<?php
								endwhile;

							else :
								// no rows found
							endif;

							?>
					</div>

					<div class="award-list">
						<?php
						if( have_rows('award_list') ):

							while ( have_rows('award_list') ) : the_row();
							?>

								<p class="award-one"><?php the_sub_field('column_one'); ?></p>
								<p class="award-two"><?php the_sub_field('column_two'); ?></p>
								<p class="award-three"><?php the_sub_field('column_three'); ?></p>
								<a class="toggle-award">view more</a>

						<?php

							endwhile;

						else :
							// no rows found
						endif;
						?>
					</div>
					</div>
					</section>
					<section class="wrapper__featured">
            <?php if ( have_rows('featured_content', 9)):?>
                            <?php while ( have_rows('featured_content', 9)) : the_row(); ?>
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

				<h3 class="h3__left-border-pink title__featured-artists">Featured Artists</h2>
				<section class="featured-artist-wrapper">
                <?php 
				$args = array( 'post_type' => 'artist', 'order' => 'ASC', 'posts_per_page' => 6);
   				$artist_posts = get_posts( $args ); // returns an array of posts
			    ?>

			<?php foreach ( $artist_posts as $post ) : setup_postdata( $post ); ?>
                   <?php /* Content from your array of post results goes here */ ?>
                   <article class="wrapper__single-artist" style="background-image: url(<?php the_field('artist_image');?>); background-size: cover; background-position: center;">
						<div class="p__white artist-name"><p><?php the_title(); ?></p></div>
                    </article>
                    <?php endforeach; wp_reset_postdata(); ?>
				</section>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main news-page" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				<h1><?php echo get_field ('page_headline');?></h1>

				</header><!-- .entry-header -->

				<div class="entry-content">

				<div class="news-source">
				<?php if(get_field('news_festivals')): ?>

					<?php while(has_sub_field('news_festivals')): ?>

							<div class="source-box">
								<img class="news-img" src="<?php the_sub_field('img_news'); ?>"/>
								<h3><?php the_sub_field('season_news'); ?></h3>
								<p><?php the_sub_field('news_source'); ?></p>
							</div>

					<?php endwhile; ?>

				<?php endif; ?> 
				</div>

				<div class="news-contact">
				<?php
					if( have_rows('media_contact') ):
						while ( have_rows('media_contact') ) : the_row();
						?>

							<h2><?php the_sub_field('contact'); ?></h2>
							<p><?php the_sub_field('contact_name'); ?></p>
							<p><?php the_sub_field('contact_information'); ?></p>

					<?php
						endwhile;
					else :
						// no rows found
					endif;
					?>
					</div>
					
					<!-- <php the_content(); ?> -->
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


				<!-- <php get_template_part( 'template-parts/content', 'page' ); ?> -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

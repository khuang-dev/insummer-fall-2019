<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

				<?php if(get_field('news_festivals')): ?>

					<ul>

					<?php while(has_sub_field('news_festivals')): ?>

						<li>
							<p> <?php the_sub_field('img_news'); ?></p>
							<p><?php the_sub_field('season_news'); ?></p>
							<p><?php the_sub_field('news_source'); ?></p>
						</li>


					<?php endwhile; ?>

					</ul>

				<?php endif; ?>
					
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

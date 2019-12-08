<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main become-a-sponsor" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<div class="sponsor-thumbnail">
						
						<?php the_post_thumbnail() ?>
						<div class="become_sponsor hide-mobile"><?php the_content(); ?></div>
					</div>
					<p class="sponsor-package">View Sponsorship Package</p>
					
					<?php if(get_field('testimony')): ?>

						<ul>

						<?php while(has_sub_field('testimony')): ?>

							<li class="testimony"> 
								<p class="testimony-quote"><?php the_sub_field('sponsor_testimony'); ?> </p>

								<div class="sponsors-author">								
									<p class="testimony-author"> <?php the_sub_field('testimony_author'); ?> </p>

									<p class="author-title"> <?php the_sub_field('author_title'); ?> </p>
								</div>

							</li>

						<?php endwhile; ?>

						</ul>

						<?php endif; ?>

						<p class="sponsor-info">Contact for more Information</p>


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

	<!-- <php 
	

<?php get_footer(); ?>

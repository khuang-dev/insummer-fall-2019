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
					
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					<?php if(get_field('about_membership')): ?>

						<?php while(has_sub_field('about_membership')): ?>

						
							<h1><?php the_sub_field('members'); ?></h1>
							<p><?php the_sub_field('role_of_members'); ?></p>
							

						<?php endwhile; ?>

						<?php endif; ?>

						<?php if(get_field('membership_package')): ?>

							<?php while(has_sub_field('membership_package')): ?>

								<h3><?php the_sub_field('membership_title'); ?></h3>
								<p><?php the_sub_field('membership_price'); ?></p>
								<p><?php the_sub_field('membership_information'); ?></p>

							<?php endwhile; ?>

							<?php endif; ?>


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

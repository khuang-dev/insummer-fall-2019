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
					<?php the_content(); ?>

					<div class="our-sponsors"> 
					<p>Founding Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/SFU.jpg'?>" alt="SFU">
					
					<p>Major Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/UBC.png'?>" alt="UBC">

					<p>Major Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/Langara.png'?>" alt="Langara College">

					<p>Major Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/'?>" alt="Vancity">

					<p>Major Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/'?>" alt="Canda Post">

					<p>Major Partner</p>
					<img class="sponsors-img" src="<?php echo get_template_directory_uri() . '/assets/03_Sponsors/'?>" alt="Concord Pacific">
					</div>

					<p class="become-sponsor">Become a Sponsor</p>
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

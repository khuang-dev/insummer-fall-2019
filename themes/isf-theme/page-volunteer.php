<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<<<<<<< HEAD

		<?php 
							

							if(is_page('volunteer')){
								if ( has_post_thumbnail() ) { ?>

									<section class="volunteer-img" style=" height: 100vh;
									background:linear-gradient(180deg, rgba(0, 0, 0, 0.4) , rgba(0, 0, 0, 0.4)),
									
									url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;background-position:50% 100%;">

								<?php
									}
								}

								?>






			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header><!-- .entry-header -->

	<div class="entry-content volunteer-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

=======
<?php the_post_thumbnail(); ?>
        <?php the_field( 'banner_title' ); ?>
        <?php the_field( 'banner_date' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
>>>>>>> f99f72f31ff0c4e777850bdd726d1268f85567f6

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<<<<<<< HEAD
	

								<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> f99f72f31ff0c4e777850bdd726d1268f85567f6
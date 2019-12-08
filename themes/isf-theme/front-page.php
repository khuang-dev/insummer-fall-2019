<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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

		</main><!-- #main -->
    </div><!-- #primary -->
    

<?php get_footer(); ?>

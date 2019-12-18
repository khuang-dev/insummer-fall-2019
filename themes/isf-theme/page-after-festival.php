<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<header class="entry-header">
				</header><!-- .entry-header -->

				<div class="entry-content">

				<section class="festival-overview">
                    <h2 class="after-festival-message"><?php the_field('after_festival_message');?><h2>
                    <div class="history-media">
                        <img src="<?php the_field('after_festival_image');?>">
                        <?php the_field('after_festival_video');?>
                    </div>
                    <?php if ( have_rows('after_festival_meta')):?>
                                <?php while ( have_rows('after_festival_meta')) : the_row(); ?>
                                <div class=after-festival-meta>
                                    <span>
                                    <p><?php the_sub_field('after_festival_days');?></p>
                                    <h4><?php $days = get_sub_field_object('after_festival_days'); ?>
                                    <?php echo $days['label']; ?></h4>
                                    </span>
                                    <span>
                                    <p><?php the_sub_field('after_festival_events');?></p>
                                    <h4><?php $days = get_sub_field_object('after_festival_events'); ?>
                                    <?php echo $days['label']; ?></h4>
                                    </span>
                                    <span>
                                    <p><?php the_sub_field('after_festival_artists');?></p>
                                    <h4><?php $days = get_sub_field_object('after_festival_artists'); ?>
                                    <?php echo $days['label']; ?></h4>
                                    </span>
                                    <span>
                                    <p><?php the_sub_field('after_festival_attendees');?></p>
                                    <h4><?php $days = get_sub_field_object('after_festival_attendees'); ?>
                                    <?php echo $days['label']; ?></h4>
                                    </span>
                                </div>
                                <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?>
                                <div class="after-festival-info">
                                    <p class="p__black"><?php the_field('after_festival_info');?><p>
                                    <img src="<?php the_field('after_festival_logo');?>">
                                </div>
				</section>

				<section class="festival-gallery desktop-gallery">
                <?php 
                    $images = get_field('after_festival_gallery');
                    if( $images ): ?>
                            <?php 
                                $num_slides = count($images) /8  ;
                            ?>
                    <div class="main-carousel">
                       
                        <?php 
                            $image_offset = 0;
                            for($slide_index = 0; $slide_index < $num_slides; $slide_index++){       
                        ?>

                        <div class="carousel-cell gallery-grid" style="width: 100%;">
                        
                        <?php 
                            for($i = 0; $i <= 7; $i++){?>
                                <?php 
                                if(isset($images[$image_offset])){ 
                                    ?>
                                    <div class="gallery-image-size">
                                    <img src="<?php echo esc_url($images[$image_offset]['url']); ?>" alt="<?php  echo esc_attr($images[$image_offset]['alt']); ?>" />
                                    </div>
                                <?php
                                } else {
                                    break;
                                } 
                                ?>
                        <?php 
                        $image_offset++;
                            }?>
                   
                    </div><!-- carousel-cell -->
                    
                   <?php 
                //    endforeach;
                    }
                   ?>
                    </div>
                    <?php endif; ?>
                    <p class="after-festival-comment"><?php the_field('after_festival_comment');?></p>
                </section>

                <section class="festival-gallery mobile-gallery">
                <?php 
                    $images = get_field('after_festival_gallery');
                    if( $images ): ?>
                            <?php 
                                $num_slides = count($images) /2  ;
                            ?>
                    <div class="main-carousel">
                       
                        <?php 
                            $image_offset = 0;
                            for($slide_index = 0; $slide_index < $num_slides; $slide_index++){       
                        ?>

                        <div class="carousel-cell gallery-grid" style="width: 100%;">
                        
                        <?php 
                            for($i = 0; $i <= 1; $i++){?>
                                <?php 
                                if(isset($images[$image_offset])){ 
                                    ?>
                                    <div class="gallery-image-size">
                                    <img src="<?php echo esc_url($images[$image_offset]['url']); ?>" alt="<?php  echo esc_attr($images[$image_offset]['alt']); ?>" />
                                    </div>
                                <?php
                                } else {
                                    break;
                                } 
                                ?>
                        <?php 
                        $image_offset++;
                            }?>
                   
                    </div><!-- carousel-cell -->
                    
                   <?php 
                //    endforeach;
                    }
                   ?>
                    </div>
                    <?php endif; ?>
                    <p class="after-festival-comment"><?php the_field('after_festival_comment');?></p>
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

				</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

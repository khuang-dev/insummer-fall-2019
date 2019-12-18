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
				<!-- <php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<!-- <php the_content(); ?> -->
				<section class="history-description">
				<h3 class="h3__right-border-pink"><?php  echo get_field ('history_title'); ?></h3>
				<span><?php  echo get_field ('history_description'); ?><span>
				</section>
				<section class="history-media">
					<?php the_field('history_image');?>
					<?php the_field('history_video');?>
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

			<section class="timeline-nav" id="">

<?php if (have_posts()) : ?>
    <?php
    $today = date('Ymd');

    $past_args = array(
        'posts_per_page' => -1,
        'post_type' => 'isf_event',
        'meta_query' => array (
            array (
                'key' => 'event_date',
                'compare' => '<',
                'type' => 'DATE'
            )
        ),
        'orderby' => 'meta_value_num',
        'order' => 'DESC'                   
    );
	query_posts( $past_args );
	
	$current_header ='';?> 
    <?php while (have_posts()) : the_post(); ?>

    <?php   
		$date = new DateTime(get_field('event_date'));
		$temp_header = $date->format('Y'); 
		?>
		
		<a class="year-btn"><?php if ($current_header != $temp_header) {
			$current_header = $temp_header;
			echo $date->format('Y'); 
		} ?></a>


    <?php endwhile; ?>
    <?php endif; ?>

</section>



<!-- TIMELINE -->
<header class="timeline-header">
<h1>Indian Summer Festival</h1>
<h2>Timeline</h2>
</header>

<section class="timeline-nav-mobile" id="">
<h3 class="timeline-select-title-mobile">Select a year<img class="icon__dropdown-pink" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/down-pink.svg" alt="icon-dropdown"></h3>
<?php if (have_posts()) : ?>
    <?php
    $today = date('Ymd');

    $past_args = array(
        'posts_per_page' => -1,
        'post_type' => 'isf_event',
        'meta_query' => array (
            array (
                'key' => 'event_date',
                'compare' => '<',
                'type' => 'DATE'
            )
        ),
        'orderby' => 'meta_value_num',
        'order' => 'DESC'                   
    );
	query_posts( $past_args );
	
	$current_header ='';?> 
    <?php while (have_posts()) : the_post(); ?>

    <?php   
		$date = new DateTime(get_field('event_date'));
		$temp_header = $date->format('Y'); 
		?>
		<ul class="year-btn-mobile"><?php if ($current_header != $temp_header) {
			$current_header = $temp_header;
			echo $date->format('Y'); 
		} ?></ul>


    <?php endwhile; ?>
    <?php endif; ?>

</section>

<!-- TIMELINE LEFT -->
<section class="timeline">
<aside class="timeline-left">
<div class="timeline-block-left margin-top6"><div class="january"></div><h3 class="month-font jan-font">January</h3><div class="timeline-bullet-left"></div></div>
<div class="timeline-block-left"><div class="march"></div><h3 class="month-font mar-font">March</h3><div class="timeline-bullet-left"></div></div>
<div class="timeline-block-left"><div class="may"></div><h3 class="month-font may-font">May</h3><div class="timeline-bullet-left"></div></div>
<div class="timeline-block-left"><div class="july"></div><h3 class="month-font jul-font">July</h3><div class="timeline-bullet-left"></div></div>
<div class="timeline-block-left"><div class="september"></div><h3 class="month-font sep-font">September</h3><div class="timeline-bullet-left"></div></div>
<div class="timeline-block-left"><div class="november"></div><h3 class="month-font nov-font">November</h3><div class="timeline-bullet-left"></div></div>
</aside>

<!-- LINE  -->
<svg height="1650" width="5">
  <line x1="0" y1="1650" x2="0" y2="0" style="stroke:#ed1651;stroke-width:10; stroke-dasharray:30 10" />
</svg>

<!-- TIMELINE RIGHT -->
<aside class="timeline-right">
<div class="timeline-block-right margin-top12"><div class="timeline-bullet-right"></div><h3 class="month-font feb-font">February</h3><div class="february"></div></div>
<div class="timeline-block-right"><div class="timeline-bullet-right"></div><h3 class="month-font apr-font">April</h3><div class="april"></div></div>
<div class="timeline-block-right"><div class="timeline-bullet-right"></div><h3 class="month-font jun-font">June</h3><div class="june"></div></div>
<div class="timeline-block-right"><div class="timeline-bullet-right"></div><h3 class="month-font aug-font">August</h3><div class="august"></div></div>
<div class="timeline-block-right"><div class="timeline-bullet-right"></div><h3 class="month-font oct-font">October</h3><div class="october"></div></div>
<div class="timeline-block-right"><div class="timeline-bullet-right"></div><h3 class="month-font dec-font">December</h3><div class="december"></div></div>
</aside>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

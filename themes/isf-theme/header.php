<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<section class="externallink__header">
						<?php get_search_form();?>
						<div class="wrapper__social-media">
							<a href="<?php the_field( 'facebook_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Facebook.svg" alt="icon-facebook">
							</a>
							<a href="<?php the_field( 'instagram_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/IG.svg" alt="icon-ig">
							</a>
							<a href="<?php the_field( 'twitter_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Twitter.svg" alt="icon-twitter">
							</a>
							<a href="<?php the_field( 'youtube_url', 'options' ); ?>">
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Youtube.svg" alt="icon-youtube">
							</a>
						</div>
						<span>
							<a>	
								<img class="icon__header" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Burger.svg" alt="icon-hamburger">
							</a>
						</span>
					</section>

					<span class="menu__primary"><!-- desktop navigation -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</span>
					
					<div class="menu__mobile"><!-- mobile navigations -->
						<section class="menu__event-wrapper">
							<h3><a>
								<?php echo wp_get_nav_menu_name('event');?>
								<i class="fas fa-chevron-down"></i>
							</a></h3>
							<span class="menu__event"><?php wp_nav_menu( array( 'theme_location' => 'event', 'menu_id' => 'events' ) ); ?></span>
						</section>
						
						<section class="menu__getinvolved-wrapper">
							<h3><a>
								<?php echo wp_get_nav_menu_name('getinvolved');?>
								<i class="fas fa-chevron-down"></i>
							</a></h3>
							<span class="menu__getinvolved"><?php wp_nav_menu( array( 'theme_location' => 'getinvolved', 'menu_id' => 'get-involved' ) ); ?></span>
						</section>
					</div>
					
					<span class="menu__hamburger"><!-- hamburger menu -->
						<?php wp_nav_menu( array( 'theme_location' => 'hamburger', 'menu_id' => 'hamburger' ) ); ?>
					</span>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

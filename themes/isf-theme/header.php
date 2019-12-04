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
					
					<span class="menu__primary"><!-- desktop navigation -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</span>
					
					<div class="menu__mobile"><!-- mobile navigations -->
						<section class="menu__event-wrapper">
							<!-- <h3><?php// echo wp_get_nav_menu_name('event');?> EVENTS</h3> -->
							<span class="menu__event"><?php wp_nav_menu( array( 'theme_location' => 'event', 'menu_id' => 'events' ) ); ?></span>
						</section>
						<section class="menu__getinvolved-wrapper">
							<!-- <h3>GET INVOLVED</h3> -->
							<span class="menu__getinvolved"><?php wp_nav_menu( array( 'theme_location' => 'getinvolved', 'menu_id' => 'get-involved' ) ); ?></span>
						</section>
					</div>
					
					<span class="menu__hamburger"><!-- hamburger menu -->
						<?php wp_nav_menu( array( 'theme_location' => 'hamburger', 'menu_id' => 'hamburger' ) ); ?>
					</span>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

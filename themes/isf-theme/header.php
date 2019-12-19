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
				</div><!-- .site-branding -->



				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<div class="menu-overlay-event"></div>
					<div class="menu-overlay-getinvolved"></div>
					<div class="menu-overlay-hamburger"></div>

					<section class="wrapper__desktop-header">
					<div class="externalform__header">
					<a href="sign-up-newsletter-form"class="link__header-signup">Sign Up for Newsletter</a>
						<div class="desktop__search-login-wrapper">
						<span class="search__desktop"><?php get_search_form();?></span>
						<img class="icon__header btn__search-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Search.svg" alt="icon-search">
						<a class="link__header-login">Artist Login</a>
						</div>
					</div>
					<div class="wrapper__primary-menu">
					<div class="externallink__header">
						<span class="searchbar btn__search-mobile"><?php get_search_form();?></span>
						<span class="search__mobile"><?php get_search_form();?></span>

						<div class="wrapper__social-media search-toggle">
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
								<img class="icon__header icon__hamburger search-toggle" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/SVG/Burger.svg" alt="icon-hamburger">
							</a>
						</span>
					</div>

					<a class="container__isflogo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="isf-logo" src="<?php the_field( 'isf_logo' , 'option'); ?>" alt="isf-logo">
							</a>
					<span class="menu__primary"><!-- desktop navigation -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</span>
					<a class="btn__donate btn__round-orange" href="donate">DONATE</a>
					</div>
					</section>
					
					<div class="menu__mobile"><!-- mobile navigations -->
						<section class="menu__event-wrapper">
							<h3 class="btn__event"><a>
								<?php echo wp_get_nav_menu_name('event');?>
								<img class="icon__dropdown" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/2x/Drop_Down2x.png" alt="icon-dropdown">
							</a></h3>
							<span class="menu__event"><?php wp_nav_menu( array( 'theme_location' => 'event', 'menu_id' => 'events' ) ); ?></span>
						</section>
						
						<section class="menu__getinvolved-wrapper">
							<h3 class="btn__getinvolved"><a>
								<?php echo wp_get_nav_menu_name('getinvolved');?>
								<img class="icon__dropdown" src="<?php echo get_template_directory_uri(); ?>/assets/01_Icons/3x/Drop_Down3x.png" alt="icon-dropdown">
							</a></h3>
							<span class="menu__getinvolved"><?php wp_nav_menu( array( 'theme_location' => 'getinvolved', 'menu_id' => 'get-involved' ) ); ?></span>
						</section>
					</div>
					
					<div class="menu__hamburger"><!-- hamburger menu -->
						<a class="icon-cancel"><i class="fas fa-times"></i></a>
						<?php wp_nav_menu( array( 'theme_location' => 'hamburger', 'menu_id' => 'hamburger' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

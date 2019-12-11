<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'event' => esc_html( 'Events' ),
		'getinvolved' => esc_html( 'Get Involved' ),
		'hamburger' => esc_html( 'Hamburger' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {


	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'red-starter-flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	wp_enqueue_style( 'red-starter-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
	wp_enqueue_script( 'red-starter-flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'red-starter-flickity-js', get_template_directory_uri() . '/build/js/flickity.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'category-filter', get_template_directory_uri() . '/build/js/category-filter.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'red-starter-searchbar', get_template_directory_uri() . '/build/js/searchbar.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'red-starter-mobile-nav', get_template_directory_uri() . '/build/js/mobile-nav.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
	wp_enqueue_script( 'red-starter-accordion-mobile-js', get_template_directory_uri() . '/build/js/accordion-mobile.min.js', array(), '', true );
	wp_enqueue_script( 'red-starter-accordion-volunteer-mobile-js', get_template_directory_uri() . '/build/js/accordion-volunteer-mobile.min.js', array(), '', true );
	wp_enqueue_script( 'red-starter-accordion-patron-mobile-js', get_template_directory_uri() . '/build/js/accordion-patron-mobile.min.js', array(), '', true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_localize_script('category-filter', 'isf_vars', array(
        'rest_url' => esc_url_raw(rest_url()),
        'wpapi_nonce' => wp_create_nonce('wp_rest'),
        'post_id' => get_the_ID(),
        'user_id' => get_current_user_id(),
        'comments_open' => comments_open(get_the_ID()),
    ));
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

add_action('init', 'setupOptions');

function setupOptions() {
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page( array(
			'page_title' => 'Options',
		));
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

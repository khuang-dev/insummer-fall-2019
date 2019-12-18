<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Events
function isf_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Event', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New Event', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into event', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'text_domain' ),
		'items_list'            => __( 'Event list', 'text_domain' ),
		'items_list_navigation' => __( 'Event list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter event list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Indian Summer Festival Events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'events',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
	);
	register_post_type( 'isf_event', $args );

}
add_action( 'init', 'isf_event', 0 );

// // Register Artists
function artist() {

	$labels = array(
		'name'                  => _x( 'Artists', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Artists', 'text_domain' ),
		'name_admin_bar'        => __( 'Artist', 'text_domain' ),
		'archives'              => __( 'Artist Archives', 'text_domain' ),
		'attributes'            => __( 'Artist Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Artists', 'text_domain' ),
		'add_new_item'          => __( 'Add New Artist', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Artist', 'text_domain' ),
		'edit_item'             => __( 'Edit Artist', 'text_domain' ),
		'update_item'           => __( 'Update Artist', 'text_domain' ),
		'view_item'             => __( 'View Artist', 'text_domain' ),
		'view_items'            => __( 'View Artists', 'text_domain' ),
		'search_items'          => __( 'Search Artist', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into artist', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this artist', 'text_domain' ),
		'items_list'            => __( 'Artists list', 'text_domain' ),
		'items_list_navigation' => __( 'Artists list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter artists list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Artist', 'text_domain' ),
		'description'           => __( 'Artist information page', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'artists',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,

	);
	register_post_type( 'artist', $args );

}
add_action( 'init', 'artist', 0 );


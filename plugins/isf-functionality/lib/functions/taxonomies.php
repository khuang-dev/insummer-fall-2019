<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Add your custom taxonomies here...
// Register Custom Taxonomy
// function custom_event() {
// 	$labels = array(
// 		'name'                       => _x( 'Events', 'Taxonomy General Name', 'text_domain' ),
// 		'singular_name'              => _x( 'Event', 'Taxonomy Singular Name', 'text_domain' ),
// 		'menu_name'                  => __( 'Event', 'text_domain' ),
// 		'all_items'                  => __( 'All Events', 'text_domain' ),
// 		'parent_item'                => __( 'Event Item', 'text_domain' ),
// 		'parent_item_colon'          => __( 'Event Item:', 'text_domain' ),
// 		'new_item_name'              => __( 'New Event', 'text_domain' ),
// 		'add_new_item'               => __( 'Add New Event', 'text_domain' ),
// 		'edit_item'                  => __( 'Edit Event', 'text_domain' ),
// 		'update_item'                => __( 'Update Event', 'text_domain' ),
// 		'view_item'                  => __( 'View Event', 'text_domain' ),
// 		'separate_items_with_commas' => __( 'Separate events with commas', 'text_domain' ),
// 		'add_or_remove_items'        => __( 'Add or remove events', 'text_domain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
// 		'popular_items'              => __( 'Popular Events', 'text_domain' ),
// 		'search_items'               => __( 'Search Events', 'text_domain' ),
// 		'not_found'                  => __( 'Not Found', 'text_domain' ),
// 		'no_terms'                   => __( 'No events', 'text_domain' ),
// 		'items_list'                 => __( 'Events list', 'text_domain' ),
// 		'items_list_navigation'      => __( 'Events list navigation', 'text_domain' ),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => false,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
// 		'show_in_rest'               => true,
// 	);
// 	register_taxonomy( 'event', array( 'post' ), $args );
// }
// add_action( 'init', 'custom_event', 0 );
// Register Custom Taxonomy
function event_taxonomy() {
	$labels = array(
		'name'                       => 'Taxonomies',
		'singular_name'              => 'Taxonomy',
		'menu_name'                  => 'Taxonomy',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Items list',
		'items_list_navigation'      => 'Items list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'query_vars'               => true,

	);
	register_taxonomy( 'event-taxonomy', array( 'isf_event', 'artist' ), $args );
}
add_action( 'init', 'event_taxonomy', 0 );
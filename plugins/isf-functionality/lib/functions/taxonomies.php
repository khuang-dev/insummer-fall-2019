<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
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

// Register Custom Taxonomy
function create_isf_category() {

	$labels = array(
		'name'                       => _x( 'ISF Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'ISF Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'ISF Category', 'text_domain' ),
		'all_items'                  => __( 'All Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent category:', 'text_domain' ),
		'new_item_name'              => __( 'New Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
		'update_item'                => __( 'Update Category', 'text_domain' ),
		'view_item'                  => __( 'View Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular categories', 'text_domain' ),
		'search_items'               => __( 'Search categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No categories', 'text_domain' ),
		'items_list'                 => __( 'Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
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
	);
	register_taxonomy( 'ISF_plus', array( 'isf_event' ), $args );

}
add_action( 'init', 'event_taxonomy', 0 );
add_action( 'init', 'create_isf_category', 1 );


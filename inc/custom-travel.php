<?php

// Register Custom Post Type Custom  Travel
function create_customtravel_cpt() {

	$labels = array(
		'name' => _x( 'Custom  Travels', 'Post Type General Name', 'classictravelcom' ),
		'singular_name' => _x( 'Custom  Travel', 'Post Type Singular Name', 'classictravelcom' ),
		'menu_name' => _x( 'Custom  Travels', 'Admin Menu text', 'classictravelcom' ),
		'name_admin_bar' => _x( 'Custom  Travel', 'Add New on Toolbar', 'classictravelcom' ),
		'archives' => __( 'Custom  Travel Archives', 'classictravelcom' ),
		'attributes' => __( 'Custom  Travel Attributes', 'classictravelcom' ),
		'parent_item_colon' => __( 'Parent Custom  Travel:', 'classictravelcom' ),
		'all_items' => __( 'All Custom Travels', 'classictravelcom' ),
		'add_new_item' => __( 'Add New Custom Travel Country', 'classictravelcom' ),
		'add_new' => __( 'Add New', 'classictravelcom' ),
		'new_item' => __( 'New Custom  Travel', 'classictravelcom' ),
		'edit_item' => __( 'Edit Custom  Travel', 'classictravelcom' ),
		'update_item' => __( 'Update Custom  Travel', 'classictravelcom' ),
		'view_item' => __( 'View Custom  Travel', 'classictravelcom' ),
		'view_items' => __( 'View Custom  Travels', 'classictravelcom' ),
		'search_items' => __( 'Search Custom  Travel', 'classictravelcom' ),
		'not_found' => __( 'Not found', 'classictravelcom' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classictravelcom' ),
		'featured_image' => __( 'Featured Image', 'classictravelcom' ),
		'set_featured_image' => __( 'Set featured image', 'classictravelcom' ),
		'remove_featured_image' => __( 'Remove featured image', 'classictravelcom' ),
		'use_featured_image' => __( 'Use as featured image', 'classictravelcom' ),
		'insert_into_item' => __( 'Insert into Custom  Travel', 'classictravelcom' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom  Travel', 'classictravelcom' ),
		'items_list' => __( 'Custom  Travels list', 'classictravelcom' ),
		'items_list_navigation' => __( 'Custom  Travels list navigation', 'classictravelcom' ),
		'filter_items_list' => __( 'Filter Custom  Travels list', 'classictravelcom' ),
	);
	$args = array(
		'label' => __( 'Custom  Travel', 'classictravelcom' ),
		'description' => __( '', 'classictravelcom' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customtravel', $args );

}
add_action( 'init', 'create_customtravel_cpt', 0 );

?>
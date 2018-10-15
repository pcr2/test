<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'unite-bootstrap','unite-icons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

//code to register a customer post type called film

function create_film_cpt() {

	$labels = array(
		'name' => __( 'Films', 'Post Type General Name', 'film' ),
		'singular_name' => __( 'Film', 'Post Type Singular Name', 'film' ),
		'menu_name' => __( 'Films', 'film' ),
		'name_admin_bar' => __( 'Film', 'film' ),
		'archives' => __( 'Film Archives', 'film' ),
		'attributes' => __( 'Film Attributes', 'film' ),
		'parent_item_colon' => __( 'Parent Film:', 'film' ),
		'all_items' => __( 'All Films', 'film' ),
		'add_new_item' => __( 'Add New Film', 'film' ),
		'add_new' => __( 'Add New', 'film' ),
		'new_item' => __( 'New Film', 'film' ),
		'edit_item' => __( 'Edit Film', 'film' ),
		'update_item' => __( 'Update Film', 'film' ),
		'view_item' => __( 'View Film', 'film' ),
		'view_items' => __( 'View Films', 'film' ),
		'search_items' => __( 'Search Film', 'film' ),
		'not_found' => __( 'Not found', 'film' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'film' ),
		'featured_image' => __( 'Featured Image', 'film' ),
		'set_featured_image' => __( 'Set featured image', 'film' ),
		'remove_featured_image' => __( 'Remove featured image', 'film' ),
		'use_featured_image' => __( 'Use as featured image', 'film' ),
		'insert_into_item' => __( 'Insert into Film', 'film' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Film', 'film' ),
		'items_list' => __( 'Films list', 'film' ),
		'items_list_navigation' => __( 'Films list navigation', 'film' ),
		'filter_items_list' => __( 'Filter Films list', 'film' ),
	);
	$args = array(
		'label' => __( 'Film', 'film' ),
		'description' => __( '', 'film' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-desktop',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array('Genre', 'Year', 'Country', 'Actors', ),
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
	register_post_type( 'film', $args );

}
add_action( 'init', 'create_film_cpt');

flush_rewrite_rules( false );


// END ENQUEUE PARENT ACTION

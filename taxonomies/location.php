<?php

function location_init() {
	register_taxonomy( 'location', array('speaker','session' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Locations', 'makercon' ),
			'singular_name'              => _x( 'Location', 'taxonomy general name', 'makercon' ),
			'search_items'               => __( 'Search locations', 'makercon' ),
			'popular_items'              => __( 'Popular locations', 'makercon' ),
			'all_items'                  => __( 'All locations', 'makercon' ),
			'parent_item'                => __( 'Parent location', 'makercon' ),
			'parent_item_colon'          => __( 'Parent location:', 'makercon' ),
			'edit_item'                  => __( 'Edit location', 'makercon' ),
			'update_item'                => __( 'Update location', 'makercon' ),
			'add_new_item'               => __( 'New location', 'makercon' ),
			'new_item_name'              => __( 'New location', 'makercon' ),
			'separate_items_with_commas' => __( 'Locations separated by comma', 'makercon' ),
			'add_or_remove_items'        => __( 'Add or remove locations', 'makercon' ),
			'choose_from_most_used'      => __( 'Choose from the most used locations', 'makercon' ),
			'menu_name'                  => __( 'Locations', 'makercon' ),
		),
	) );

}
add_action( 'init', 'location_init' );

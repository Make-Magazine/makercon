<?php

function day_init() {
	register_taxonomy( 'day', array( 'speaker','session' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => false,
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
			'name'                       => __( 'Day', 'makercon' ),
			'singular_name'              => _x( 'Day', 'taxonomy general name', 'makercon' ),
			'search_items'               => __( 'Search days', 'makercon' ),
			'popular_items'              => __( 'Popular days', 'makercon' ),
			'all_items'                  => __( 'All days', 'makercon' ),
			'parent_item'                => __( 'Parent day', 'makercon' ),
			'parent_item_colon'          => __( 'Parent day:', 'makercon' ),
			'edit_item'                  => __( 'Edit day', 'makercon' ),
			'update_item'                => __( 'Update day', 'makercon' ),
			'add_new_item'               => __( 'New day', 'makercon' ),
			'new_item_name'              => __( 'New day', 'makercon' ),
			'separate_items_with_commas' => __( 'Days separated by comma', 'makercon' ),
			'add_or_remove_items'        => __( 'Add or remove days', 'makercon' ),
			'choose_from_most_used'      => __( 'Choose from the most used days', 'makercon' ),
			'menu_name'                  => __( 'Days', 'makercon' ),
		),
	) );

}
add_action( 'init', 'day_init' );

<?php

function time_init() {
	register_taxonomy( 'time', array( 'speaker','session' ), array(
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
			'name'                       => __( 'Times', 'makercon' ),
			'singular_name'              => _x( 'Time', 'taxonomy general name', 'makercon' ),
			'search_items'               => __( 'Search times', 'makercon' ),
			'popular_items'              => __( 'Popular times', 'makercon' ),
			'all_items'                  => __( 'All times', 'makercon' ),
			'parent_item'                => __( 'Parent time', 'makercon' ),
			'parent_item_colon'          => __( 'Parent time:', 'makercon' ),
			'edit_item'                  => __( 'Edit time', 'makercon' ),
			'update_item'                => __( 'Update time', 'makercon' ),
			'add_new_item'               => __( 'New time', 'makercon' ),
			'new_item_name'              => __( 'New time', 'makercon' ),
			'separate_items_with_commas' => __( 'Times separated by comma', 'makercon' ),
			'add_or_remove_items'        => __( 'Add or remove times', 'makercon' ),
			'choose_from_most_used'      => __( 'Choose from the most used times', 'makercon' ),
			'menu_name'                  => __( 'Times', 'makercon' ),
		),
	) );

}
add_action( 'init', 'time_init' );

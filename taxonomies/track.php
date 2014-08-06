<?php

function track_init() {
	register_taxonomy( 'track', array('session' ), array(
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
			'name'                       => __( 'Tracks', 'makercon' ),
			'singular_name'              => _x( 'Track', 'taxonomy general name', 'makercon' ),
			'search_items'               => __( 'Search tracks', 'makercon' ),
			'popular_items'              => __( 'Popular tracks', 'makercon' ),
			'all_items'                  => __( 'All tracks', 'makercon' ),
			'parent_item'                => __( 'Parent track', 'makercon' ),
			'parent_item_colon'          => __( 'Parent track:', 'makercon' ),
			'edit_item'                  => __( 'Edit track', 'makercon' ),
			'update_item'                => __( 'Update track', 'makercon' ),
			'add_new_item'               => __( 'New track', 'makercon' ),
			'new_item_name'              => __( 'New track', 'makercon' ),
			'separate_items_with_commas' => __( 'Tracks separated by comma', 'makercon' ),
			'add_or_remove_items'        => __( 'Add or remove tracks', 'makercon' ),
			'choose_from_most_used'      => __( 'Choose from the most used tracks', 'makercon' ),
			'menu_name'                  => __( 'Tracks', 'makercon' ),
		),
	) );

}
add_action( 'init', 'track_init' );

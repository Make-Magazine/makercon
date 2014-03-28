<?php

function event_init() {
	register_taxonomy( 'event', array( 'speaker' ), array(
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
			'name'                       => __( 'Events', 'makercon' ),
			'singular_name'              => _x( 'Event', 'taxonomy general name', 'makercon' ),
			'search_items'               => __( 'Search events', 'makercon' ),
			'popular_items'              => __( 'Popular events', 'makercon' ),
			'all_items'                  => __( 'All events', 'makercon' ),
			'parent_item'                => __( 'Parent event', 'makercon' ),
			'parent_item_colon'          => __( 'Parent event:', 'makercon' ),
			'edit_item'                  => __( 'Edit event', 'makercon' ),
			'update_item'                => __( 'Update event', 'makercon' ),
			'add_new_item'               => __( 'New event', 'makercon' ),
			'new_item_name'              => __( 'New event', 'makercon' ),
			'separate_items_with_commas' => __( 'Events separated by comma', 'makercon' ),
			'add_or_remove_items'        => __( 'Add or remove events', 'makercon' ),
			'choose_from_most_used'      => __( 'Choose from the most used events', 'makercon' ),
			'menu_name'                  => __( 'Events', 'makercon' ),
		),
	) );

}
add_action( 'init', 'event_init' );

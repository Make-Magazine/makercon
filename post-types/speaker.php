<?php

function speaker_init() {
	register_post_type( 'speaker', array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'query_var'         => true,
		'rewrite'           => true,
		'labels'            => array(
			'name'                => __( 'Speakers', 'makercon' ),
			'singular_name'       => __( 'Speaker', 'makercon' ),
			'all_items'           => __( 'Speakers', 'makercon' ),
			'new_item'            => __( 'New speaker', 'makercon' ),
			'add_new'             => __( 'Add New', 'makercon' ),
			'add_new_item'        => __( 'Add New speaker', 'makercon' ),
			'edit_item'           => __( 'Edit speaker', 'makercon' ),
			'view_item'           => __( 'View speaker', 'makercon' ),
			'search_items'        => __( 'Search speakers', 'makercon' ),
			'not_found'           => __( 'No speakers found', 'makercon' ),
			'not_found_in_trash'  => __( 'No speakers found in trash', 'makercon' ),
			'parent_item_colon'   => __( 'Parent speaker', 'makercon' ),
			'menu_name'           => __( 'Speakers', 'makercon' ),
		),
	) );

}
add_action( 'init', 'speaker_init' );

function speaker_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['speaker'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Speaker updated. <a target="_blank" href="%s">View speaker</a>', 'makercon'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'makercon'),
		3 => __('Custom field deleted.', 'makercon'),
		4 => __('Speaker updated.', 'makercon'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Speaker restored to revision from %s', 'makercon'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Speaker published. <a href="%s">View speaker</a>', 'makercon'), esc_url( $permalink ) ),
		7 => __('Speaker saved.', 'makercon'),
		8 => sprintf( __('Speaker submitted. <a target="_blank" href="%s">Preview speaker</a>', 'makercon'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Speaker scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview speaker</a>', 'makercon'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Speaker draft updated. <a target="_blank" href="%s">Preview speaker</a>', 'makercon'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'speaker_updated_messages' );

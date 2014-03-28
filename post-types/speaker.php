<?php
/**
 * The Class.
 */
class Speaker_Meta {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
		add_action( 'init', array( $this, 'speaker_init' ) );
		add_filter( 'post_updated_messages', array( $this, 'speaker_updated_messages' ) );
	}

	function speaker_init() {
		register_post_type( 'speaker', array(
			'hierarchical'      => false,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'supports'          => array( 'title', 'editor', 'thumbnail' ),
			'has_archive'       => true,
			'query_var'         => true,
			'rewrite'           => true,
			'labels'            => array(
				'name'                => __( 'Speakers', 'makercon' ),
				'singular_name'       => __( 'Speaker', 'makercon' ),
				'all_items'           => __( 'Speakers', 'makercon' ),
				'new_item'            => __( 'New Speaker', 'makercon' ),
				'add_new'             => __( 'Add New', 'makercon' ),
				'add_new_item'        => __( 'Add New Speaker', 'makercon' ),
				'edit_item'           => __( 'Edit Speaker', 'makercon' ),
				'view_item'           => __( 'View Speaker', 'makercon' ),
				'search_items'        => __( 'Search Speakers', 'makercon' ),
				'not_found'           => __( 'No Speakers found', 'makercon' ),
				'not_found_in_trash'  => __( 'No speakers found in trash', 'makercon' ),
				'parent_item_colon'   => __( 'Parent Ppeaker', 'makercon' ),
				'menu_name'           => __( 'Speakers', 'makercon' ),
			),
		) );

	}


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

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
		$post_types = array( 'speaker' );
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'speaker_meta',
				__( 'Speaker Meta', 'makercon' ),
				array( $this, 'render_meta_box_content' ),
				$post_type,
				'advanced',
				'high'
			);
		}
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {

		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['makercon_speaker_nonce'] ) )
			return $post_id;

		$nonce = $_POST['makercon_speaker_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'makercon_speaker' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
		// so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST['makercon_speaker'] );

		// Update the meta field.
		update_post_meta( $post_id, 'selected_speaker', $mydata );
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'makercon_speaker', 'makercon_speaker_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, 'selected_speaker', true );

		// Display the form, using the current value.
		echo '<label for="makercon_new_field">';
		_e( 'Assign a proposal to this record: ', 'makercon' );
		echo $this->entry_dropdown( $this->get_all_form_entries( 1 ), $value );
		echo '</label> ';
	}

	/**
	 * Get all of the entries from a given form.
	 *
	 * @param int $form The ID of the Gravity Form
	 */
	public function get_all_form_entries( $form ) {
		$entries = RGFormsModel::get_leads( $form, 0, 'ASC', '', 0, 1000, null, null, false, null, null, 'active', false );
		return $entries;
	}

	/**
	 * Given a form, build a dropdown of all of the entries.
	 *
	 * @param array $entries Array of all of the entries of a given form.
	 */
	public function entry_dropdown( $entries, $selected ) {
		$output = '<select class="makercon_speaker" name="makercon_speaker">';
		$output .= '<option value="0">None</option>';
		foreach ( $entries as $entry ) {
			$output .= '<option value="' . $entry[ 'id' ] . '" ' . selected( $selected, $entry[ 'id' ], false ) . '>' . $entry[ 4 ] . ' - ' . $entry[ '13.3' ] . ' ' . $entry[ '13.6' ] . '</option>';
		}
		$output .= '</select>';
		return $output;
	}
}
$speaker = new Speaker_Meta();
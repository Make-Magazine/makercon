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

		if ( get_site_url() == 'http://vip.dev/makercon' ) {
			echo $this->entry_dropdown( $this->get_all_form_entries( 3 ), $value );
		} else {
			echo $this->entry_dropdown( $this->get_all_form_entries( 1 ), $value );
		}

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

	/**
	 * Build the loop, based on the Gravity Forms data
	 */
	public function build_speaker_data() {
		global $post;
		$selected_speaker = get_post_meta( get_the_id(), 'selected_speaker', true );
		$meta = Gravity_Forms_Helper::get_entry( $selected_speaker );
		$speaker = array(
			'title' 				=> $meta[ 4 ],
			'short_description'		=> $meta[ 5 ],
			'long_description'		=> $meta[ 6 ],
			'presentation_photo'	=> $meta[ 25 ],
			'submitter_name'		=> $meta[ '13.3' ] . ' ' . $meta[ '13.6' ],
			'url'					=> $meta[ 8 ],
			'video_url'				=> $meta[ 9 ],
			'long_description'		=> $meta[ 6 ],
			'speakers' 				=> array(
				0 					=> array(
					'name'				=> $meta[ '18.3' ] . ' ' . $meta[ '18.6' ],
					'email'				=> $meta[ 19 ],
					'company'			=> $meta[ 20 ],
					'title'				=> $meta[ 21 ],
					'bio'				=> $meta[ 22 ],
					'twitter'			=> $meta[ 23 ],
					'url'				=> $meta[ 24 ],
					'thumbnail'			=> $meta[ 25 ],
					'phone'				=> $meta[ 26 ]
				),
				1 						=> array(
					'name'				=> $meta[ '29.3' ] . ' ' . $meta[ '29.6' ],
					'email'				=> $meta[ 30 ],
					'company'			=> $meta[ 32 ],
					'title'				=> $meta[ 33 ],
					'bio'				=> $meta[ 34 ],
					'twitter'			=> $meta[ 35 ],
					'url'				=> $meta[ 36 ],
					'thumbnail'			=> $meta[ 37 ],
					'phone'				=> $meta[ 38 ]
				),
				2 						=> array(
					'name'				=> $meta[ '40.3' ] . ' ' . $meta[ '40.6' ],
					'email'				=> $meta[ 41 ],
					'company'			=> $meta[ 42 ],
					'title'				=> $meta[ 43 ],
					'bio'				=> $meta[ 44 ],
					'twitter'			=> $meta[ 45 ],
					'url'				=> $meta[ 46 ],
					'thumbnail'			=> $meta[ 47 ],
					'phone'				=> $meta[ 48 ]
				),
				3 						=> array(
					'name'				=> $meta[ '63.3' ] . ' ' . $meta[ '63.6' ],
					'email'				=> $meta[ 64 ],
					'company'			=> $meta[ 65 ],
					'title'				=> $meta[ 66 ],
					'bio'				=> $meta[ 67 ],
					'twitter'			=> $meta[ 68 ],
					'url'				=> $meta[ 70 ],
					'thumbnail'			=> $meta[ 69 ],
					'phone'				=> $meta[ 48 ]
				),
			),
		);
		return $speaker;
	}

	/**
	 * Speaker Loop
	 */
	public function speaker_loop() {
		$speaker = $this->build_speaker_data();

		// Let's get going with the main block of content.
		$output = '<div class="row">';
			$output .= '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
				if ( has_post_thumbnail() ) {
					$output .= get_the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) );
				} else {
					$output .= Gravity_Forms_Helper::make_image( $speaker['presentation_photo'], '300', get_the_title() );
				}
			$output .= '</div>';
			$output .= '<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">';
				$output .= $this->title_override( '', false );
				$output .= ( get_the_content() ) ? the_content() : apply_filters( 'the_content', $speaker['long_description'] );
				$output .= ( ! empty( $speaker['url'] ) ) ? '<a class="btn btn-default" href="' . esc_url( $speaker['url'] ) . '"><span class="glyphicon glyphicon-link"></span> Website</a>' : '';
				$output .= ' ';
				$output .= ( ! empty( $speaker['video_url'] ) ) ? '<a class="btn btn-default" href="' . esc_url( $speaker['video_url'] ) . '"><span class="glyphicon glyphicon glyphicon-facetime-video"></span> Video</a>' : '';
			$output .= '</div>';
		$output .= '</div>';


		$output .= '<hr>';

		if ( empty( $speaker['speakers'][1]['name'] ) ) {
			$additional = false;
		} else {
			$additional = true;
		}

		foreach ( $speaker['speakers'] as $speaker ) {
			$output .= '<div class="row">';
			$output .= ( $additional === false ) ? '<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">' : '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
				if ( !empty( $speaker['url'] ) ) {
					$output .= '<a href="' . esc_url( $speaker['url'] ) . '">';
					$output .= ( $speaker['name'] ) ? '<h3>' . $speaker['name'] . '</h3>' : '';
					$output .= '</a>';
				} else {
					$output .= ( $speaker['name'] ) ? '<h3>' . $speaker['name'] . '</h3>' : '';
				}
				$output .= ( !empty( $speaker['company'] ) || !empty( $speaker['title'] ) ) ? '<h4>' . apply_filters( 'the_title', $speaker['company'] ) . ' ' . apply_filters( 'the_title', '(' . $speaker['title'] . ')' ) . '</h4>' : '' ;
				$output .= ( $speaker['bio'] ) ? apply_filters( 'the_content', $speaker['bio'] ) : '' ;
				if ( ! empty( $speaker['twitter'] ) ) {
					$output .= '<a href="' . esc_url( 'https://twitter.com/' . $speaker['twitter'] ) . '" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @' . $speaker['twitter'] . '</a>';
					$output .= '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
				}
			$output .= '</div>';
			if ( $additional == false ) :
				$output .= '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
					$output .= ( $speaker['thumbnail'] ) ? Gravity_Forms_Helper::make_image( $speaker['thumbnail'], '300', $speaker['name'] ) : '' ;
				$output .= '</div>';
			endif;
			$output .= '</div>';
		}

		$output .= '<hr>';

		return $output;
	}

	/**
	 * Condensed Loop
	 */
	public function short_speaker_loop() {
		$speaker = $this->build_speaker_data();

		// Let's get going with the main block of content.
		$output = '<div class="row">';
			$output .= '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
				if ( has_post_thumbnail() ) {
					$output .= get_the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) );
				} else {
					$output .= Gravity_Forms_Helper::make_image( $speaker['presentation_photo'], '300', get_the_title() );
				}
			$output .= '</div>';
			$output .= '<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">';
				$output .= ( !empty( $speaker['title'] ) ) ? '<h2>' . apply_filters( 'the_title', $speaker['title'] ) . '</h2>' : '' ;
				// We might want to put the speaker title in here.
				$output .= '<h2 class="entry-title"><a href="'. get_permalink() . '">'. get_the_title() . '</a></h2>';
				$output .= ( !empty( $speaker['company'] ) ) ? '<h3>' . apply_filters( 'the_title', $speaker['company'] ) . '</h3>' : '' ;
				$output .= ( get_the_content() ) ? the_content() : apply_filters( 'the_content', $speaker['short_description'] );
				$output .= ( ! empty( $speaker['url'] ) ) ? '<a class="btn btn-default btn-xs" href="' . esc_url( $speaker['url'] ) . '"><span class="glyphicon glyphicon-link"></span> Website</a>' : '';
				$output .= ' ';
				$output .= ( ! empty( $speaker['video_url'] ) ) ? '<a class="btn btn-default btn-xs" href="' . esc_url( $speaker['video_url'] ) . '"><span class="glyphicon glyphicon glyphicon-facetime-video"></span> Video</a>' : '';
			$output .= '</div>';
		$output .= '</div>';


		$output .= '<hr>';

		return $output;
	}

	public function title_override( $heading = 'h1', $display = true ) {
		if ( $display == false ) {
			return;
		}
		global $post;
		$override = get_post_meta( get_the_id(), 'session_title_override' );
		$output = '';
		if ( $override ) {
			$speaker = $this->build_speaker_data();
			$output .= '<' . esc_attr( $heading ) . ' class="entry-title">' . $speaker['title'] . '</' . esc_attr( $heading ) . '>';
		} else {
			$output .= '<' . esc_attr( $heading ) . ' class="entry-title">' . get_the_title() . '</' . esc_attr( $heading ) . '>';
		}
		return $output;
	}
}

$speakers = new Speaker_Meta();

function title_override() {
	global $speakers;
	echo $speakers->title_override();
}
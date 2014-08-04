<?php
/**
 * Adds Session CPT 
 */
 
add_action( 'init', 'create_sessions' );

function create_sessions() {
  register_post_type('session', 
                     array(
                      'labels' => array(
                        'name' => 'Sessions',
                        'singular_name' => 'Session',
						'add_new_item' => 'Add New Session',
						'edit_item' => 'Edit Session'
                       ),
                     'hierarchical' => false,
                     'public' => true,
                     'show_ui' => true,
                     'menu_icon' => 'dashicons-nametag',
                     'supports' => array( 'title', 'editor', 'thumbnail' ),
                     'has_archive' => true
                     ));

}
add_action( 'admin_init', 'session_admin' );
function session_admin() {

  add_meta_box('session_video_meta_box',
               'Session Video',
               'display_session_video_meta_box',
               'session',
               'normal',
               'high');

  add_meta_box('session_keynote_meta_box',
               'Keynote Session',
               'display_session_keynote_meta_box',
               'session',
               'side',
               'high');
  add_meta_box('session_speakers_meta_box',
               'Speakers',
               'display_session_speakers_tags_meta_box',
               'session',
               'side',
               'high');
}

add_action('edit_form_after_title','display_session_subtitle');

function display_session_subtitle() {

    global $post, $typenow, $pagenow;
    if( in_array($typenow, array('post', 'page','session') ) && $pagenow == 'post.php' )  {
        ?><style type="text/css" id="session-editor-css">
			#subtitle {
				padding: 6px px;
				font-size: 1.2em;

				height: 1.7em;
				width: 100%;
				outline: 0;
				margin: 0 0 12px 0;
				background-color: #fff;
			}

		input#subtitle::-webkit-input-placeholder {
			padding: 6px 0px;
		}
		input#subtitle::-moz-placeholder {
			padding: 6px 0px;
		}
		input#subtitle:-moz-placeholder {
			padding: 6px 0px;
		}
		input#subtitle:-ms-input-placeholder {
			padding: 6px 0px;
		}
		</style>
		<label class="screen-reader-text" id="title-prompt-text" for="subtitle"><?php echo apply_filters( 'enter_subtitle_here', __( 'Enter subtitle here' ), $post ); ?></label>
	<input type="text" name="session_subtitle" size="30" value="<?php echo esc_attr(htmlspecialchars( get_post_meta($post->ID, '_session_subtitle', true) )); ?>" id="subtitle" placeholder="<?php echo apply_filters( 'enter_subtitle_here', __( 'Enter subtitle here' ), $post ); ?>" autocomplete="off" />
		<?php
    }
}

function display_session_video_meta_box($session) {
  $session_video_url = get_post_meta( $session->ID, '_session_video_url', true );
  ?>
    <table style="width: 100%">
      <tr>
        <td>Session Video URL</td>
      </tr>
      <tr>
        <td><input style="width: 100%" type="text" name="session_video_url" value="<?php echo $session_video_url; ?>"></td>
      </tr>
    </table>
  <?php

}

function display_session_keynote_meta_box($session) {
  $session_keynote = get_post_meta( $session->ID, '_session_keynote', true);
  ?>
    <table style="width: 100%">
      <tr>
        <td>
          <input type="checkbox" name="session_keynote" value="keynote" <?php if( $session_keynote != "" ) { ?>checked="checked"<?php } ?> />  Keynote Session
        </td>
      </tr>
    </table>
  <?php
}


function display_session_speakers_tags_meta_box($session, $box) {
	

	if ( !isset($box['args']) || !is_array($box['args']) )
		$args = array();
	else
		$args = $box['args'];
	extract( wp_parse_args($args, $defaults), EXTR_SKIP );


	$taxonomy = 'session_speakers';
	$tax_name = esc_attr('session-speakers');
	$user_can_assign_speakers = true;
	$comma = _x( ',', 'tag delimiter' );

	$session_speaker_selected = get_post_meta( $session->ID, '_session_speakers', true);

	$session_speaker_ids = explode(",",get_post_meta( $session->ID, '_session_speakers', true));

	$wp_session_events = wp_get_post_terms($session->ID, 'event', array());
	$session_speaker_events = array();
	foreach($wp_session_events as $wp_session_event) {
		$session_speaker_events[$wp_session_event->term_id] = $wp_session_event->slug;
	}
	$session_speaker_event_slug = join(',',$session_speaker_events);
	$wp_speaker_list = array();
	$wp_speaker_posts = get_posts(array('post_type'=>'speaker','event' => $session_speaker_event_slug, 'posts_per_page' => -1 ));	
	foreach($wp_speaker_posts as $speaker_post) {
		setup_postdata($speaker_post);
		$wp_speaker_list[$speaker_post->ID] = $speaker_post->post_title;

	}

	$wp_speaker_list_all = array();
	$wp_speaker_posts = get_posts(array('post_type'=>'speaker', 'posts_per_page' => -1 ));	
	foreach($wp_speaker_posts as $speaker_post) {
		setup_postdata($speaker_post);
		$wp_speaker_list_all[$speaker_post->ID] = $speaker_post->post_title;
	}
	?>
	<div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv">
		<ul id="<?php echo $taxonomy; ?>-tabs" class="category-tabs">
			<li class="tabs"><a href="#<?php echo $taxonomy; ?>-cur"><?php _e( 'Current Speakers' ); ?></a></li>
			<li class="hide-if-no-js"><a href="#<?php echo $taxonomy; ?>-all"><?php echo 'All Speakers'; ?></a></li>
			
		</ul>
		

		<div id="<?php echo $taxonomy; ?>-cur" class="tabs-panel">
		<?php
		    $name = 'speaker_list';
		    echo "<input type='hidden' name='{$name}[]' value='0' />"; // Allows for an empty term set to be sent. 0 is an invalid Term ID and will be ignored by empty() checks.
		    ?>
				<ul id="<?php echo $taxonomy; ?>checklist" data-wp-lists="list:<?php echo $taxonomy?>" class="categorychecklist form-no-clear">
				<?php 
				$label_max = 25;
				//show selected speakers first.
				foreach($wp_speaker_list_all as $speaker_id => $speaker_label) {
					if(in_array($speaker_id, $session_speaker_ids)) {
						//truncate label
						$label_length = strlen($speaker_label);				
						$speaker_label = substr($speaker_label, 0, $label_max);
						if ($label_length > $label_max) $speaker_label .= "...";

						echo("<li id=\"speaker-{$speaker_id}\" class=\"popular-category\"><label><input value=\"{$speaker_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$speaker_id}\" checked=\"checked\"> {$speaker_label}</label></li>\n");
					}
				}

				//non-selected speakers next.
				foreach($wp_speaker_list as $speaker_id => $speaker_label) {
					if(!in_array($speaker_id, $session_speaker_ids)) {
						//truncate label
						$label_length = strlen($speaker_label);				
						$speaker_label = substr($speaker_label, 0, $label_max);
						if ($label_length > $label_max) $speaker_label .= "...";

						echo("<li id=\"speaker-{$speaker_id}\" class=\"popular-category\"><label><input value=\"{$speaker_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$speaker_id}\"> {$speaker_label}</label></li>\n");
					}
				}

				?>
				</ul>
		</div>
		<div id="<?php echo $taxonomy; ?>-all" class="tabs-panel"  style="display: none;">
				<?php

		    echo "<input type='hidden' name='{$name}[]' value='0' />"; // Allows for an empty term set to be sent. 0 is an invalid Term ID and will be ignored by empty() checks.
		    ?>
				<ul id="<?php echo $taxonomy; ?>checklist" data-wp-lists="list:<?php echo $taxonomy?>" class="categorychecklist form-no-clear">
				<?php 
				$label_max = 25;
				//show selected speakers first.
				foreach($wp_speaker_list_all as $speaker_id => $speaker_label) {
					if(in_array($speaker_id, $session_speaker_ids)) {
						//truncate label
						$label_length = strlen($speaker_label);				
						$speaker_label = substr($speaker_label, 0, $label_max);
						if ($label_length > $label_max) $speaker_label .= "...";

						echo("<li id=\"speaker-{$speaker_id}\" class=\"popular-category\"><label><input value=\"{$speaker_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$speaker_id}\" checked=\"checked\"> {$speaker_label}</label></li>\n");
					}
				}

				//non-selected speakers next.
				foreach($wp_speaker_list_all as $speaker_id => $speaker_label) {
					if(!in_array($speaker_id, $session_speaker_ids)) {
						//truncate label
						$label_length = strlen($speaker_label);				
						$speaker_label = substr($speaker_label, 0, $label_max);
						if ($label_length > $label_max) $speaker_label .= "...";

						echo("<li id=\"speaker-{$speaker_id}\" class=\"popular-category\"><label><input value=\"{$speaker_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$speaker_id}\"> {$speaker_label}</label></li>\n");
					}
				}

				?>
					
				</ul>
		</div>

	</div>
<?php

}


add_action('save_post', 'add_session_fields', 10, 2);
function add_session_fields($session_id, $session) {
	if($session->post_type == 'session') {
		if(isset($_POST['session_speakers']) && $_POST['session_speakers'] != '') {
		  update_post_meta($session_id, '_session_speakers', $_POST['session_speakers']);
		}

		if(isset($_POST['speaker_list']) && $_POST['speaker_list'] != '') {
			$old_session_speaker_ids = explode(",",get_post_meta( $session_id, '_session_speakers', true));

			$wp_session_speakers = array();
			foreach ($_POST['speaker_list'] as $speaker_term_id) {
				//currently checked speaker 
				$wp_session_speaker_counts = array_count_values($_POST['speaker_list']);
				if(($speaker_term_id != 0) && (in_array($speaker_term_id, $old_session_speaker_ids)) && ($wp_session_speaker_counts[$speaker_term_id] == 2)) {
					$wp_session_speakers[] = $speaker_term_id;
				} elseif(($speaker_term_id != 0) && (!in_array($speaker_term_id, $old_session_speaker_ids)) ) {
					$wp_session_speakers[] = $speaker_term_id;
				}   
			} 

			$wp_session_speakers_list = join(',', array_unique($wp_session_speakers));
			update_post_meta($session_id, '_session_speakers',$wp_session_speakers_list);
		}

		if(isset($_POST['session_subtitle']) && $_POST['session_subtitle'] != '') {
		  update_post_meta($session_id, '_session_subtitle', $_POST['session_subtitle']);
		}

		if(isset($_POST['session_keynote']) && $_POST['session_keynote'] != '') {
			update_post_meta($session_id, '_session_keynote', $_POST['session_keynote']);
		} else {
			update_post_meta($session_id, '_session_keynote','');
		}

		if(isset($_POST['session_video_url']) && $_POST['session_video_url'] != '') {
			update_post_meta($session_id, '_session_video_url', $_POST['session_video_url']);
		}
	}
	
}
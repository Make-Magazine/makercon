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
               'display_session_speakers_meta_box',
               'session',
               'side',
               'high');
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

function display_session_speakers_meta_box($session) {
	  $session_speakers_list = get_post_meta( $session->ID, '_session_speakers', true); ?>
	    <table style="width: 100%">
		  <tr>
		    <td>Session Speakers</td>
		  </tr>
		  <tr>
		    <td><input style="width: 100%" type="text" name="session_speakers" value="<?php echo $session_speakers_list; ?>"></td>
		  </tr>
   	 	</table>
  <?php

}



add_action('save_post', 'add_session_fields', 10, 2);
function add_session_fields($session_id, $session) {
	if($session->post_type == 'session') {
		if(isset($_POST['session_speakers']) && $_POST['session_speakers'] != '') {
		  update_post_meta($session_id, '_session_speakers', $_POST['session_speakers']);
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

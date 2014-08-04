<?php


add_action( 'init', 'create_speakers' );
add_action( 'init', 'register_speaker_shortcodes' );

function create_speakers() {
  register_post_type('speaker',
                     array(
						'labels' => array(
						'name' => 'Speakers',
						'singular_name' => 'Speaker',
						'add_new_item' => 'Add New Speaker',
						'edit_item' => 'Edit Speaker'
                       ),
                     'hierarchical' => false,
                     'public' => true,
                     'show_ui' => true,
                     'menu_icon' => 'dashicons-businessman',
                     'supports' => array( 'title', 'excerpt','editor', 'thumbnail','custom-fields'),
                     'has_archive' => true
                     ));
}

add_action( 'admin_init', 'speakers_admin' );
function speakers_admin() {

  add_meta_box('speaker_details_meta_box',
               'Speaker Details',
               'display_speaker_details_meta_box',
               'speaker',
               'normal',
               'high');

  add_meta_box('speakers_featured_meta_box',
               'Featured Speaker',
               'display_speaker_featured_meta_box',
               'speaker',
               'side',
               'high');
}


function display_speaker_details_meta_box($speaker) {
  	$speaker_twitter = get_post_meta( $speaker->ID, 'twitter', true );
	$speaker_website = get_post_meta( $speaker->ID, 'website', true );
  ?>
    <table style="width: 100%">
      <tr>
        <td>Twitter</td>
      </tr>
      <tr>
        <td><input style="width: 100%" type="text" name="speaker_twitter" value="<?php echo $speaker_twitter; ?>"></td>
      </tr>
    </table>
	<table style="width: 100%">
      <tr>
        <td>Website</td>
      </tr>
      <tr>
        <td><input style="width: 100%" type="text" name="speaker_website" value="<?php echo $speaker_website; ?>"></td>
      </tr>
    </table>
  <?php
}

function display_speaker_featured_meta_box($speaker) {
  $speaker_featured = get_post_meta( $speaker->ID, 'speaker_featured', true)
  ?>
    <table style="width: 100%">
      <tr>
        <td>
          <input type="checkbox" name="speaker_featured" <?php if( $speaker_featured != "" ) { ?>checked="checked"<?php } ?> />  Check to display on the front-page.
        </td>
      </tr>
    </table>
  <?php
}

add_action('save_post', 'add_speaker_fields', 10, 2);
function add_speaker_fields($speaker_id, $speaker) {
  if($speaker->post_type == 'speaker') {
    if(isset($_POST['speaker_bio_min']) && $_POST['speaker_bio_min'] != '') {
      update_post_meta($speaker_id, 'speaker_bio_min', $_POST['speaker_bio_min']);
    }

	if(isset($_POST['speaker_twitter'])) {
      update_post_meta($speaker_id, 'twitter', $_POST['speaker_twitter']);
    }

	if(isset($_POST['speaker_website'])) {
		update_post_meta($speaker_id, 'website', $_POST['speaker_website']);
	}

	if(isset($_POST['speaker_featured']) && $_POST['speaker_featured'] != '') {
		update_post_meta($session_id, 'speaker_featured', $_POST['speaker_featured']);
	} else {
		update_post_meta($session_id, 'speaker_featured','');
	}

  }
}


function register_speaker_shortcodes() {
  add_shortcode('featured-speakers', 'featured_speakers_function');
}

function featured_speakers_function() {
  echo '<h2>Featured Speakers</h2>';
  $featured_speakers = Array();

  array_push($featured_speakers, get_option('featured-speaker-1'));
  array_push($featured_speakers, get_option('featured-speaker-2'));
  array_push($featured_speakers, get_option('featured-speaker-3'));
  array_push($featured_speakers, get_option('featured-speaker-4'));
  ?>
  <ul style="margin: 0px 0px 10px 0px; padding: 0px;" class="featured-speakers">
     <?php foreach($featured_speakers as $user_id) {
        featured_speakers_view($user_id);
     }?>
   </ul>
   <?php
}

function featured_speakers_view($user_id) {
  $post = get_post($user_id, ARRAY_A);
  ?>
    <li style="overflow: auto; list-style-type: none; margin-bottom: 10px; background-color: #00ABCD; padding: 10px; color: #FFF;">
      <div class="speaker-image" style="float: left; margin-right: 10px; border: 3px solid #FFF;">
        <?php echo get_the_post_thumbnail($user_id, array(100,100)); ?>
      </div>
      <div class="speaker-info">
        <div class="speaker-name-bio">
          <div class="speaker-box-name"><?php echo $post['post_title'];?></div>
          <div class="speaker-box-bio"> <?php echo get_post_meta($user_id, 'speaker_bio_min', true);?></div>
        </div>
        <div class="speaker-session">
        </div>
      </div>
    </li>
  <?php
}

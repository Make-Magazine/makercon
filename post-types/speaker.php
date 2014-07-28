<?php


add_action( 'init', 'create_speakers' );
add_action( 'init', 'register_speaker_shortcodes' );

function create_speakers() {
  register_post_type('speakers', 
                     array(
                      'labels' => array(
                        'name' => 'Speakers',
                        'singular_name' => 'Speaker'
                       ),
                     'hierarchical' => false,
                     'public' => true,
                     'show_ui' => true,
                     'supports' => array( 'title', 'editor', 'thumbnail' ),
                     'has_archive' => true
                     ));
}

add_action( 'admin_init', 'speakers_admin' );
function speakers_admin() {
  add_meta_box('speakers_meta_box',
               'Speaker Details',
               'display_speaker_meta_box',
               'speakers',
               'normal',
               'high');
  add_meta_box('speakers_featured_meta_box',
               'Featured Speaker',
               'display_speaker_featured_meta_box',
               'speakers',
               'side',
               'high');
}

function display_speaker_meta_box($speaker) {
  $speaker_bio_min = get_post_meta( $speaker->ID, 'speaker_bio_min', true );
  ?>
    <table style="width: 100%">
      <tr>
        <td>Speaker Bio</td>
      </tr>
      <tr>
        <td><input style="width: 100%" type="text" name="speaker_bio_min" value="<?=$speaker_bio_min;?>"></td>
      </tr>
    </table>
  <?
}

function display_speaker_featured_meta_box($speaker) {
  $speaker_featured = get_post_meta( $speaker->ID, 'speaker_featured', true)
  ?>
    <table style="width: 100%">
      <tr>
        <td>
          <input type="checkbox" name="speaker_featured" <?php if( $speaker_featured == true ) { ?>checked="checked"<?php } ?> />  Check to display on the front-page.
        </td>
      </tr>
    </table>
  <?
}

add_action('save_post', 'add_speaker_fields', 10, 2);
function add_speaker_fields($speaker_id, $speaker) {
  if($speaker->post_type == 'speakers') {
    if(isset($_POST['speaker_bio_min']) && $_POST['speaker_bio_min'] != '') {
      update_post_meta($speaker_id, 'speaker_bio_min', $_POST['speaker_bio_min']);
    }
    update_post_meta($speaker_id, 'speaker_featured', $_POST['speaker_featured']);
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

  ?><ul style="margin: 0px 0px 10px 0px; padding: 0px;" class="featured-speakers">
     <? foreach($featured_speakers as $user_id) {
        featured_speakers_view($user_id);
     }?>
   </ul><?
}

function featured_speakers_view($user_id) {
  $post = get_post($user_id, ARRAY_A);
  ?>
    <li style="overflow: auto; list-style-type: none; margin-bottom: 10px; background-color: #00ABCD; padding: 10px; color: #FFF;">
      <div class="speaker-image" style="float: left; margin-right: 10px; border: 3px solid #FFF;">
        <?=get_the_post_thumbnail($user_id, array(100,100)); ?>
      </div>
      <div class="speaker-info">
        <div class="speaker-name-bio">
          <?=$post['post_title'];?> — <?=get_post_meta($user_id, 'speaker_bio_min', true);?>
        </div>
        <div class="speaker-session">
        </div>
      </div>
    </li>
  <?
}

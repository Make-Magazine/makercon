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

	add_meta_box('speakers_session_meta_box',
		       'Sessions',
		       'display_speakers_session_tags_meta_box',
		       'speaker',
		       'side',
		       'high');

}

add_filter('enter_title_here','speaker_title_filter');
function speaker_title_filter($speaker_title = '') {
	$speaker_title = (get_post_type()=='speaker') ? "Enter speaker name here": $speaker_title;

	return $speaker_title;

}
add_action('edit_form_after_title','display_speaker_subtitle');

function display_speaker_subtitle() {

    global $post, $typenow, $pagenow;
    if( in_array($typenow, array('speaker') ) && (($pagenow == 'post.php')||($pagenow == 'post-new.php')) )  {
        ?><style type="text/css" id="speaker-editor-css">
		#subtitle {
			padding: 6px 6px;
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
	<input type="text" name="speaker_subtitle" size="30" value="<?php echo esc_attr(htmlspecialchars( get_post_meta($post->ID, '_speaker_subtitle', true) )); ?>" id="subtitle" placeholder="<?php echo apply_filters( 'enter_subtitle_here', __( 'Enter subtitle here' ), $post ); ?>" autocomplete="off" />
		<?php
    }
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


function display_speakers_session_tags_meta_box($speaker, $box) {
	
	$defaults = array('taxonomy' => 'speakers_session');

	if ( !isset($box['args']) || !is_array($box['args']) )
		$args = array();
	else
		$args = $box['args'];
	extract( wp_parse_args($args, $defaults), EXTR_SKIP );


	$taxonomy = 'speakers_session';
	$tax_name = esc_attr('speaker-session');
	$user_can_assign_speakers = true;
	$comma = _x( ',', 'tag delimiter' );

	$speaker_session_selected = get_post_meta( $speaker->ID, '_speaker_sessions', true);

	$speaker_session_ids = explode(",",get_post_meta( $speaker->ID, '_speaker_sessions', true));

	$wp_session_events = wp_get_post_terms($speaker->ID, 'event', array());
	$speaker_session_events = array();
	foreach($wp_session_events as $wp_session_event) {
		$speaker_session_events[$wp_session_event->term_id] = $wp_session_event->slug;
	}
	$speaker_session_event_slug = join(',',$speaker_session_events);
	$wp_session_list = array();
	$wp_session_posts = get_posts(array('post_type'=>'session','event' => $speaker_session_event_slug, 'posts_per_page' => -1 ));
	foreach($wp_session_posts as $session_post) {
		setup_postdata($session_post);
		$wp_session_list[$session_post->ID] = $session_post->post_title;

	}

	$wp_session_list_all = array();
	$wp_session_posts = get_posts(array('post_type'=>'session', 'posts_per_page' => -1 ));
	foreach($wp_session_posts as $session_post) {
		setup_postdata($session_post);
		$wp_session_list_all[$session_post->ID] = $session_post->post_title;
	}


	?>
	<div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv">
		<ul id="<?php echo $taxonomy; ?>-tabs" class="category-tabs">
			<li class="tabs"><a href="#<?php echo $taxonomy; ?>-cur"><?php _e( 'Current Sessions' ); ?></a></li>
			<li class="hide-if-no-js"><a href="#<?php echo $taxonomy; ?>-all"><?php echo 'All Sessions'; ?></a></li>

		</ul>

		<div id="<?php echo $taxonomy; ?>-cur" class="tabs-panel">
		<?php
		    $name = 'session_list';
		    echo "<input type='hidden' name='{$name}[]' value='0' />"; // Allows for an empty term set to be sent. 0 is an invalid Term ID and will be ignored by empty() checks.
		    ?>
				<ul id="<?php echo $taxonomy; ?>checklist" data-wp-lists="list:<?php echo $taxonomy?>" class="categorychecklist form-no-clear">
				<?php
				$label_max = 25;
				//show selected speakers first.
				foreach($speaker_session_ids as $session_id) {
					if(array_key_exists($session_id, $wp_session_list_all)) {
						$session_label = $wp_session_list_all[$session_id];
						//truncate label
						$label_length = strlen($session_label);
						$session_label = substr($session_label, 0, $label_max);
						if ($label_length > $label_max) $session_label .= "...";

						echo("<li id=\"speaker-{$session_id}\" class=\"popular-category\"><label><input value=\"{$session_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$session_id}\" checked=\"checked\"> {$session_label}</label></li>\n");
					}
				}

				//non-selected speakers next.
				foreach($wp_session_list as $session_id => $session_label) {
					if(!in_array($session_id, $speaker_session_ids)) {
						//truncate label
						$label_length = strlen($session_label);
						$session_label = substr($session_label, 0, $label_max);
						if ($label_length > $label_max) $session_label .= "...";

						echo("<li id=\"speaker-{$session_id}\" class=\"popular-category\"><label><input value=\"{$session_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$session_id}\"> {$session_label}</label></li>\n");
					}
				}

				?>
					<?php //wp_terms_checklist($post->ID, array( 'taxonomy' => $taxonomy, 'popular_cats' => $popular_ids ) ) ?>
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
				foreach($speaker_session_ids as $session_id) {
					if(array_key_exists($session_id, $wp_session_list_all)) {
						$session_label = $wp_session_list_all[$session_id];
						//truncate label
						$label_length = strlen($session_label);
						$session_label = substr($session_label, 0, $label_max);
						if ($label_length > $label_max) $session_label .= "...";

						echo("<li id=\"speaker-{$session_id}\" class=\"popular-category\"><label><input value=\"{$session_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$session_id}\" checked=\"checked\"> {$session_label}</label></li>\n");
					}
				}

				//non-selected speakers next.
				foreach($wp_session_list_all as $session_id => $session_label) {
					if(!in_array($session_id, $speaker_session_ids)) {
						//truncate label
						$label_length = strlen($session_label);
						$session_label = substr($session_label, 0, $label_max);
						if ($label_length > $label_max) $session_label .= "...";

						echo("<li id=\"speaker-{$session_id}\" class=\"popular-category\"><label><input value=\"{$session_id}\" type=\"checkbox\" name=\"{$name}[]\" id=\"in-speaker-{$session_id}\"> {$session_label}</label></li>\n");
					}
				}

				?>

				</ul>
		</div>

	</div>
<?php

}


add_action('save_post', 'add_speaker_fields', 10, 2);
function add_speaker_fields($speaker_id, $speaker) {
  if($speaker->post_type == 'speaker') {
    if(isset($_POST['speaker_bio_min']) && $_POST['speaker_bio_min'] != '') {
      update_post_meta($speaker_id, 'speaker_bio_min', $_POST['speaker_bio_min']);
    }
	if(isset($_POST['session_list']) && $_POST['session_list'] != '') {
		$old_speaker_session_ids = explode(",",get_post_meta( $speaker_id, '_speaker_sessions', true));
		$wp_speaker_session_counts = array_count_values($_POST['session_list']);

		$wp_speaker_sessions = array();
		foreach ($_POST['session_list'] as $session_term_id) {
			//currently checked sessions
			if(($session_term_id != 0) && (in_array($session_term_id, $old_speaker_session_ids)) && ($wp_speaker_session_counts[$session_term_id] == 2)) {
				$wp_speaker_sessions[] = $session_term_id;
			} elseif(($session_term_id != 0) && (!in_array($session_term_id, $old_speaker_session_ids)) ) {
				$wp_speaker_sessions[] = $session_term_id;
			} elseif(($session_term_id != 0) && (in_array($session_term_id, $old_speaker_session_ids)) && ($wp_speaker_session_counts[$session_term_id] == 1)) {
				remove_speaker_from_session($speaker_id, $session_term_id);
			}
		}

	add_speaker_to_sessions($speaker_id, $wp_speaker_sessions);

	$wp_speaker_sessions_list = join(',', array_unique($wp_speaker_sessions));
	update_post_meta($speaker_id, '_speaker_sessions',$wp_speaker_sessions_list);
	}

	if(isset($_POST['speaker_twitter'])) {
      update_post_meta($speaker_id, 'twitter', $_POST['speaker_twitter']);
    }

	if(isset($_POST['speaker_website'])) {
		update_post_meta($speaker_id, 'website', $_POST['speaker_website']);
	}

	if(isset($_POST['speaker_featured']) && $_POST['speaker_featured'] != '') {
		update_post_meta($speaker_id, 'speaker_featured', $_POST['speaker_featured']);
	} else {
		update_post_meta($speaker_id, 'speaker_featured','');
	}

	if(isset($_POST['speaker_subtitle'])) {
		update_post_meta($speaker_id, '_speaker_subtitle', $_POST['speaker_subtitle']);
	}

  }
}

function add_speaker_to_sessions($speaker_id = 0, $wp_speaker_sessions = array() ) {
	
	if((count($wp_speaker_sessions) ==  0) || ($wp_speaker_sessions[0] == '')) return;


	$wp_session_posts = get_posts(array('post_type'=>'session', 'post__in' => array_reverse($wp_speaker_sessions)));
	foreach($wp_session_posts as $wp_session_post) {
		$session_speaker_ids = get_post_meta($wp_session_post->ID, '_session_speakers', true);
		$session_speakers = explode(",",$session_speaker_ids);
		if(!in_array($speaker_id,$session_speakers)) $session_speakers[] = $speaker_id;
		if($session_speakers[0] == '') unset($session_speakers[0]); //remove empty array[0]
		$new_session_speaker_ids = join(",",$session_speakers);
		if($new_session_speaker_ids != $session_speaker_ids) {
			update_post_meta($wp_session_post->ID, '_session_speakers', $new_session_speaker_ids);
		}
	}
	return;
}

function remove_speaker_from_session($speaker_id = 0, $session_id = 0 ) {

	$session_speaker_ids = get_post_meta($session_id, '_session_speakers', true);
	$session_speakers = explode(",",$session_speaker_ids);

	if(($key = array_search($speaker_id, $session_speakers)) !== false) {
		unset($session_speakers[$key]);
		$new_session_speakers = join(",",$session_speakers);

		update_post_meta($session_id, '_session_speakers', $new_session_speakers);
		return true;
	}
		
}
function register_speaker_shortcodes() {
  add_shortcode('featured-speakers', 'featured_speakers_function');
}

function featured_speakers_function() {
  $featured_speakers = Array();

  array_push($featured_speakers, get_option('featured-speaker-1'));
  array_push($featured_speakers, get_option('featured-speaker-2'));
  array_push($featured_speakers, get_option('featured-speaker-3'));
  array_push($featured_speakers, get_option('featured-speaker-4'));
  array_push($featured_speakers, get_option('featured-speaker-5'));
  array_push($featured_speakers, get_option('featured-speaker-6'));

    foreach($featured_speakers as $user_id) {
    	featured_speakers_view($user_id);
    }
}

function featured_speakers_view($user_id) {
  $post = get_post($user_id, ARRAY_A);
  ?>
	    <div class="col-md-4 col-sm-4 col-xs-6 speaker-area">
	    	<a href="<?php echo $permalink = get_permalink( $user_id ); ?>">
				<div class="featured-speaker">
					<?php echo get_the_post_thumbnail($user_id, array(200,200),array( 'class' => '  img-circle img-responsive' )); ?>
				</div>
				<div class="speaker-box text-center">
					<h3><?php echo $post['post_title'];?></h3>
					<div class="speaker-box-bio"> <?php echo get_post_meta($user_id, '_speaker_subtitle', true);?></div>
				</div>
				<div class="speaker-session">
				</div>
			</a>
	    </div>
  <?php
}

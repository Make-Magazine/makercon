<?php
  /**
   * The template used for displaying page sessions within the loop
   *
   * @package makercon
   */

  global $wp_post_speaker_ids;
  global $wp_speaker_event_slug;
  global $_show_speaker_permalink;
  global $_show_speaker_more_link;
  global $_show_speaker_website_link;

  if(!isset($_show_speaker_permalink)) {  
    $_show_speaker_permalink = false;
  }

  if(!isset($wp_session_event_slug)) $wp_session_event_slug = get_post_meta($post->ID, 'session_event', true );
  $wp_session_posts = get_posts(array('post_type'=>'session','event' => $wp_session_event_slug, 'posts_per_page' => -1 ));

  $time_slots = Array();
  foreach($wp_session_posts as $post) {
    $timestamp = get_post_meta($post->ID, '_session_start', true);
    if($timestamp != '') {
      $time_slots[$timestamp][] = $post;
    }
  }
  // sorting time slots by date
  ksort($time_slots);

  // day one
  $day_one = date('d', current(array_keys($time_slots)));
  // day two
  $day_two = $day_one + 1;

  $day_one_array = Array();
  $day_two_array = Array();

  foreach($time_slots as $timestamp => $time_slot) {
    if($day_one == date('d', $timestamp)) {
      $day_one_array[$timestamp] = $time_slot;
    } else {
      $day_two_array[$timestamp] = $time_slot;
    }
  }

  echo('<div class="tab-content">');
  feed_me_time_slots($day_one_array, "one", current(array_keys($time_slots)), 'active');
  feed_me_time_slots($day_two_array, "two", current(array_keys($time_slots)), '');
  echo('</div>');

  function feed_me_time_slots($time_slots, $day, $date, $active) {
    echo('<div class="tab-pane '.$active.'" id="day-'.$day.'">');
    echo('<h2>Day '.$day.' - '.strftime("%B %d", $date).'</h2>');
    echo('<br/><br/>');
    foreach($time_slots as $timestamp => $time_slot) {
      foreach($time_slot as $session_post) {
        $session_info = '';

        //get session start time
        $session_start = get_post_meta($session_post->ID, '_session_start', true );
        $session_info .= (($session_start != '')&&($session_start != 0)) ? date("g:i a", $session_start) : '';

        //get session end time
        $session_end = get_post_meta( $session_post->ID, '_session_end', true );
        $session_info .= (($session_end != '')&&($session_start != 0)) ? " - ".date("g:i a", $session_end) : '';
      }
      echo('<div class="sessions-block">');
        echo('<div style="margin-left:3%;" class="session-time col-md-2 col-xs-12">');
          echo($session_info);
        echo('</div>');
        echo('<div class="row speaker-list">');
          foreach($time_slot as $post) {
            print_a_post($post);
          }
        echo('</div>');
      echo('</div>');
    }
    echo('</div>');
  }

  function print_a_post($session_post) {
    $_show_speaker_website_link = false;
    setup_postdata($session_post);
    $no_event = get_post_meta($session_post->ID, '_session_no_event', true);

    //if a location exist, set it as session location
    $wp_session_location = wp_get_post_terms($session_post->ID, 'location', array());
    $session_location = $wp_session_location[0]->name;
   ?>
      <?php if($no_event == true) { ?>
      <div style="margin-left:3%;" class="col-md-9 col-xs-12  sessions-no-event">
      <?php } else { ?>
      <div style="margin-left:3%;" class="col-md-9 col-xs-12  sessions-wrap-days session">
      <?php } ?>

        <div class="lead sessions-page">
          <?php $session_post_title = esc_html($session_post->post_title); ?>
          <?php if($no_event == true) { ?>
            <h2 class="session-title"><?php echo $session_post_title ?></h2>
          <? } else { ?>
            <h2 class="session-title"><a href="<?php echo get_post_permalink($session_post->ID); ?>"><?php echo $session_post_title ?></a></h2>
          <? } ?>
        </div>
        <?php
          $session_speakers = explode(",", get_post_meta($session_post->ID, '_session_speakers', true));
          if($session_location){
            $tmp = $session_location.' - ';
          } else {
            $tmp = '';//reset in case of new row
          }
          if((count($session_speakers) >  0) && ($session_speakers[0] != '')) {
            $speakers= Array();
            foreach($session_speakers as $speaker_id) {
              //check that session is 'published';
              if(get_post_status ( $speaker_id ) == 'publish') {
                $tmp_title = get_the_title($speaker_id);
                $tmp_link = get_permalink($speaker_id);
                $tmp .= '<a href="'.$tmp_link.'">'.$tmp_title.'</a>';
                array_push($speakers, $tmp);
              }
            }

            if((count($speakers) >  0) && ($speakers[0] != '')) { 
              ?>
              <div class="session">
              <?php
                foreach($speakers as $the_speaker) {
                  echo("<p class=\"session-author\">{$the_speaker}</p>");
                }
                $wp_session_tracks = wp_get_post_terms($session_post->ID, 'track', array());
                foreach($wp_session_tracks as $session_track) {
                  $session_name_parts =  explode(' ', $session_track->name);
                  $link = '/sessions/#'.$session_name_parts[0];
                  echo "<p><a class=\"btn btn-default btn-xs\" style=\"color:#02394f;text-transform: uppercase;\" href=\"".strtolower($link)."\">".strtoupper($session_track->name)."</a></p>";
                }
              ?>
              </div>
            <?php } ?>
        <?php } ?>
      </div>
    <?php

  }
?>

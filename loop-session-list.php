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
  
  foreach($wp_session_posts as $session_post) {
    setup_postdata($session_post);
          $session_info = '';
          //get session start time
    $session_start = get_post_meta($session_post->ID, '_session_start', true );
    $session_info .= (($session_start != '')&&($session_start != 0)) ? date("g:i a", $session_start) : '';
          //get session end time
    $session_end = get_post_meta( $session_post->ID, '_session_end', true );
    $session_info .= (($session_end != '')&&($session_start != 0)) ? " - ".date("g:i a", $session_end) : '';

    //if a location exist, set it as session location
    $wp_session_location = wp_get_post_terms($session_post->ID, 'location', array());
    $session_location = $wp_session_location[0]->name;
   ?>
    <div class="row speaker-list speaker-id-<?php echo($session_post->ID); ?>" id="speaker-list-id<?php echo($session_post->ID); ?>">
      <div style="margin-left:3%;" class="col-md-2 col-xs-12"><?php echo($session_info); ?></div> 

      <div style="margin-left:3%;" class="col-md-9 col-xs-12  sessions-wrap session"><div class="lead"><?php
      $session_post_title = esc_html($session_post->post_title);

      echo("<h2><a href=\"".get_post_permalink($session_post->ID)."\">{$session_post_title}</a></h2>");

      $session_subtitle = get_post_meta($session_post->ID, '_session_subtitle', true );
      if($session_subtitle != '') {
        print("<div class=\"speaker-subtitle\">".esc_html($session_subtitle)."</div>");
      } ?></div>
      <?php 
        $session_speakers = explode(",", get_post_meta($session_post->ID, '_session_speakers', true));

        if($session_location){
          $tmp = $session_location.' - ';
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
          

          if((count($speakers) >  0) && ($speakers[0] != '')) { ?>

            <div class="session">
            <?php
              foreach($speakers as $the_speaker) {
                echo("<p class=\"session-author\">{$the_speaker}</p>");
              }
            ?>
            </div><?php

          }

          
          $wp_session_tracks = wp_get_post_terms($session_post->ID, 'track', array());
          foreach($wp_session_tracks as $session_track) {
            print("<a class=\"btn btn-default btn-xs\" style=\"color:#02394f;text-transform: uppercase;\" href=\"#\">{$session_track->name}<a>");
          }

      <?php
        }
        
      ?>
      </div>
    </div><!-- session-<?php echo($session_post->ID); ?> --><br/><br/><br/>
    <?php

  }

  $_show_speaker_website_link = false;
?>

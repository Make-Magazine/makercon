<?php
  /**
   * DISPLAYS EACH SESSION DETAILS ON THE SESSIONS PAGE
   */

add_shortcode('makercon_schedule', 'makercon_schedule_shortcode');

function makercon_schedule_shortcode($atts){
  extract(shortcode_atts(array(
  'track' => 'keynote',
  'event' => 'makercon-ny-2015'
  ), $atts));

  $wp_sessions_posts = get_posts(array('post_type'=>'session',
    'tax_query' => array('relation' => 'AND',
      array('taxonomy' => 'event', 'field' => 'slug', 'terms' => array($event)),
      array('taxonomy' => 'track', 'field' => 'slug', 'terms' => array($track))
    ),
    'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));

  ob_start();

  $wp_track_info = get_term_by('slug',$track,'track');
  ?><div class="track-info-area">
      <div class="row">
         <div class="col-md-12 track-info">
          <p><?php echo(esc_html($wp_track_info->description)); ?></p>
        </div>
      </div>
  </div>
  <div class="sessions-list-area col-xs-12">
  <?php 
    
    foreach($wp_sessions_posts as $session_post) {
      setup_postdata($session_post); ?>
      <a class="session-wrap-a" href="<?php echo(get_post_permalink($session_post->ID)); ?>">  
        <div class="row sessions-wrap">
          <div class="col-md-12 session">
            <h2 class="session-title">
            <?php echo(esc_html($session_post->post_title)); ?></h2>
            <?php

            // DISPLAYS THE MODERATOR AT THE TOP
            if ($moderator = get_field( 'moderator', $session_post->ID )) {
              echo "<p class=\"session-author\">Moderator - " .$moderator->post_title. "</p>"; 
            }

            $session_speaker_ids = explode(",",get_post_meta($session_post->ID, '_session_speakers', true));

            if((count($session_speaker_ids) > 0) && ($session_speaker_ids[0] != '')) {
            $wp_speaker_posts = get_posts(array('post_type'=>'speaker', 'posts_per_page' => -1,
                'post__in' => array_reverse($session_speaker_ids), 'order' => 'ASC', 'orderby' => 'title'));
              echo("<p class=\"session-author\">Speakers - ");
              foreach($wp_speaker_posts as $speaker_post) {
                setup_postdata($speaker_post); ?>
                <?php echo(esc_html($speaker_post->post_title)); ?><?php
                if ($speaker_post !== end($wp_speaker_posts)) {
                  echo ",";
                }
              }
              echo("</p>");
            }

            ?>
          </div>
        </div><!-- .sessions-wrap -->
      </a><?php 
    } ?>
  </div><?php
  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;

}

<?php
  /**
   * The template used for displaying page speakers within the loop
   *
   * @package makercon
   */

  global $wp_post_speaker_ids;
  global $wp_speaker_event_slug;
  global $_show_speaker_permalink;
  global $_show_speaker_more_link;

  if(!isset($_show_speaker_permalink)) {  
    $_show_speaker_permalink = false;
  }

  if(!isset($_show_speaker_more_link)) {  
    $_show_speaker_more_link = false;
  }
  if(!isset($wp_speaker_event_slug)) $wp_speaker_event_slug = get_post_meta($post->ID, 'speaker_event', true );
  if(!isset($wp_post_speaker_ids)) {
  $wp_speaker_posts = get_posts(array('post_type'=>'speaker','event' => $wp_speaker_event_slug, 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));
  } else {
    if(!is_array($wp_post_speaker_ids)) $wp_post_speaker_ids = explode(',',$wp_post_speaker_ids);
    $wp_speaker_posts = get_posts(array('post_type'=>'speaker','event' => $wp_speaker_event_slug, 'orderby' => 'title', 'post__in' => $wp_post_speaker_ids,'order' => 'ASC', 'posts_per_page' => -1 ));
  }

  foreach($wp_speaker_posts as $speaker_post) {
    setup_postdata($speaker_post); ?>
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <?php 
      if(get_post_meta($speaker_post->ID, '_thumbnail_id', true ) !== false) {
        echo get_the_post_thumbnail($speaker_post->ID, 'small-thumbnail' );
      } ?></div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><div class="lead"><?php
      $speaker_post_title = esc_html($speaker_post->post_title);

      if($_show_speaker_permalink == true) { 
        echo("<h3><a href=\"".get_post_permalink($speaker_post->ID)."\">{$speaker_post_title}</a></h3>");
      } else {
        echo("<h3>{$speaker_post_title}</h3>");
      } ?></div>
      <?php echo($speaker_post->post_content); ?><br />
      <br/>
      <?php 
        $speaker_sessions = explode(",", get_post_meta($speaker_post->ID, '_speaker_sessions', true));

        if((count($speaker_sessions) >  0) && ($speaker_sessions[0] != '')) { ?>
      <p class="sessions-container">
        <div class="session_heading">Sessions</div>
        <div class="session">
        <?php
          $anchors = Array();
          foreach($speaker_sessions as $session_id) {
            $tmp_title = get_the_title($session_id);
            $tmp_link = get_permalink($session_id);
            $tmp = '<a href="'.$tmp_link.'">'.$tmp_title.'</a>';
            array_push($anchors, $tmp);
          }
          $session_output = join(", ", $anchors);
          echo $session_output;
        ?>
        </div>
      </p>

      <?php
        }
        
          $_website = get_post_meta($speaker_post->ID, 'website', true );
          $_twitter = get_post_meta($speaker_post->ID, 'twitter', true );
          if((($_website !== false) && ($_website != '') && ($_show_speaker_more_link == true))||(($_twitter !== false) && ($_twitter != ''))) {
            echo("<p class=\"speaker-info-container\">");
            if(($_show_speaker_more_link == true) && ($_website != '')) {
              echo("<b><a href=\"{$_website}\" target=\"_blank\">Learn More</a></b> ");
            } 
            
            if(($_twitter != '')) {
                $_twitter_pos = strpos($_twitter, '@');
                $_twitter = ($_twitter_pos !== FALSE) ? substr($_twitter, 1): $_twitter;
                ?><a href="https://twitter.com/<?php echo($_twitter); ?>" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @<?php echo($_twitter); ?></a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><br><?php
                
            }
           
            echo("</p>");
          }
      ?>
      </div>
    </div><!-- speaker-<?php echo($speaker_post->ID); ?> --><br/><br/><br/>
    <?php

  }
?>

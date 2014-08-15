<?php
/**
 * @package makercon
 */
?>

<article id="session-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="lead"><h2><?php the_title(); ?></h2><?php
      $wp_session_track = wp_get_post_terms(get_the_ID(), 'track', array());
      if (is_object($wp_session_track[0])) {
          $session_track_title = esc_html($wp_session_track[0]->name);
          $session_track_permalink = get_term_link($wp_session_track[0]);
          print("<h3 class=\"session-subtitle\"><a href=\"{$session_track_permalink}\">{$session_track_title}</a></h3>");
      }
      $session_info = '';
      $session_start = get_post_meta( get_the_ID(), '_session_start', true );
      $session_info .= (($session_start != '')&&($session_start != 0)) ? date("g:i a", $session_start) : '';

      $session_end = get_post_meta( get_the_ID(), '_session_end', true );
      $session_info .= (($session_end != '')&&($session_start != 0)) ? " to ".date("g:i a", $session_end) : '';

      $wp_session_location = wp_get_post_terms(get_the_ID(), 'location', array());
      $session_info .= (is_object($wp_session_location[0])) ? " in ".esc_html($wp_session_location[0]->name) : '';
      print("<div class=\"session-info\">{$session_info}</div>");

      ?></div>
      <?php the_content(); ?>
    </div>
  </div>
</article><!-- #session-## -->

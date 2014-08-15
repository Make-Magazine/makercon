<?php
/**
 * @package makercon
 */
?>

<article id="session-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="lead"><h2><?php the_title(); ?></h2><?php
      $session_subtitle = get_post_meta(get_the_ID(), '_session_subtitle', true );
      if($session_subtitle != '') {
        print("<h3 class=\"session-subtitle\">".esc_html($session_subtitle)."</h3>");
      } 

      $session_info = '';
      $session_start = get_post_meta( get_the_ID(), '_session_start', true );
      $session_info .= (($session_start != '')&&($session_start != 0)) ? date("g:i a", $session_start) : '';

      $session_end = get_post_meta( get_the_ID(), '_session_end', true );
      $session_info .= (($session_end != '')&&($session_start != 0)) ? " to ".date("g:i a", $session_end) : '';

      print("<div class=\"session-info\">{$session_info}</div>");

      ?></div>
      <?php the_content(); ?>
    </div>
  </div>      
</article><!-- #session-## -->

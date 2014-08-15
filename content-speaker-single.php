<?php
/**
 * @package makercon
 */
?>
<article id="speaker-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <?php 
      if(get_post_meta(get_the_ID(), '_thumbnail_id', true ) !== false) {
        echo get_the_post_thumbnail(get_the_ID(), 'small-thumbnail' );
      } ?></div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
      <div class="lead"><h2><?php the_title(); ?></h2><?php
      $speaker_subtitle = get_post_meta(get_the_ID(), '_speaker_subtitle', true );
      if($speaker_subtitle != '') {
        print("<h3 class=\"speaker-subtitle\">".esc_html($speaker_subtitle)."</h3>");
      } ?></div>
      <?php the_content(); ?>
      </div>
    </div>
</article><!-- #speaker-## -->

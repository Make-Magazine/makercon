<?php
add_shortcode('makercon_sessions', 'makercon_sessions_shortcode');

function makercon_sessions_shortcode($atts){
  extract(shortcode_atts(array(
  'event' => 'makercon-ny-2014'
  ), $atts));

  $wp_sessions_posts = get_posts(array('post_type'=>'session',
    'tax_query' => array('relation' => 'AND',
      array('taxonomy' => 'event', 'field' => 'slug', 'terms' => array($event)),
    ),
    'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));

  ob_start();
?>
  <div class="sessions-list-area">
  <?php 
    
    foreach($wp_sessions_posts as $session_post) {
      setup_postdata($session_post); ?>
    <div class="row sessions-wrap">
      <div class="col-md-12 session">
        <h2 class="session-title"><a href="<?php echo(get_post_permalink($session_post->ID)); ?>">
        <?php echo(esc_html($session_post->post_title)); ?></a></h2>
        <?php 

        $session_speaker_ids = explode(",",get_post_meta($session_post->ID, '_session_speakers', true));
        

        if((count($session_speaker_ids) > 0) && ($session_speaker_ids[0] != '')) {
          $wp_speaker_posts = get_posts(array('post_type'=>'speaker', 'posts_per_page' => -1,
<<<<<<< HEAD
            'post__in' => array_reverse($session_speaker_ids)));
=======
            'post__in' => array_reverse($session_speaker_ids), 'order' => 'ASC', 'orderby' => 'title'));
>>>>>>> fix-session-speaker-list
          echo("<p class=\"session-author\">");
          foreach($wp_speaker_posts as $speaker_post) {
            setup_postdata($speaker_post); ?>
            <?php echo(esc_html($speaker_post->post_title)); ?>
            <?php
          }
          echo("</p>");
        }

        ?>
      </div>
    </div> <?php } ?>
  </div><?php
  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;

}
  

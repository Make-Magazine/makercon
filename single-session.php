<?php
/**
 * Single session page template
 * This is the session page
 *
 * @package makercon
 */

get_header(); 

global $_show_speaker_website_link;
?>
<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery(".modal-backdrop, #myModal .close, #myModal .btn").live("click", function() {
          jQuery("#myModal iframe").attr("src", jQuery("#myModal iframe").attr("src"));
  });

  jQuery("#myModal").live("click", function () {
          jQuery("#myModal iframe").attr("src", jQuery("#myModal iframe").attr("src"));
  });

});
</script>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'session-single' ); 
      $wp_post_speaker_ids = get_post_meta(get_the_ID(), '_session_speakers', true);

      // DISPLAYS THE MODERATOR AT THE TOP
      if ($moderator = get_field( 'moderator', $session_post->ID )) {
        echo ("<h2 class=\"speaker-h2\">Moderator</h2>");
        echo ("<div class=\"row speaker-list\">");
        echo ("<div class=\"col-xs-3 col-sm-3 col-md-3 col-lg-3\">");
        echo get_the_post_thumbnail($moderator->ID, array(270,270),array( 'class' => '  img-responsive' ) );
        echo ("</div>");
        echo ("<div class=\"col-xs-9 col-sm-9 col-md-9 col-lg-9\">");
        echo "<h3>" .$moderator->post_title. "</h3>";
        echo "<div class=\"speaker-subtitle\">" .$moderator->_speaker_subtitle. "</div>";
        echo($moderator->post_content);
        echo ("</div></div><br><br>");
      }

      // NOW LOOP THROUGH ALL THE SPEAKERS AND PULL THEM IN
      if($wp_post_speaker_ids != '') {
        echo ("<h2 class='speaker-h2'>Speakers</h2>");
        $_show_speaker_website_link = true;
      get_template_part('loop','speaker-list');
      } ?>

    <?php endwhile; // end of the loop. ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>

<?php get_footer(); ?>

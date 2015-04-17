<?php
/**
 * The Template for displaying all single posts.
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

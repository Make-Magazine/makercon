<?php
/**
/**
 * Template Name: Nav/Sessions Page
 *
 * @package makercon
 */

get_header(); ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
  jQuery.fn.exists = function(){return this.length>0;}

  if($('.nav-tabs').exists()) {
    if(window.location.hash) {
      var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
      $('.nav-tabs').children('li').each(function () {
        if($(this).data('tab') == hash) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }

      })

      if($('.tab-content').exists()) {
        $('.tab-content').children('div.tab-pane').each(function () {
          if($(this).attr('id') == hash) {
              $(this).addClass('active');
          } else {
              $(this).removeClass('active');
          }
        });
    
      }

     
     //alert (hash);
    }
  }

});
</script>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

</div>
<?php get_footer(); ?>

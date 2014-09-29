<?php
   /**
    * Template Name: New Video Page Template
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Bill Olson <bolson@makermedia.com>
    *
    */
   get_header(); ?>
<div class="row">
   <div id="primary" class="content-area col-md-12">
      <main id="main" class="site-main" role="main">
         <?php while ( have_posts() ) : the_post(); ?>
         <?php get_template_part( 'content', 'page' ); ?>
         <?php endwhile; // end of the loop. ?>
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->
</div>
<script type="text/javascript">
   jQuery('.modal').bind('hide', function () {
     var iframe = $(this).children('div.modal-body').find('iframe');
     var src = iframe.attr('src');
     iframe.attr('src', '');
     iframe.attr('src', src);
   });
</script>

<script>

$('div.nav div a').click(function (e) {
  $('div.nav div.active').removeClass('active')
  $(this).parent('div').addClass('active')
})

</script>

<?php get_footer(); ?>

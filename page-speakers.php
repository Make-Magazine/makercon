<?php
  /**
   * Template Name: Speakers
   *
   * @package    makercon
   * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
   * @author     Maker Media Web Team
   *
   * Note: Speakers is the page template. "Speaker" is the custom post type.
   * 
   */
  
  get_header(); ?>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <?php get_template_part( 'content', 'speakers' ); ?>
        </article>
      <?php endwhile; ?>
      <?php else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <div class="clearfix">&nbsp;</div>
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->
</div>
<?php get_footer(); ?>

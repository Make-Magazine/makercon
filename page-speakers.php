<?php
/**
 * Template Name: Speakers
 *
 * @package    makercon
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Bill Olson <bolson@makermedia.com>
 *
 * Note: Speakers is the page template. "Speaker" is the custom post type.
 * 
 */

get_header(); ?>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'speakers' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

</div>
<?php get_footer(); ?>

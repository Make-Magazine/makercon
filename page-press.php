<?php
/**
 * Template Name: Press w CTA Heading
 *
 * @package    makercon
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Maker Media Web Team
 *
 */

get_header(); ?>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">

      <div class="jumbotron text-center">
        <h1>Media Registration</h1>
        <p>Thank you for your interest in attending MakerCon New York 2015—September 24, 2015, at the New York Hall of Science in Queens. To register as a member of the media,  please click here.</p>
        <p><a class="btn-red" href="https://www.eventbrite.com/e/makercon-new-york-2015-tickets-17570222007?access=Press">Apply Here</a></p>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

</div>
<?php get_footer(); ?>
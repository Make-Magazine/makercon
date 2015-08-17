<?php
/**
 * Template Name: Schedule
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

			<?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
               <div class="col-xs-12">
                  <?php get_template_part( 'content', 'page' ); ?>
               </div>
               <div class="col-xs-12">
   				  <?php get_template_part( 'content', 'page-sessions' ); ?>
               </div>
            </div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>

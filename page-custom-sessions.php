<?php
/**
 * Template Name: Custom Sessions Page
 *
 * @package    makercon
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Bill Olson <bolson@makermedia.com>
 *
 */

get_header(); ?>
<div class="row">
   <div class="col-md-12">
      <div class="top-navbar">
         <div class="navbar">
               <ul class="nav nav-tabs nav-justified">
                  <li>
                     <h2 class="subtitle"><a href="/new-york-2014/conference/">OVERVIEW</a></h2>
                  </li>
                  <li>
                     <h2 class="subtitle"><a href="/new-york-2014/videos/">VIDEOS</a></h2>
                  </li>
                  <li>
                     <h2 class="subtitle"><a href="/new-york-2014/speakers">SPEAKERS</a></h2>
                  </li>
                  <li class="active">
                     <h2 class="subtitle"><a href="#">SESSIONS</a></h2>
                  </li>
                  <li>
                     <h2 class="subtitle"><a href="/new-york-2014/slides/" target="_blank">SLIDESHARE</a></h2>
                  </li>
               </ul>
            </div>
      </div>
   </div>
</div>
<div class="row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page-sessions' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>

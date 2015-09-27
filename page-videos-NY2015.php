<?php
   /**
    * Template Name: Video Page NY2015
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Maker Media Web Team
    *
    */
   get_header(); ?>
<div class="row">
   <div id="primary" class="content-area col-md-12 video-archive">
      <main id="main" class="site-main" role="main">
         <div class="row">
            <div class="col-md-12">
               <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article <?php post_class(); ?>>
                  <?php the_content(); ?>
               </article>
               <?php endwhile; ?>
               <?php else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
               <div class="clearfix">&nbsp;</div>
            </div>
         </div>
 
<!--          <div class="row">
            <div class="col-md-12">
               <div class="top-navbar">
                  <div class="navbar">
                     <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active col-md-6 tab">
                           <h2 class="subtitle"><a href="#tab_a" aria-controls="tab_1" role="tab"  data-toggle="tab">MakerCon Interviews</a></h2>
                        </li>
                        <li role="presentation" class="col-md-6 tab">
                           <h2 class="subtitle"><a href="#tab_b" aria-controls="tab_b" role="tab"  data-toggle="tab">MakerCon Presentations</a></h2>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div> -->
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->
</div>
<?php get_footer(); ?>

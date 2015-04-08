<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <ul id="block-nav" class="nav nav-tabs">
      <li class="active col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a href="#day-one" data-toggle="tab">Day One</a></li>
      <li class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="background-color:##DBDBDB"><a href="#day-two" data-toggle="tab">Day Two</a></li>
      <!--li class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"><a href="#showcase" data-toggle="tab">Innovation Showcase</a></li-->
    </ul>
  </header><!-- .entry-header -->
  <br/>
  <br/>
  <div class="entry-content">
    <div class="sessions-list-area">
        <?php get_template_part('loop','session-list'); ?>
    </div><!-- .sessions-list-area -->
  </div><!-- .entry-content -->
</article><!-- #post-## -->

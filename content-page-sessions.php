<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#day-one" data-toggle="tab">Day One</a></li>
      <li><a href="#day-two" data-toggle="tab">Day Two</a></li>
      <li><a href="#showcase" data-toggle="tab">Innovation Showcase</a></li>
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

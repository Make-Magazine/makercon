<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">    
    <?php 
        $_page_tabs_menu = get_post_meta(get_the_ID(), 'page_tabs_menu', true);
        if(empty($_page_tabs_menu)) $_page_tabs_menu = 'tabs-menu';

        wp_nav_menu( array( 
            'theme_location' => 'primary',
            'menu' => $_page_tabs_menu,
            'top_menu',
            'depth' => 1,
            'container' => 'div',
            'container_class' => 'secondary-nav-area',
            'menu_class' => 'row nav tabs-nav',
            'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
            'walker' => new Tabs_Walker_Nav_Menu()  ) ); ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->
    <div class="entry-content">
 
    <?php the_content(); ?>
    <div class="sessions-list-area">
    </div><!-- .sessions-list-area -->
  </div><!-- .entry-content -->
</article><!-- #post-## -->

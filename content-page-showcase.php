<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->
  <div class="entry-content">
    <?php the_content(); ?>
    <table class="table table-hover table-bordered table-striped table-responsive">
    <thead>
    <tr>
      <th style="width: 200px;">Company</th>
      <th>About</th>
    </tr>
    </thead>
    <tbody>
    <?php  

      $wp_company_posts = get_posts(array('post_type'=>'company', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));

      foreach($wp_company_posts as $company_post) {
      ?>

    <tr>
      <td><?php       
    
      $_website = get_post_meta($company_post->ID, 'website', true );
      $company_post_title = esc_html($company_post->post_title);

      if(($_website !== false) && ($_website != '')) {
       echo("<h3><a href=\"".$_website."\" target=\"_blank\">{$company_post_title}</a></h3>");
       } else {
        echo("<h3>{$company_post_title}</h3>");
      }  ?></td>
    <td><?php echo(esc_html($company_post->post_content)); ?></td>
    </tr><?php } ?>
    </tbody>
    </table>
  </div><!-- .entry-content -->
</article><!-- #post-## -->

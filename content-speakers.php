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
		<?php the_content();
		get_template_part('loop','speaker-list');
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'makercon' ), '<p class="edit-link"><span class="btn btn-mini edit-link">', '</span></p>' ); ?>
</article><!-- #post-## -->

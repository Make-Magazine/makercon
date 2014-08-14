<?php
/**
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="lead">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</div>

		<?php
			get_template_part( 'content', 'single' );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

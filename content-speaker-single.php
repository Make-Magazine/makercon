<?php
/**
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="lead">
			<a href="<?php the_permalink(); ?>">
				<?php title_override(); ?>
			</a>
		</div>

		<?php
			global $speakers;
			echo $speakers->speaker_loop();
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

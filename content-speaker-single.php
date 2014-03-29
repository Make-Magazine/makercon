<?php
/**
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="lead">
			<a href="<?php the_permalink(); ?>">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</a>
		</div>

		<?php echo Speaker_Meta::speaker_loop(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

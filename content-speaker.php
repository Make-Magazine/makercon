<?php
/**
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php
			global $speakers;
			echo $speakers->short_speaker_loop();
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

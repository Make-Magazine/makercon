<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
	<section class="call-box">
		<div class="row">
			<div class="col-md-6">
				<h2>Call for Speakers</h2>
				<h4>Come speak at MakerCon</h4>
				<p><a class="button button-red" href="#">Register to Speak</a></p>
			</div>
			<div class="col-md-6">
				<h2>Register for MakerCon</h2>
				<h4>Join us in the Maker revolution</h4>
				<p><a class="button button-red" href="#">Register to Attend</a></p>
			</div>
		</div>
	</section><!-- .call-box -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'makercon' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php
/**
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php $selected_speaker = get_post_meta( $post->ID, 'selected_speaker', true ); ?>

		<!-- Let's setup a row of stuff... -->
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) );
				} else {
					echo Gravity_Forms_Helper::make_image( Gravity_Forms_Helper::get_form( array( 'form' => 1, 'field' => 25,  ) ), '300', 'Jake' );
				} ?>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="lead">
					<a href="<?php the_permalink(); ?>">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</a>
				</div>
				<?php echo ( get_the_content() ) ? get_the_content() : Gravity_Forms_Helper::get_form( array( 'form' => 1, 'field' => 5,  ) ); ?>
			</div>
		</div>

		<hr>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'makercon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

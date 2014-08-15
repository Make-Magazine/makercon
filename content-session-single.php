<?php
/**
 * @package makercon
 */
?>

<article id="session-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="lead"><h2><?php the_title(); ?></h2></div>
			<?php the_content(); ?>
		</div>
	</div>			
</article><!-- #session-## -->

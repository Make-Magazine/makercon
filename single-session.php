<?php
/**
 * The Template for displaying all single posts.
 *
 * @package makercon
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area col-md-12">
	
		<main id="main" class="site-main" role="main">
		<h2>Single Session</h2>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'session-single' ); 
			
			echo("ID: ".get_the_ID()."<br>");
			
			$wp_post_speaker_ids = get_post_meta(get_the_ID(), '_session_speakers', true);
			echo("Speaker IDs: <pre>".print_r($wp_post_speaker_ids, true)."</pre>\n");

			get_template_part('loop','speaker-list'); ?>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>

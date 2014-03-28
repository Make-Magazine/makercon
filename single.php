<?php
/**
 * The Template for displaying all single posts.
 *
 * @package makercon
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area col-md-8">

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php makercon_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
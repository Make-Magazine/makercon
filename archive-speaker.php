<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package makercon
 */

get_header(); ?>

<div class="row">

	<section id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1 class="page-title">Speakers</h1>
			</header><!-- .page-header -->


			<?php

			// Grab all of the tracks.
			$terms = get_terms( 'track' );

			// Foreach track, spit out all of the sessions.
			foreach ($terms as $term ) {

				echo wp_kses_post( '<h2 class="section-title ' . esc_attr(  sanitize_title( $term->name ) ) . '"> ' . $term->name . '</h2>' );
				echo '<section class="' . esc_attr(  sanitize_title( $term->name ) ) . '">';

				$args = array(
					'post_type' 		=> 'speaker',
					'orderby'			=> 'title',
					'order'				=> 'DESC',
					'posts_per_page'	=> 100,
					'tax_query' 		=> array(
						array(
							'taxonomy'	=> 'track',
							'terms' 	=> $term->term_id,
						)
					),

				);

				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();
					get_template_part( 'content', 'speaker' );
				endwhile;

				// Reset Post Data
				wp_reset_postdata();

				echo '</section>';

			}

			?>

			<?php // makercon_paging_nav(); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

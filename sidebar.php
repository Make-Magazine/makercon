<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package makercon
 */
?>
	<div id="secondary" class="widget-area col-md-4" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'makercon' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'makercon' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
			 <aside class="sponsors widget">
				<h1 class="widget-title" style="margin-bottom:20px;">Our Sponsors</h1>
				<h3>Presenting Sponsor</h3>
				<a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo_250.png" alt="Cornell Logo" width="250"></a>
				<h3 style="margin-top:20px;">Participating Sponsor</h3>
		    	<a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-250.png" alt="Autodesk Fusion Logo" /></a>
			</aside>
	</div><!-- #secondary -->

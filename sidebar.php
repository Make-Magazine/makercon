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
				<a href="http://www.intel.com/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="250"></a>
					   	<h3 style="margin-top:20px;">Host Sponsor</h3>
		    	<a href="http://www.oracle.com/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oracle-redbox-logo.png" alt="Intel Logo" width="250"></a>
				<h3 style="margin-top:20px;">Track Sponsor</h3>
		    	<a href="http://fusion360.autodesk.com/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FUSION-360-sponsor-logo-250.jpg" alt="Autodesk Fusion Logo" /></a>
				  <h3 style="margin-top:20px;">Supporting Sponsor</h3>
		    	<a href="http://www.shopbottools.com/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hax-logo-01.jpg" alt="Haxlr8r Logo" width="150" /></a>
				<a href="http://www.haxlr8r.com/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopbot-sponsor-sidebar.jpg" alt="Shopbot Logo" /></a>
				 <h3 style="margin-top:20px;">Media Partner</h3>
				<a href="http://www.marketwire.com/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marketwired_logo.jpg" alt="Market Wire Logo" width="250" style="margin-top:15px;" /></a>
			</aside>
	</div><!-- #secondary -->

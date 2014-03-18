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
				<a href="http://www.intel.com/"><img src="http://makerfaire.files.wordpress.com/2014/03/intel_logo.jpg?w=250" alt="Intel Logo" /></a>
                <h3 style="margin-top:20px;">Supporting Sponsor</h3>
		    	<a href="http://www.shopbottools.com/"><img src="http://makercon2014.com/wp-content/uploads/2014/03/shopbot-sponsor-sidebar.jpg" alt="Shopbot Logo" /></a>
		    	<h3 style="margin-top:20px;">Partner</h3>
		    	<a href="http://www.oracle.com/"><img src="http://makercon2014.com/wp-content/uploads/2014/03/Oracle_ai.jpg?w=250" alt="Oracle Logo" width="250" style="margin-top:15px;" /></a>		
				 <h3 style="margin-top:20px;">Media Partner</h3>	
				<a href="http://www.marketwire.com/"><img src="http://makerfaire.files.wordpress.com/2013/05/marketwired_logo.jpg?w=250" alt="Market Wire Logo" /></a>			
			</aside>
	</div><!-- #secondary -->

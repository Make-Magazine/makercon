<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>

		<div class="white-box" style="padding-top:30px !important;padding-bottom:30px !important">
		<div class="row sponsors-home">
			<div class="col-md-2">
		    	<h3>Presenting Sponsor</h3>
		    	<a href="http://www.intel.com/">
		    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" style="width:150px;margin-top:5px" />
			</a>
		    </div>
		    <div class="col-md-3">
		    	<h3>Host Sponsor</h3>
				<a href="http://www.oracle.com/">
			    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oracle-redbox-logo.png" alt="Oracle Logo" width="180px" style="width:200px;margin-top:30px;"   />
				</a>
		    </div>
		    <div class="col-md-3">
				<h3>Track Sponsor</h3>
				<a href="http://fusion360.autodesk.com/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/FUSION-360-sponsor-logo-250.jpg" alt="Autodesk Fusion Logo" style="width:180px;margin-top:25px;"  />
				</a>
		    </div>
		    		    <div class="col-md-4">
		    	<h3>Supporting Sponsors</h3>
		    	<div class="col-md-4">
			<a href="http://www.haxlr8r.com/">
		    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hax-logo-01.jpg" alt="Hax Logo"  style="width:60px;"  />
			</a>
		    	</div>
		    	<div class="col-md-8">
		    	<a href="http://www.shopbottools.com/">
		    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopbot-sponsor-sidebar.jpg" alt="Shopbot Logo"  style="width:180px;margin-top:15px;"  />
			</a>
		</div>
		    </div>
	</div>

	<div class="entry-content">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/CoChairs-Image.jpg" alt="Workshop Co-Chairs" class="image-bordered">
				<div class="spacer"></div>
				<!-- <div class="row">
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makey.jpg" alt="Makey the Robot" class="image-bordered">
					</div>
					<div class="col-md-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rex.jpg" alt="T-Rex" class="image-bordered">
					</div>
				</div> -->
			</div>
			<div class="col-md-6">
				<h2>Our MakerCon mission and agenda:</h2>
				<ul class="bullets">
					<li>Celebrate makers and making</li>
					<li>Recognize innovation and ingenuity</li>
					<li>Meet and mix with makers</li>
					<li>Exchange views and visions</li>
					<li>Explore the potential of tools &amp; technology</li>
					<li>Visualize the future (robots &amp; drones!)</li>
					<li>Delve into emerging market trends </li>
					<li>Demo exciting new products</li>
				</ul>
			</div>
		</div>
	</div><!-- .entry-content -->

	<div class="red-banner">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/red-banner.jpg" alt="A leader of the maker movement, MAKE has been integral in helping DIY hobbyists avail themselves of the tools and technologies—such as 3D printers, CNC mills, and microcontrollers—to design and engineer innovative products and devices.">
			</div>
		</div>
	</div>

</article><!-- #post-## -->

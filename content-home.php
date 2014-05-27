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
		<div class="row highlights">
			<div class="col-md-6 posts">
				<p style="text-align:center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ajax-loader.gif" alt="Loading..."></p>
			</div>
			<div class="col-md-6">
				<h2>Photos from Makercon</h2>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<script async defer>
						var images = [
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2498.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2514.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2562.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2578.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2592.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2605.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2613.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2622.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2649.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2678.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2743.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2769.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2793.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2812.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2895.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2919.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2926.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2933.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2936.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2946.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2957.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A2967.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A3004.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A3019.jpg"
							},
							{
								"path": "http://makercon.com/wp-content/uploads/2014/05/MakerCon-2014-1H2A3030.jpg"
							}
						]

					</script>
					<!-- Indicators -->
					<ol class="carousel-indicators">
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner home-slideshow">
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>

			</div>
		</div>
		<div class="spacer"></div>
		<div class="row">
			<div class="col-md-12">
				<p><strong>MakerCon is a conference by and for makers.</strong> The maker movement is providing new insights into local and global manufacturing, design, workforce development, education and even creative culture. MakerCon will provide valuable, practical insights into the impact of the maker movement on science, business and technology.</p>
			</div>
		</div>
		<div class="row" style="margin: 30px auto;">
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cochairs-image-03.jpg" alt="Conference Co-Chairs" class="img-responsive">
				<div class="spacer"></div>
			</div>
			<div class="col-md-4">
				<a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688">Tweets about "#makercon"</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="col-md-4">
				<h2 style="text-align:left;">Our MakerCon mission and agenda:</h2>
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
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/big-themes.jpg" alt="Workshop Co-Chairs" class="">
			</div>
		</div>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post-## -->

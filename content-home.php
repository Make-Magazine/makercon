<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>

	<div class="entry-content">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dale.jpg" alt="Dale Dougherty" class="image-bordered">
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

	<div class="white-box">
		<div class="row">
			<div class="col-md-12">
				<h2>Sponsorships:</h2>
				<p>Become a MakerCon sponsor! Connect your brand to the growing community of makers having an exciting and enduring impact on our world! We have created a number of sponsorship opportunities for companies, media organizations, public institutions and trade associations. Contact: sponsors@makerconference.com for more information.</p>
			</div>
		</div>
	</div>

</article><!-- #post-## -->

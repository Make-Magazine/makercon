<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package makercon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
	<section class="call-box">
		<div class="row">
			<div class="col-md-4">
				<h2>Call for Speakers</h2>
				<h4>Come speak at MakerCon</h4>
				<p class="padme"><a class="button button-red" href="<?php echo home_url( '/propose-a-session/' ); ?>">Register to Speak</a></p>
			</div>
			<div class="col-md-4">
				<h2>Register for MakerCon</h2>
				<h4>Join us in the Maker revolution</h4>
				<p class="padme"><a class="button button-red" href="#">Coming soon!</a></p>
			</div>
			<div class="col-md-4">

				<h2>Subscribe for Updates</h2>
				<h4>Be notified when registration opens</h4>

				<!-- Button trigger modal -->
				<p class="padme"><button class="button button-red" data-toggle="modal" data-target="#myModal">Subscribe</button></p>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Register for MakerCon</h4>
							</div>
							<div class="modal-body">
								<form class="form" role="form" action="http://newsletter.makezine.com/t/r/s/ttlusi/" method="post">
									<div class="form-group">
										<label class="sr-only" for="fieldName">Name</label>
										<input type="email" name="cm-name" class="form-control" id="fieldName" placeholder="Name" required>
									</div>
									<div class="form-group">
										<label class="sr-only" for="fieldEmail">Email address</label>
										<input type="email" name="cm-ttlusi-ttlusi" class="form-control" id="fieldEmail" placeholder="Enter email" required>
									</div>
									<button type="submit" class="btn btn-primary">Subscribe</button>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .call-box -->

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

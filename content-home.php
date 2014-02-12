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
			<div class="col-md-6">
				<h2>Call for Speakers</h2>
				<h4>Come speak at MakerCon</h4>
				<p class="padme"><a class="button button-red" href="#">Register to Speak</a></p>
			</div>
			<div class="col-md-6">
				<h2>Register for MakerCon</h2>
				<h4>Join us in the Maker revolution</h4>
				<p class="padme"><a class="button button-red" href="#">Register to Attend</a></p>
			</div>
		</div>
	</section><!-- .call-box -->

	<div class="entry-content">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dale.jpg" alt="Dale Dougherty" class="image-bordered">
				<div class="spacer"></div>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makey.jpg" alt="Makey the Robot" class="image-bordered">
					</div>
					<div class="col-md-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rex.jpg" alt="T-Rex" class="image-bordered">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2>WHY A WORKSHOP FOR MAKER PROS?</h2>
				<p>Increasingly, these projects provide real solutions that enhance consumers’ lifestyles. As a result, many of these maker pros find themselves running startup companies with little experience or knowledge of the business ecosystem.</p>
				<h2>THE WORKSHOP’S MISSION</h2>
				<p>Facing the challenges of every business, they seek out experts and others who have been there, to advise them on manufacturing, distribution, pricing, funding, customer acquisition and marketing.</p>
				<p>With the launch of its Hardware Innovation Workshop, MAKE has provided a forum for conversation to help makers connect with makers, and makers connect with pros in an intimate, collaborative environment.</p>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package makercon
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="">
			<div class="col-md-4">
				<h3>Past Events</h3>
				<ul>
					<li><a href="http://makezine.com/hardware-innovation-workshop/2013-new-york-event/">2013 New York</a></li>
					<li><a href="http://makezine.com/hardware-innovation-workshop/overview/">2013 Bay Area</a></li>
					<li><a href="http://makezine.com/hardware-innovation-workshop/overview-2012/">2012 Bay Area</a></li>
				</ul>
				<div class="hiw-footer-logo">
					<a href="http://makezine.com/hardware-innovation-workshop/">
						 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hiw-logo_2013.jpg" alt="Hardware Innovation Workshop Logo" width="200px" />
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<h3>New from the editors of MAKE magazine!</h3>
				<p>Maker Pro Newsletter is a weekly roundup of news about the impact makers are having on business and technology. From new hardware products and devices, hot startups, incubators and innovators, to new tools and market trends, Maker Pro delivers a quick read to keep you up to speed on the business of making. <strong>Subscribe today!</strong></p>
				<form action="http://newsletter.makezine.com/t/r/s/ttlusi/" method="post">
					<p>
						<label for="fieldName">Name <input id="fieldName" name="cm-name" type="text" /></label>
					</p>
					<p>
						<label for="fieldEmail">Email <input id="fieldEmail" name="cm-ttlusi-ttlusi" type="email" required /></label>
					</p>
					<p>
						<button type="submit" class="button button-red">Subscribe</button>
					</p>
					</form>
			</div>
			<div class="col-md-4">
				<h3>Venue</h3>
				<ul class="blue">
					<li>New York Hall Of Science</li>
					<li>Corona, NY</li>
					<li>September 17th - 18th 2014</li>
				</ul>
			</div>
		</div>
		<div class="site-info">
			<?php do_action( 'makercon_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page .container -->

<?php wp_footer(); ?>

<script async defer>
	jQuery(document).ready(function(){
		jQuery(".post-edit-link").addClass("btn btn-primary btn-xs");
	});
</script>
</body>
</html>

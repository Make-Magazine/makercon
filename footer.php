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
</div><!-- #container -->

<footer id="colophon" class="footer-wrap row">
	<div class="site-footer container" role="contentinfo">
		<div class="">
			<div class="col-md-4">
				<h2>Past Events</h2>
				<ul>
					<li><a href="http://makezine.com/hardware-innovation-workshop/2013-new-york-event/">2013 New York</a></li>
					<li><a href="http://makezine.com/hardware-innovation-workshop/overview/">2013 Bay Area</a></li>
					<li><a href="http://makezine.com/hardware-innovation-workshop/overview-2012/">2012 Bay Area</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h2>Track the Maker Market!</h2>
				<p>Get the weekly Maker Pro Newsletter from the editors of MAKE magazine.</p>
				<form action="http://newsletter.makezine.com/t/r/s/ttlusi/" method="post">
					<p style="margin-bottom:0px;"><label for="fieldName">Name </label></p>
						<input id="fieldName" name="cm-name" type="text" />
<br />

					<p style="margin-bottom:0px;"><label for="fieldEmail">Email </label></p>
						<input id="fieldEmail" name="cm-ttlusi-ttlusi" type="email" required />

					<div style="margin:20px auto !important;">
						<a class="button" type="submit" >Subscribe</a>
					</div>

				</form>
			</div>
			<div class="col-md-4">
				<h2>Venue</h2>
				<ul class="blue">
					<li>New York Hall Of Science</li>
					<li>Corona, NY</li>
					<li>September 17th - 18th 2014</li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
</div>
<?php wp_footer(); ?>

<script async defer>
	jQuery(document).ready(function(){
		jQuery(".post-edit-link").addClass("button");
	});
</script>
</body>
</html>

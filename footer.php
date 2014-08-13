<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package makercon
 */
?>


   <?php if ( is_front_page() || is_home() ) : ?>

            <?php else : ?>

			<div class="row sponsors" style="border-top:1px solid #999;border-bottom:1px solid #999;padding-top:30px !important; padding-bottom:30px !important;margin-bottom:60px;margin-top:30px;">
		      <div class="col-md-3">
		        <h3 class="subtitle">Presenting Sponsor</h2>
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Intel Logo" style="width:300px;margin-top:41px" />
		        </a>
		      </div>
		      <div class="col-md-3">
		        <h3 class="subtitle">Participating Sponsor</h2>
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300px" style="width:300px;margin-top:30px;"   />
		        </a>
		        <a href="http://http://intel.com">
			        <img style="margin-top:25px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100px"  />
		        </a>
		      </div>
		      <div class="col-md-3">
		        <h3 class="subtitle">Media Partner</h2>
		        	<a href="http://pubads.g.doubleclick.net/gampad/clk?id=147819658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        	<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/engadget-logo-sidebar.gif" alt="Engadget Logo" width="200" />
		        </a>
		      </div>
		      <div class="col-md-3">
		        <h3 class="subtitle">Communications Partner</h2>
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=147820018&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
			   <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/marketwired_logo.jpg" alt="Marketwired Logo" width="150" /></a>
		      </div>
		    </div>
            <?php endif; ?>


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
				<h2>Track the Maker Movement</h2>
				<p>Get the weekly Maker Pro Newsletter from the editors of MAKE magazine.</p>
				<form action="http://newsletter.makezine.com/t/r/s/ttlusi/" method="post">
					<p style="margin-bottom:0px;"><label for="fieldName">Name </label></p>
						<input id="fieldName" name="cm-name" type="text" />
<br />

					<p style="margin:5px 0 0 0;"><label for="fieldEmail">Email </label></p>
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

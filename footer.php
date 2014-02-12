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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="col-md-4">
				<h3>Past Events</h3>
			</div>
			<div class="col-md-4">
				<h3>New for the editors of MAKE magazine!</h3>
				<p>Maker Pro Newsletter is a weekly roundup of news about the impact makers are having on business and technology. From new hardware products and devices, hot startups, incubators and innovators, to new tools and market trends, Maker Pro delivers a quick read to keep you up to speed on the business of making. <a href="#">Subscribe today!</a></p>
			</div>
			<div class="col-md-4">
				<h3>Venue</h3>
				<address>
					Building Name<br>
					1256 Civic St., Room 15<br>
					San Grancisco, CA 95437
				</address>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.jpg" alt="Venue Map">
			</div>
		</div>
		<div class="site-info">
			<?php do_action( 'makercon_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page .container -->

<?php wp_footer(); ?>

</body>
</html>
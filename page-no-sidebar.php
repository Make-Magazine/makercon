<?php
/**
 * Template Name: Page (No Sidebar)
 *
 * @package    makercon
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Bill Olson <bolson@makermedia.com>
 *
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<div class="row sponsors" style="border-top:1px solid #999;border-bottom:1px solid #999;padding-top:30px !important; padding-bottom:30px !important;margin-bottom:60px;">
		      <div class="col-md-6">
		        <h2 class="subtitle">Presenting Sponsor</h2>
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Intel Logo" style="width:300px;margin-top:41px" />
		        </a>
		      </div>
		      <div class="col-md-6">
		        <h2 class="subtitle">Participating Sponsor</h2>
		        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
		        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300px" style="width:300px;margin-top:30px;"   />
		        </a>
		      </div>
		    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>


<?php
/**
 * Template Name: Home Page Template
 *
 * @package    makercon
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Bill Olson <bolson@makermedia.com>
 *
 */
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
  <div class="row">
    <div class="col-md-12">
      <h1 class="bighead">By <strong>Makers</strong> for <strong>Makers</strong></h1>
    </div>
  </div>
  <div class="entry-content">
  <div class="row">
    <div class="col-md-8">
      	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article <?php post_class(); ?>>
					
					<?php the_content(); ?>


				</article>

			<?php endwhile; ?>


			<?php else: ?>

				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
        

        <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-xl-3"></div>
              <div style="margin:20px auto" class="button text-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <a style="color:#fff;" class="" href="https://www.youtube.com/playlist?list=PLwhkA66li5vBEkRxCLCrX7IrHySh3LHj3">More Videos From MakerCon New York 2014</a>
              </div>
        <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-xl-3"></div>
    </div>
    <div class="col-md-4">
      <?php featured_speakers_function(); ?>
      <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1"></div>
              <div style="margin:20px auto" class="button text-center col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <a class="" style="color:#fff;" href="/speakers">Check out the full line up</a>
          </div>
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1"></div>
      </div>
    </div>
  </div>
  <div style="padding-top:30px !important;padding-bottom:30px !important">
    <div class="row sponsors-home" style="border-top:1px solid #999;border-bottom:1px solid #999;padding-top:30px !important; padding-bottom:30px !important;">
      <div class="col-md-6">
        <h2 class="subtitle">Presenting Sponsor</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Cornell Logo" style="width:300px;margin-top:31px" />
        </a>
      </div>
      <div class="col-md-6">
        <h2 class="subtitle">Participating Sponsors</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300px" style="width:300px;margin-top:30px;"   />
        </a>
        
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img style="float:right;margin-left:0px;margin-right:50px;margin-top:20px;width:100px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100px"  />
        </a>
        
        
      </div>
    </div>
    <div style="margin: 50px auto 25px auto;" class="row highlights">
      <div class="col-md-8 posts">
        <p style="text-align:center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ajax-loader.gif" alt="Loading..."></p>
      </div>
      <div class="col-md-4">
        <a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688" height="450">Tweets about "#makercon"</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-12">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/big-themes.jpg" alt="Workshop Co-Chairs" class="">
      </div>
      </div> -->
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->

<?php get_footer(); ?>

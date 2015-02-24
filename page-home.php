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
        <div class="button text-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <a href="/new-york-2014/videos/">See Video from MakerCon NY 2014</a>
        </div>
        <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-xl-3"></div>
      </div>
      <div class="col-md-4">
        <?php featured_speakers_function(); ?>
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1"></div>
        <div class="button text-center col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
          <a href="/speakers">Check out the full line up</a>
        </div>
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 col-xl-1"></div>
      </div>
    </div>
  </div>
  <div class="row sponsors-home">
    <div class="col-md-12">
      <h2 class="subtitle">Presenting Sponsor</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100" align="center" style="text-align:center;" />
      </a>
    </div>
  </div>
  <div class="row highlights">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12 posts">
          <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ajax-loader.gif" alt="Loading..."></p>
        </div>
      </div>
      <div class="row">
        <div class="hidden-xs col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
        <div style="margin: 0px auto" class="button text-center col-xs-12 col-sm-10 col-md-6 col-lg-6 col-xl-6">
          <a class="" style="color:#fff;" href="http://makezine.com/category/maker-pro/" target="_blank">Read More Maker Pro News</a>
        </div>
        <div class="hidden-xs col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
      </div>
    </div>
    <div class="col-md-4">
      <a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688" height="550">Tweets about "#makercon"</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->
<?php get_footer(); ?>

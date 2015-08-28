<?php
/**
* Template Name: Home Page Template
*
* @package    makercon
* @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="no-margins">MakerCon is the epicenter of the Maker Movement</h1>
    </div>
  </div>

  <div class="row home-panel-top">
    <div class="col-md-6 col-md-push-6">
      <div class="embed-responsive embed-responsive-16by9">
      <video class="embed-responsive-item" controls preload="auto" poster="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-still.jpg">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-vo-50.mp4" type='video/mp4' />
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-vo-50.webm" type='video/webm' />
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-vo-50.ogv" type='video/ogg' />
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video</p>
      </video>
      </div>
    </div>
    <div class="col-md-6 col-md-pull-6">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
      <?php else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>

  <!-- xS -->
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Featured Speakers</h1>
    </div>
  </div>
  <div class="row home-panel-top">
    <div class="featured-speakers col-xs-12">
      <div class="row">
        <?php featured_speakers_function(); ?>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center padtop">
          <a class="btn-red" href="/speakers">Check Out The Full Line Up</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <h1>MakerCon is a professional conference by and for Makers</h1>
    </div>
  </div>
  <div class="row home-panel-top">
    <div class="col-md-6">
      <img class="img-responsive" src="//makercon.com/wp-content/uploads/2015/08/insde-makercon.jpg" alt="Inside MakerCon Sessions" />
    </div>
    <div class="col-md-6">
      <p class="lead">What are the signals coming out of the Maker Movement that will shape the coming economy, local communities, education, government policy and initiatives? How is the Movement stimulating talent development, opportunity and agency? How is this Maker Movement distinct from the 20th century industrial model? These are some of the questions that MakerCon NY, a one-day event on September 24, will focus the conversation around. Don't miss it! A full day designed by Makers for Makers.</p>
    </div>
  </div>

  <!-- SPONSORS -->
  <div class="sponsors-home">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h2 class="subtitle">Presenting Sponsors</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="125" align="center" />
        </a>
        <a href="//csr.cisco.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
          <img class="left15" src="//makercon.com/wp-content/uploads/2015/03/Cisco-Sponsor-Logo.png" alt="Cisco Sponsor Logo" width="125" align="center" />
        </a>
    </div>
  </div>
    <div class="row">
    <div class="col-sm-12 col-md-6">
      <h2 class="subtitle">Evening of Innovation Sponsor</h2>
      <a href="//sprout.hp.com/us/en/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img class="top15" src="//makercon.com/wp-content/uploads/2015/03/hp-sprout-sponsor-01.jpg" alt="HP Sprout Sponsor" height="35"  />
      </a>
    </div>
    <div class="col-sm-12 col-md-6">
      <h2 class="subtitle">Participating Sponsors</h2>
          <a href="//flir.com" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
            <img src="//makercon.com/wp-content/uploads/2015/08/makercon-Flir-logo-01.jpg" alt="FLIR Logo" width="150" align="center" />
          </a>
          <a href="//www.makeblock.cc/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
            <img class="left15" src="//makerfaire.com/wp-content/uploads/2015/08/makercon-makeblok-logo-01.jpg" alt="MakeBlock Logo" width="150" align="center" />
          </a>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Communications Partner</h2>
      <a href="//www.marketwired.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="//makercon.com/wp-content/uploads/2015/03/logo.png" alt="Market Wired Sponsor Logo" width="125" align="center" />
      </a>
    </div>
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Host Sponsor</h2>
      <a href="//www.nysci.org/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="//makercon.com/wp-content/uploads/2015/08/makercon-sponsor-NYSCI-Logo.jpg" alt="NYSI Logo" width="100" align="center" />
      </a>
    </div>
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Community Sponsor</h2>
      <a href="//themakersnation.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="//makercon.com/wp-content/uploads/2015/08/makercon-sponsor-mn-Logo.jpg" alt="Makers Nations Logo" width="80" align="center" />
      </a>
    </div>
  </div>
</div>
<div>

  <div class="row home-panel-bot">
    <div class="col-xs-12">
      <h2>Makers in the News</h2>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12 posts">
          <?php
          $rss = fetch_feed('http://makezine.com/category/maker-pro/feed/');
          if (!is_wp_error($rss)) :
          $maxitems = $rss -> get_item_quantity(6); //gets latest 6 items This can be changed to suit your requirements
          $rss_items = $rss -> get_items(0, $maxitems);
          endif;
          ?>
          <?php
          //grabs our post thumbnail image
          function get_first_image_url($html) {
          if (preg_match('/<img.+?src="(.+?)"/', $html, $matches)) {
          return $matches[1];
          }
          }
          ?>
          <?php
          //shortens description
          function shorten($string, $length) {
          $suffix = '&hellip;';
          $short_desc = trim(str_replace(array("\r", "\n", "\t"), ' ', strip_tags($string)));
          $desc = trim(substr($short_desc, 0, $length));
          $lastchar = substr($desc, -1, 1);
          if ($lastchar == '.' || $lastchar == '!' || $lastchar == '?')
          $suffix = '';
          $desc .= $suffix;
          return $desc;
          }
          ?>
          <!--start of displaying our feeds-->
          <ul class="media-list">
            <?php
            if ($maxitems == 0) echo '<li>No items.</li>';
            else foreach ( $rss_items as $item ) :
            ?>
            <li class="media">
              <a class="pull-left mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
                <?php echo '<img class="media-object" height="150" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
              </a>
              <div class="media-body">
                <h3 class="media-heading">
                <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
                </h3>
                <small><?php echo $item -> get_date('F j Y'); ?></small>
                <p><?php echo shorten($item -> get_description(), '200'); ?></p>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="hidden-xs col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
        <div class="text-center col-xs-12 padtop">
          <a class="btn-red" href="http://makezine.com/category/maker-pro/" target="_blank">Read More Maker Pro News</a>
        </div>
        <div class="hidden-xs col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 twitter-sidebar">
      <h3>Active on Twitter</h3>
      <a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688" height="550">Tweets about "#makercon"</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <br/>
    <div class="col-md-4 col-sm-6 top15">
      <h3>Featured on FastCompany</h3>
      <div class="thumbnail">
        <a href="http://www.fastcompany.com/3045505/maker-faire-founder-dale-dougherty-on-the-past-present-and-online-future-of-the-maker-moveme" target="_blank">
          <img src="http://makercon.com/wp-content/uploads/2015/04/FastCompany-article-featured-image.jpg" alt="FastCompany article featured image" class="img-responsive" />
        </a>
        <div class="caption">
          <h3>
          <a href="http://www.fastcompany.com/3045505/maker-faire-founder-dale-dougherty-on-the-past-present-and-online-future-of-the-maker-moveme" target="_blank">Maker Faire founder Dale Dougherty on the past, present, and online future of the Maker Movement</a>
          </h3>
          <p><small>By Harry McCracken | FastCompany</small></p>
          <p>What started a decade ago as an influential magazine—and became a beloved global series of events—is about to become a new social network.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->
<?php get_footer(); ?>

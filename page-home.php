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
          <a href="/new-york-2014/videos/">See Videos from MakerCon NY 2014</a>
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

  <div class="row highlights">
    <div class="col-md-6">
      <h2>MakerCon is the epicenter of the maker movement</h2>
      <p>This year MakerCon happens in San Francisco at the iconic Palace of Fine Arts, the only remaining structure from the 1915 Panama-Pacific International Exposition. As then, the MakerCon Showcase brings the world's attention to innovative and exciting technologies.</p>
      <p>MakerCon connects the individuals at the forefront of the maker movement and taps into the best thinking on how to make things and get them to market, from new technologies to manufacturing models to funding methods. MakerCon is a meeting place for passionate, entrepreneurs who want to test the commercial waters for their prototypes; cultural and civic leaders driving maker initiatives; and product developers inspired by the maker movement.</p>
    </div>
   <div class="col-md-6">
        <img class="img-responsive" src="http://makercon.com/wp-content/uploads/2015/03/Palace_of_Fine_Arts_SF.jpg" alt="Palace of Fine Arts San Francisco" title="Image by Kevin Cole (en:User:Kevinlcole) (originally posted to Flickr as Palace of Fine Arts), via Wikimedia Commons"/>
   </div>
  </div>

  <div class="row sponsors-home">
    <div class="col-md-6">
      <h2 class="subtitle">Presenting Sponsor</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100" align="center" style="text-align:center;" />
      </a>
    </div>
   <div class="col-md-6">
      <h2 class="subtitle">Evening of Innovation Sponsor</h2>
      <a href="https://sprout.hp.com/us/en/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
          <img style="margin-top:15px;" src="http://makercon.com/wp-content/uploads/2015/03/hp-sprout-sponsor-01.jpg" alt="HP Sprout Sponsor" height="35"  />
      </a>
   </div>
  </div>
  <div class="row highlights">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12 posts">
          <h2>Maker Pro News Feed</h2>
          <?php
          $rss = fetch_feed('http://makezine.com/category/maker-pro/feed/');

          if (!is_wp_error($rss)) :

            $maxitems = $rss -> get_item_quantity(5); //gets latest 5 items This can be changed to suit your requirements
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
        <div style="margin: 0px auto" class="button text-center col-xs-12 col-sm-10 col-md-6 col-lg-6 col-xl-6">
          <a class="" style="color:#fff;" href="http://makezine.com/category/maker-pro/" target="_blank">Read More Maker Pro News</a>
        </div>
        <div class="hidden-xs col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688" height="550">Tweets about "#makercon"</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <br/>
    <div class="col-md-4 col-sm-6 top15">
        <div class="thumbnail">
            <a href="http://www.forbes.com/sites/oracle/2014/05/29/maker-movement-fuels-apps-robots-and-internet-of-things/" target="_blank">
                <img src="http://makercon.com/wp-content/uploads/2015/03/makercon-Oracle.jpg" alt="Makercon 2014 at Oracle" class="img-responsive" />
            </a>
            <div class="caption">
                <h3>
                  <a href="http://www.forbes.com/sites/oracle/2014/05/29/maker-movement-fuels-apps-robots-and-internet-of-things/" target="_blank">Maker Movement Fuels Apps, Robots, And Internet Of Things</a>
                </h3>
                <p><small>By Timothy Beneke | Forbes</small></p>
                <p>The newer MakerCon event aims to “celebrate makers and making,” highlight innovation and ingenuity, explore the potential of tools and technology, and “visualize the future.”</p>
            </div>
        </div>
    </div>
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->
<?php get_footer(); ?>

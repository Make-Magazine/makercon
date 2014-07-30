<?php
  /**
   * The template used for displaying page content in page.php
   *
   * @package makercon
   */
  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
  <div class="white-box" style="padding-top:30px !important;padding-bottom:30px !important">
       <div class="row sponsors-home">
    <div class="col-md-6">
      <h3>Presenting Sponsor</h3>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Intel Logo" style="width:300px;margin-top:41px" />
      </a>
    </div>
    <div class="col-md-6">
      <h3>Participating Sponsor</h3>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300px" style="width:300px;margin-top:30px;"   />
      </a>
    </div>

  </div>
  <div class="entry-content">
    <div class="row highlights">
      <div class="col-md-6 posts">
        <p style="text-align:center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ajax-loader.gif" alt="Loading..."></p>
      </div>
      <div class="col-md-6">
        <?php featured_speakers_function(); ?>
        <div style="text-align: center; margin-top: 20px;">
          <a style="padding: 10px; background-color: red; color: #FFF" href="/speakers">Check out the full line up</a>
        </div>
      </div>
    </div>
    <div class="spacer"></div>
    <div class="row">
      <div class="col-md-12">
        <p><strong>MakerCon is a conference by and for makers.</strong> The maker movement is providing new insights into local and global manufacturing, design, workforce development, education and even creative culture. MakerCon provides valuable, practical insights into the impact of makers and making on education, the economy and emerging markets. </p>
      <p><strong>What is MakerCon about?</strong>

<p>MakerCon connects individuals at the forefront of the maker movement, focusing on the new technologies, services ecosystem, manufacturing models, and funding trends that provide new ways of making things and getting them to market.  Four overarching themes frame the discussion: education, community, technology and business.</p>

<p>A two-day format, MakerCon includes epic keynotes, informal fireside chats, provocative panels and thematic meetups featuring experts in digital manufacturing, technology and tool innovators, leaders of higher education and the new breed of industrial designers.  These leaders come together to exchange their views and visions about the impact of the maker movement, and its sweeping measure beyond only new business and new technologies. </p>

<p>Joining the conversation are partners and principals from top VC firms and crowdfunding services, and accelerators and incubators inventing new models to nurture the growing number of startups compelling the next generation of disruptive trends.  Rounding out the attendance will be makers across the spectrum: from passionate, young entrepreneurs testing the commercial waters with their prototypes, to those driving the creative culture and maker initiatives in their community, to product developers looking for inspiration from the maker movement. The hallmark will be the Innovation Showcase, spotlighting two dozen of the most fascinating makers and their inspired inventions.</p>

      </div>
    </div>
    <div class="row" style="margin: 30px auto;">
      <div class="col-md-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cochairs-image-03.jpg" alt="Conference Co-Chairs" class="img-responsive">
        <div class="spacer"></div>
      </div>
      <div class="col-md-4">
        <a class="twitter-timeline" href="https://twitter.com/search?q=%23makercon" data-widget-id="466630807038066688">Tweets about "#makercon"</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
      <div class="col-md-4">
        <h2 style="text-align:left;">Our MakerCon mission and agenda:</h2>
        <ul class="bullets">
          <li>Celebrate makers and making</li>
          <li>Recognize innovation and ingenuity</li>
          <li>Meet and mix with makers</li>
          <li>Exchange views and visions</li>
          <li>Explore the potential of tools &amp; technology</li>
          <li>Visualize the future (robots &amp; drones!)</li>
          <li>Delve into emerging market trends </li>
          <li>Demo exciting new products</li>
        </ul>
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

<?php
  /**
   * The template used for displaying page content in page.php
   *
   * @package makercon
   */
  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
  <div class="row">
    <div class="col-md-12">
      <p style="text-align:center;margin-bottom:25px;font-size:40px;text-transform:uppercase;color:#02394F;margin-top:30px;">By <strong>Makers</strong> for <strong>Makers</strong></p>
    </div>
  </div>
  <div class="entry-content">
  <div class="row">
    <div class="col-md-8">
      <h2 class="subtitle">Live from MakerCon Bay Area 2014</h2>




<!-- Button trigger modal -->
<img class="img-responsive" src="http://make-cdn.s3.amazonaws.com/make/makercon/makercon-BA2014-jay-silver.jpg" data-toggle="modal" data-target="#myModal"/>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 style="text-align:center" class="modal-title" id="myModalLabel" >MakerCon Bay Area, May 2014: Jay Silver, Founder &amp; CEO, JoyLabz</h4>
      </div>
      <div class="modal-body">
        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="//www.youtube.com/embed/QIygWVABumA?list=PLwhkA66li5vCKd7XNwpV42-zgBf9S3vP_" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        <div style="clear:both;"></div>
      <div style="text-align: center; margin-top: 20px;">
        <p><strong>MakerCon Bay Area, May 2014: Jay Silver on designing for "wild humans".</strong></p>
      </div>
      <div style="text-align: center; margin-top: 20px;">
        <a class="button" href="/videos">More Videos from MakerCon</a>
      </div>
    </div>
    <div class="col-md-4">
      <?php featured_speakers_function(); ?>
      <div style="text-align: center; margin-top: 20px;">
        <a class="button" href="/speakers">Check out the full line up</a>
      </div>
    </div>
  </div>
  <div style="padding-top:30px !important;padding-bottom:30px !important">
    <div class="row sponsors-home" style="border-top:1px solid #999;border-bottom:1px solid #999;padding-top:30px !important; padding-bottom:30px !important;">
      <div class="col-md-6">
        <h2 class="subtitle">Presenting Sponsor</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Intel Logo" style="width:300px;margin-top:31px" />
        </a>
      </div>
      <div class="col-md-6">
        <h2 class="subtitle">Participating Sponsors</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300px" style="width:300px;margin-top:30px;"   />
        </a>
        
        <a href="http://http://intel.com">
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

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
<div class="row sponsors" style="border-top:1px solid #999;padding-top:30px !important;margin-top:30px;">
   <div class="col-md-3">
      <h3 class="subtitle">
      Presenting Sponsor</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214418&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cornell_logo-02.png" alt="Cornell Logo" style="width:300px;margin-top:41px" />
      </a>
   </div>
   <div class="col-md-3">
      <h3 class="subtitle">
      Host Sponsor</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=151334578&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/NYSCI_Logo_200w.gif" alt="NYSCI Logo" width="150" />
      </a>
   </div>
   <div class="col-md-6">
      <h3 class="subtitle">
      Participating Sponsors</h2>
      <div class="row">
         <div class="col-md-6">
            <a href="http://pubads.g.doubleclick.net/gampad/clk?id=146214658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fusion-autodesk-sponsor-398.png" alt="Autodesk Logo" width="300" style="width:300px;margin-top:30px;"   />
            </a>
         </div>
         <div class="col-md-6">
            <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
            <img style="margin-top:25px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100"  />
            </a>
         </div>
      </div>
</div>
</div>
<div class="row sponsors" style="text-align:center; border-bottom:1px solid #999;padding-bottom:30px !important;margin-bottom:60px;margin-top:30px;">
   <div class="col-md-6">
      <h3 class="subtitle">
      Media Partner</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=147819658&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img style="margin:auto;" class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/engadget-logo-sidebar.gif" alt="Engadget Logo" width="200" />
      </a>
   </div>
   <div class="col-md-6">
      <h3 class="subtitle">
      Communications Partner</h2>
      <a href="http://pubads.g.doubleclick.net/gampad/clk?id=147820018&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);">
      <img style="margin:auto;" class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/marketwired_logo.jpg" alt="Marketwired Logo" width="150" /></a>
   </div>
</div>
<?php endif; ?>
</div><!-- #content -->
</div><!-- #container -->
</div>
<footer id="colophon" class="footer-wrap row">
   <div class="site-footer container" role="contentinfo">
      <div class="">
         <div class="col-md-4">
            <h2>Past Events</h2>
            <ul>
                <li><a href="/new-york-2014/conference/">New York 2014 </a></li>
               <li><a href="/bay-area-2014/overview/">Bay Area 2014 </a></li>
               <li><a href="http://makezine.com/hardware-innovation-workshop/2013-new-york-event/" target="_blank">New York 2013</a></li>
               <li><a href="http://makezine.com/hardware-innovation-workshop/overview/" target="_blank">Bay Area 2013</a></li>
               <li><a href="http://makezine.com/hardware-innovation-workshop/overview-2012/" target="_blank">Bay Area 2012</a></li>
               <li><a href="http://makercon.no" target="_blank">MakerCon Nordic 2014</a></li>
            </ul>
         </div>
         <div class="col-md-4">
            <h2>Track the Maker Movement</h2>
            <p>Get the weekly Maker Pro Newsletter from the editors of MAKE magazine.</p>
            <form action="http://newsletter.makezine.com/t/r/s/jrsydu/" method="post">
               <p style="margin-bottom:0px;"><label for="fieldName">Name </label></p>
               <input id="fieldName" name="cm-name" type="text" />
               <br />
               <p style="margin:5px 0 0 0;"><label for="fieldEmail">Email </label></p>
               <input id="fieldEmail" name="cm-jrsydu-jrsydu" type="email" required />
               <button type="submit" class="button" value="Subscribe">Subscribe</button>
            </form>
         </div>
         <div class="col-md-4">
            <h2>Venue</h2>
            <ul class="blue">
             <li>Upcoming MakerCons:</li>
             
             <li>MakerCon Bay Area - May 12 &amp; 13, 2015</li>
<li>MakerCon New York - September 2015</li>
</ul>
         </div>
      </div>
      
            <div class="footer-col col-sm-12">
                        <script language="javascript" type="text/javascript">
                          $(document).ready(function(){
                                if(window.location.href.indexOf("?thankyou") > -1) {
                                  $.fancybox(
                                    '<h2>Thank you</h2><br /><h3>More Information Soon</h3>',
                  {
                                      width: 640,
                                      height: 320,
                                      closeBtn : false,
                                      afterLoad: function() {
                                        setTimeout( function() {
                                            $.fancybox.close();
                                        },
                                      2000); // 2 secs
                                      }
                                    }
                                  );
                                }
                            });
                    </script>
        </div>
        
</footer>
<!-- #colophon -->
</div>
<?php wp_footer(); ?>
<script async defer>
   jQuery(document).ready(function(){
      jQuery(".post-edit-link").addClass("button");
   });
</script>
</body>
</html>

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
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Presenting Sponsors</h2>
        <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100" align="center" />
        </a>
        <a href="http://csr.cisco.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
          <img src="http://makercon.com/wp-content/uploads/2015/03/Cisco-Sponsor-Logo.png" alt="Cisco Sponsor Logo" width="100" align="center" style="margin-left:30px;" />
        </a>
    </div>
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Participating Sponsor</h2>
      <a href="http://www.autodesk.com/products/fusion-360/overview" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="http://makercon.com/wp-content/uploads/2015/04/Autodesk_fusion360_logo_flat_color.png" alt="Autodesk Sponsor Logo" width="150" align="center" />
      </a>
      <a href="http://www.nvidia.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="http://makercon.com/wp-content/uploads/2015/04/NVIDIA_Logo.jpg" alt="NVIDIA Sponsor Logo" width="100" align="center" style="margin-left: 20px;" />
      </a>
    </div>
    <div class="col-sm-12 col-md-4">
      <h2 class="subtitle">Evening of Innovation Sponsor</h2>
      <a href="https://sprout.hp.com/us/en/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="http://makercon.com/wp-content/uploads/2015/03/hp-sprout-sponsor-01.jpg" alt="HP Sprout Sponsor" height="35"  />
      </a>
    </div>
    <div class="col-sm-12 col-md-4 col-md-offset-2 top15">
      <h2 class="subtitle">Communications Sponsor</h2>
      <a href="http://www.marketwired.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="http://makercon.com/wp-content/uploads/2015/03/logo.png" alt="Market Wired Sponsor Logo" width="100" align="center" />
      </a>
    </div>
    <div class="col-sm-12 col-md-4 top15">
      <h2 class="subtitle">After Party Sponsor</h2>
      <a href="http://www.arm.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
        <img src="http://makercon.com/wp-content/uploads/2015/04/ARM-After-Party-Sponsor-logo.jpg" alt="ARM After Party Sponsor Logo" width="100" align="center" />
      </a>
    </div>
</div>
<?php endif; ?>
</div><!-- #content -->
</div><!-- #container -->
</div>
<footer id="colophon" class="footer-wrap">
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
            <script>
                $(function() {
                  $( "input[name='custom_url']" ).val( window.location.href );
                });
            </script>
            <form action="http://whatcounts.com/bin/listctrl" method="POST">
                <input type="hidden" name="slid" value="6B5869DC547D3D467B33E192ADD9BE4B" />
                <input type="hidden" name="cmd" value="subscribe" />
                <input type="hidden" name="custom_source" value="footer" />
                <input type="hidden" name="custom_incentive" value="none" />
                <input type="hidden" id="format_mime" name="format" value="mime" />
                <input type="hidden" name="custom_url" value="" />
                <input type="hidden" name="goto" value="http://makercon.com/?thankyou" />
                <input type="hidden" name="errors_to" value="" />
                <p style="margin-bottom:0px;"><label for="fieldName">Name </label></p>
                <input id="fieldName" name="first" type="text" />
                <br />
                <p style="margin:5px 0 0 0;"><label for="fieldEmail">Email </label></p>
                <div class="clearfix"></div>
                <input id="email" name="email" type="email" required />
                <button type="submit" class="button" value="Subscribe">Subscribe</button>
            </form>
         </div>
         <div class="col-md-4">
            <h2>Upcoming MakerCons</h2>
            <ul class="blue">
              <li>MakerCon Bay Area - May 12 &amp; 13, 2015</li>
              <li>MakerCon New York - September 2015</li>
            </ul>
            <h2>More Info</h2>
            <ul>
              <li><a href="https://help.makermedia.com/hc/en-us" target="_blank">Help Center</a></li>
              <li><a href="http://makermedia.com/privacy/" target="_blank">Privacy Policy</a></li>
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
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
        <div class="row sponsors">
            <div class="col-sm-12 col-md-6 top15">
              <h2 class="subtitle">Presenting Sponsors</h2>
                <a href="http://pubads.g.doubleclick.net/gampad/clk?id=150606898&iu=/11548178/Makezine" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intel_logo.jpg" alt="Intel Logo" width="100" align="center" />
                </a>
                <a href="http://csr.cisco.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                  <img src="http://makercon.com/wp-content/uploads/2015/03/Cisco-Sponsor-Logo.png" alt="Cisco Sponsor Logo" width="100" align="center" style="margin-left:30px;" />
                </a>
            </div>
           <!-- 
           <div class="col-sm-12 col-md-4 top15">
              <h2 class="subtitle">Participating Sponsor</h2>
              <div class="row">
                <div class="col-xs-12">
                  <a href="//www.autodesk.com/products/fusion-360/overview" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                    <img src="//makercon.com/wp-content/uploads/2015/04/fusion_360tm_sponsor_logo.png" alt="Autodesk Sponsor Logo" width="150" align="center" />
                  </a>
                  <a href="//www.microsoft.com/en-us/default.aspx" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                    <img src="//makercon.com/wp-content/uploads/2015/04/Microsoft-Participating-Sponsor-Logo.jpg" alt="Microsoft Sponsor Logo" class="left15" width="150" align="center" />
                  </a>
                </div>
              </div> 
              <div class="row">
                <div class="col-xs-12">
                  <a href="//www.nvidia.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                    <img src="//makercon.com/wp-content/uploads/2015/04/NVIDIA_Logo.jpg" alt="NVIDIA Sponsor Logo" width="100" align="center" style="margin-left: 20px;" />
                  </a>
                  <a href="//www.sony.com/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                    <img src="//makercon.com/wp-content/uploads/2015/04/Sony-Participating-Sponsor-Logo.jpg" alt="Sony Sponsor Logo" width="100" align="center" style="margin-left: 45px;" />
                  </a>
                </div>
              </div>
            </div>
          -->
            <div class="col-sm-12 col-md-6 top15">
              <h2 class="subtitle">Evening of Innovation Sponsor</h2>
              <a href="https://sprout.hp.com/us/en/" onClick="_gaq.push(['_trackEvent', 'SponsorAds', 'Click', 'AdLogo']);" target="_blank">
                <img src="http://makercon.com/wp-content/uploads/2015/03/hp-sprout-sponsor-01.jpg" alt="HP Sprout Sponsor" height="35"  />
              </a>
            </div>
            <!-- 
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
      -->
      <?php endif; ?>
    </div><!-- #content -->
  </div><!-- #container -->
</div>

<footer id="footer" class="new-footer">
  <div class="container">
    <div class="row-fluid hidden-xs">
      <div class="col-xs-12 col-sm-6 col-md-3 social-foot-col" >
        <a href="/"><img class="footer_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" alt="MakerCon Logo"></a>
        <ul class="list-unstyled">
          <li><a href="//makezine.com/category/maker-pro/" target="_blank">Maker Pro News</a></li>
          <li><a href="/past-events">Past Events</a></li>
          <li><a href="//makercon.no/" target="_blank">MakerCon Nordic</a></li>
          <li><a href="//help.makermedia.com/hc/en-us/categories/200354945-MakerCon" target="_blank">MakerCon FAQs</a></li>
          <li><a href="//www.slideshare.net/MakerCon?utm_campaign=profiletracking&utm_medium=sssite&utm_source=ssslideview" target="_blank">Slideshows</a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-sm-6 col-md-3 social-foot-col" >
        <h4>Explore Making</h4>
        <ul class="list-unstyled">
          <li><a href="//makezine.com/blog" target="_blank">Make: News</a></li>
          <li><a href="//makerfaire.com" target="_blank">Maker Faire</a></li>
          <li><a href="//www.makershed.com" target="_blank">Maker Shed</a></li>
          <li><a href="/">MakerCon</a></li>
          <li><a href="//makercamp.com" target="_blank">Maker Camp</a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-sm-6 col-md-3 social-foot-col">
        <h4>Our Company</h4>
        <ul class="list-unstyled">
          <li><a href="//makermedia.com" target="_blank">About Us</a></li>
          <li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
          <li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
          <li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
          <li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-sm-6 col-md-3 social-foot-col">
        <h4 class="stay-connected">Stay Connected</h4>
        <div class="social-profile-icons">
          <a class="sprite-facebook-32" href="//www.facebook.com/MakerCon" title="Facebook" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-twitter-32" href="//twitter.com/makercon" title="Twitter" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-pinterest-32" href="//www.pinterest.com/makemagazine/maker-pro/" title="Pinterest" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-googleplus-32" href="//plus.google.com/explore/MakerCon" rel="publisher" title="Google+" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
        </div>
        <?php
          $isSecure = "http://";
          if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $isSecure = "https://";
          }
        ?>
        <form action="http://whatcounts.com/bin/listctrl" method="POST">
          <input type="hidden" name="slid" value="6B5869DC547D3D467B33E192ADD9BE4B" />
          <input type="hidden" name="cmd" value="subscribe" />
          <input type="hidden" name="custom_source" value="footer" /> 
          <input type="hidden" name="custom_incentive" value="none" /> 
          <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
          <input type="hidden" id="format_mime" name="format" value="mime" />
          <input type="hidden" name="goto" value="/?thankyou" />
          <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
          <input type="hidden" name="errors_to" value="" />
          <div>
            <input name="email" placeholder="Enter your Email" required="required" type="text"><br>
            <input value="Sign Up for our Newsletter" class="btn-cyan" type="submit">
          </div>
        </form>
      </div>
    </div><!-- END desktop row -->

    <div class="row visible-xs-block">
      <div class="col-sm-12 social-foot-col">
        <h4 class="stay-connected">Stay Connected</h4>
        <div class="social-profile-icons">
          <a class="sprite-facebook-32" href="//www.facebook.com/MakerCon" title="Facebook" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-twitter-32" href="//twitter.com/makercon" title="Twitter" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-pinterest-32" href="//www.pinterest.com/makemagazine/maker-pro/" title="Pinterest" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
          <a class="sprite-googleplus-32" href="//plus.google.com/explore/MakerCon" rel="publisher" title="Google+" target="_blank">
            <div class="social-profile-cont"> 
              <span class="sprite"></span>
            </div>
          </a>
        </div>
        <?php
          $isSecure = "http://";
          if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $isSecure = "https://";
          }
        ?>
        <form action="http://whatcounts.com/bin/listctrl" method="POST">
          <input type="hidden" name="slid" value="6B5869DC547D3D467B33E192ADD9BE4B" />
          <input type="hidden" name="cmd" value="subscribe" />
          <input type="hidden" name="custom_source" value="footer" /> 
          <input type="hidden" name="custom_incentive" value="none" /> 
          <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
          <input type="hidden" id="format_mime" name="format" value="mime" />
          <input type="hidden" name="goto" value="/?thankyou" />
          <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
          <input type="hidden" name="errors_to" value="" />
          <div>
            <input name="email" placeholder="Enter your Email" required="required" type="text"><br>
            <input value="Sign Up for our Newsletter" class="btn-cyan" type="submit">
          </div>
        </form>
      </div>
      <div class="col-xs-12 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading1">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">MakerCon</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="//makezine.com/category/maker-pro/" target="_blank">Maker Pro News</a></li>
                <li><a href="/past-events">Past Events</a></li>
                <li><a href="//makercon.no/" target="_blank">MakerCon Nordic</a></li>
                <li><a href="//help.makermedia.com/hc/en-us/categories/200354945-MakerCon" target="_blank">MakerCon FAQs</a></li>
                <li><a href="//www.slideshare.net/MakerCon?utm_campaign=profiletracking&utm_medium=sssite&utm_source=ssslideview" target="_blank">Slideshows</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading2">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Explore Making</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="//makezine.com/blog/" target="_blank">Make: News</a></li>
                <li><a href="//makerfaire.com" target="_blank">Maker Faire</a></li>
                <li><a href="//www.makershed.com" target="_blank">Maker Shed</a></li>
                <li><a href="/">MakerCon</a></li>
                <li><a href="//readerservices.makezine.com/mk/default.aspx?" target="_blank">Subscribe to Make:</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading3">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Our Company</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="//makermedia.com" target="_blank">About Us</a></li>
                <li><a href="//makermedia.com/work-with-us/advertising" target="_blank">Advertise with Us</a></li>
                <li><a href="//makermedia.com/work-with-us/job-openings" target="_blank">Careers</a></li>
                <li><a href="//help.makermedia.com/hc/en-us" target="_blank">Help</a></li>
                <li><a href="//makermedia.com/privacy" target="_blank">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End social-foot-mobile -->
  </div><!-- END container -->
  <div class="container">
    <?php echo make_copyright_footer(); ?>
  </div>
</footer><!-- END new-footer -->
</div>
<?php wp_footer(); ?>
<script async defer>
   jQuery(document).ready(function(){
      jQuery(".post-edit-link").addClass("button");
   });
</script>
</body>
</html>

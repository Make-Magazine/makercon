<?php
  /**
   * The Header for our theme.
   *
   * Displays all of the <head> section and everything up till <div id="content">
   *
   * @package makercon
   */
  ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_the_title(); ?> | MakerCon</title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:title" content="<?php echo get_the_title(); ?> | MakerCon" />
    <meta property="og:url" content="<?php echo the_permalink() ?>" />
    <meta property="og:site_name" content="MakerCon" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon-Logo-Intel-CiscoTM.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@MakerCon" />
    <meta name="twitter:creator" content="@MakerCon" />
    <meta name="twitter:title" content="<?php echo get_the_title(); ?> | MakerCon" />
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
    <meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon-Logo-Intel-CiscoTM.png" />
    <meta name="twitter:url" content="<?php echo the_permalink() ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox.js"></script>
    <!--script type="text/javascript">
      adroll_adv_id = "74UKLGM23VB4BDJQTIUZAB";
      adroll_pix_id = "NUGQMXVPEZDGDORWPOGG72";
      (function () {
      var oldonload = window.onload;
      window.onload = function(){
         __adroll_loaded=true;
         var scr = document.createElement("script");
         var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
         scr.setAttribute('async', 'true');
         scr.type = "text/javascript";
         scr.src = host + "/j/roundtrip.js";
         ((document.getElementsByTagName('head') || [null])[0] ||
          document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
         if(oldonload){oldonload()}};
      }());
    </script>
    <script language="javascript" type="text/javascript">
      function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
    </script>
    <script>
      function getCookie(name) {
          var dc = document.cookie; 
          var prefix = name + "=";
          var begin = dc.indexOf("; " + prefix);
          if (begin == -1) {
              begin = dc.indexOf(prefix);
              if (begin != 0) return null;
          } else {
              begin += 2;
              var end = document.cookie.indexOf(";", begin);
              if (end == -1) {
              end = dc.length;
              }
          }
          return unescape(dc.substring(begin + prefix.length, end));
      } 
      
      $(function() {
          if ( document.location.href.indexOf('campaign') > -1 ) {
                  var date = new Date();
                  date.setTime(date.getTime()+(60*24*60*60*1000));
                  date = date.toGMTString();
                  document.cookie="Makercon-Newsletter-signup=; expires=" + date + "; path=/";
          }
      });
      
      $(function() {
          var news_close = getCookie("Makercon-Newsletter-closed");
          var news_signup = getCookie("Makercon-Newsletter-signup");
      
          if ( news_signup == null ) {
            if ( news_close == null ) {
              $(".fancybox").fancybox({
                  openEffect  : 'none',
                  closeEffect : 'none',
                  autoSize : false,
                  width  : 465,
                  height  : 200,
                  afterLoad   : function() {
                      this.content = this.content.html();
                  }
              });
              // Launch fancyBox on first element
              $(".fancybox").eq(0).trigger('click');     
      
              $( ".newsletter-set-cookie" ).click(function() {
                  var date = new Date();
                  date.setTime(date.getTime()+(60*24*60*60*1000));
                  date = date.toGMTString();
                  document.cookie="Makercon-Newsletter-signup=; expires=" + date + "; path=/";
              });
      
              $( ".fancybox-close" ).click(function() {
                  var date = new Date();
                  date.setTime(date.getTime()+(7*24*60*60*1000));
                  date = date.toGMTString();
                  document.cookie="Makercon-Newsletter-closed=; expires=" + date + "; path=/";
              });
            }
          }
      });
    </script-->
    <!-- Facebook Conversion Code for MakerCon 2015 -->
    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6024736629236', {'value':'0.01','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024736629236&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <!-- End Facebook Conversion Code -->

    <!-- Facebook Conversion Code for MakerCon NY 2015 Web Clicks -->
    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6028487326758', {'value':'0.01','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6028487326758&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <!-- End Facebook track pixel -->

    <!-- NY 2015 Facebook Custom Audience Pixel Code -->
    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    _fbq.push(['addPixelId', '1668855776685079']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1668855776685079&amp;ev=PixelInitialized" /></noscript>
    <!-- End Facebook track pixel -->

    <script>
      var _prum = [['id', '53fcea2fabe53d341d4ae0eb'],
                  ['mark', 'firstbyte', (new Date()).getTime()]];
      (function() {
          var s = document.getElementsByTagName('script')[0]
            , p = document.createElement('script');
          p.async = 'async';
          p.src = '//rum-static.pingdom.net/prum.min.js';
          s.parentNode.insertBefore(p, s);
      })();
    </script>
    <script>
      dataLayer = [];
    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager  -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K54K72"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-K54K72');
    </script>
    <!-- End Google Tag Manager -->

    <!-- TOP BRAND BAR -->
    <div class="hidden-xs top-header-bar-brand">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-6 text-center">
            <p class="header-make-img"><a href="//makezine.com?utm_source=makercon.com&utm_medium=brand+bar&utm_campaign=explore+all+of+make" target="_blank">Explore all of <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/make_logo.png" alt="Make: Makezine Logo" /></a></p>
          </div>
          <div class="col-sm-3">
            <p class="header-sub-link pull-right"><a id="trigger-overlay" href="#">SUBSCRIBE </a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Header area -->
    <header class="container">
      <div class="row">

        <!-- LOGO & TAG LINE -->
        <div class="col-md-2 col-sm-3 col-xs-7 text-center">
          <a href="/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" class="header-logo img-responsive" />
            <h5 class="icon-tagline">By Makers for Makers</h5>
          </a>
        </div>

        <!-- MENUS -->
        <nav class="header-top-nav col-md-7 col-sm-9 col-xs-5">
          <div class="row">
            <a class="menu-bar visible-xs-block" data-toggle="collapse" href="#mc-menu">
              <span class="bars"></span>            
            </a> 
            <!-- Main Menu -->
            <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
            <!-- Mobile Menu -->
            <div class="hidden-sm hidden-md hidden-lg" id="mc-menu-container">
              <?php
                wp_nav_menu( array(
                    'menu'              => 'Mobile',
                    'theme_location'    => 'primary',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mc-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
              ?>
            </div>
          </div>
        </nav>

        <!-- SOCIAL MEDIA ICONS -->
        <div class="social-network-container col-md-3 hidden-sm hidden-xs text-center"> 
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
          <ul class="social-network social-circle">
              <li><a href="//www.facebook.com/MakerCon" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="//twitter.com/makercon" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="//www.pinterest.com/makemagazine/" class="icoPinterest" title="Pinterest"><i class="fa fa-pinterest-p" target="_blank"></i></a></li>
              <li><a href="//plus.google.com/explore/MakerCon" class="icoGoogle-plus" title="Google+"><i class="fa fa-google-plus" target="_blank"></i></a></li>
          </ul>
        </div>

      </div> <!-- row -->  
    </header>

    <!-- #masthead -->
    <div class="clearfix"></div>
    <div class="hidden-xs masthead-banner">
      <a href="/new-york-2015/videos">
        <img class="img-responsive" style="width:100%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-banner.png" alt="Event info banner" />
      </a>
    </div>

    <div class="container">
      <div id="content" class="site-content">
        <div class="fancybox" style="display:none;">
          <h3>Send Me Details About 2015 MakerCon!</h3>
          <form action="http://makermedia.createsend.com/t/r/s/ittlurh/" method="post" id="subForm">
            <div>
              <input name="cm-ittlurh-ittlurh" id="ittlurh-ittlurh" placeholder="Your E-mail" required="required" type="text"><br>
              <input value="Sign Me Up" class="btn-modal newsletter-set-cookie" id="newsletter-set-cookie" type="submit">
            </div>
          </form>
        </div>

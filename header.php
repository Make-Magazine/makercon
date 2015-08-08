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
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <meta name="description" content="MakerCon connects the individuals at the forefront of the maker movement and taps into the best thinking on how to make things and get them to market, from new technologies to manufacturing models to funding methods." />
    <meta property="og:title" content="<?php bloginfo('name'); ?> | <?php wp_title(); ?>" />
    <meta property="og:url" content="<?php echo the_permalink() ?>" />
    <meta property="og:site_name" content="MakerCon" />
    <meta property="og:description" content="MakerCon connects the individuals at the forefront of the maker movement and taps into the best thinking on how to make things and get them to market, from new technologies to manufacturing models to funding methods." />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon-Logo-Intel-CiscoTM.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@MakerCon" />
    <meta name="twitter:creator" content="@MakerCon" />
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> | <?php wp_title(); ?>" />
    <meta name="twitter:description" content="MakerCon connects the individuals at the forefront of the maker movement and taps into the best thinking on how to make things and get them to market, from new technologies to manufacturing models to funding methods." />
    <meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon-Logo-Intel-CiscoTM.png" />
    <meta name="twitter:url" content="<?php echo the_permalink() ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

    <!--div id="page" class="hfeed site container">
      <?php do_action( 'before' ); ?>
      <div class="row">
        <header id="masthead" class="site-header col-xs-12" role="banner">
          <?php if ( is_front_page() || is_home() ) : ?>
            <div class="col-md-2 col-lg-2 col-xl-2 hidden-sm hidden-xs"></div>
          <?php endif; ?>
            <nav class="navbar navbar-default col-xs-12 col-sm-12 <?php if ( is_front_page() || is_home() ) : ?>col-md-10 col-lg-10<?php endif; ?>" role="navigation">
              <div class="row">
                <div class="site-branding col-xs-8 col-sm-3 col-xs-offset-2 col-sm-offset-0 <?php if ( is_front_page() || is_home() ) : ?>hidden-md hidden-lg<?php endif; ?>">
                  <div class="row">
                    <a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a>
                  </div>
                </div>
                <div class="col-xs-2 hidden-sm hidden-md hidden-lg">
                  <div class="row">
                    <button type="button" class="navbar-toggle col-sm-1 col-xs-1 pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                </div>
                <div class="pull-right col-xs-12 col-sm-8 <?php if ( is_front_page() || is_home() ) : ?>col-md-12 col-lg-12<?php endif; ?>" id="site-navigation">
                  <div class="row hidden-xs">
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
                    </div>
                  <div class="row hidden-sm hidden-md hidden-lg">
                    <?php
                      wp_nav_menu( array(
                          'menu'              => 'Mobile',
                          'theme_location'    => 'primary',
                          'depth'             => 1,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                      ?>
                    </div>
                </div>
              </div>
            </nav>
        </header>
      </div>
    </div-->

    <!-- TOP INFO BAR -->
    <div class="hidden-xs top-header-bar-brand">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-6 text-center">
            <p><a href="//www.makershed.com/collections/most-popular" target="_blank">Shop Best Sellers at Maker Shed &rarr; Kits, Books, More!</a></p>
          </div>
          <div class="col-sm-3 text-center">
            <h6 class="header-sub-link"><a href="//readerservices.makezine.com/mk/" target="_blank">SUBSCRIBE TO <em class="red">MAKE</em>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/book.png" alt="Make magazine icon"></img></a></h6>
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
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
          <ul class="social-network social-circle">
              <li><a href="https://www.facebook.com/MakerCon" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/makercon" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="https://instagram.com/makemagazine/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram" target="_blank"></i></a></li>
              <li><a href="https://www.pinterest.com/makemagazine/" class="icoPinterest" title="Pinterest"><i class="fa fa-pinterest" target="_blank"></i></a></li>
          </ul>    
        </div>

      </div> <!-- row -->  
    </header>

    <!-- #masthead -->
    <div class="clearfix"></div>
    <div class="hidden-xs masthead-banner">
      <img class="img-responsive" style="width:100%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/full-background-banner.png" alt="Event info banner" />
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
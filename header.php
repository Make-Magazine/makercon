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
      <title><?php wp_title( '|', true, 'right' ); ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox.js"></script>
      
    <script type="text/javascript">
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


</script>

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

      <!-- Google Tag Manager Maker Shed -->
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WR8NLB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-WR8NLB');
      </script>
      <!-- End Google Tag Manager -->

      <!-- Google Tag Manager  -->
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K54K72"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-K54K72');</script>
      <!-- End Google Tag Manager -->

      <div id="page" class="hfeed site">
         <?php do_action( 'before' ); ?>
         <header id="masthead" class="site-header container" role="banner">
            <div class="row">
               <div class="site-branding  hidden-xs hidden-sm hidden-md col-lg-2">
                  <?php if ( is_front_page() || is_home() ) : ?>
                  <?php else : ?>
                  <h1 title="MakerCon - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" width="360"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h1>
                  <?php endif; ?>
               </div>
               <nav class="navbar navbar-default  col-xs-12 col-sm-12 col-md-12 col-lg-8" role="navigation">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="col-xs-12 col-sm-3 col-md-3 hidden-lg">
                         <div class="site-branding col-xs-9 col-sm-12 hidden-md hidden-lg">
                             <h1 title="MakerCon - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h1>
                         </div>
                        <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div class="pull-right col-xs-12 col-sm-9 col-md-12 col-lg-12" id="site-navigation">
                        <?php
                           wp_nav_menu( array(
                               'menu'              => 'primary',
                               'theme_location'    => 'primary',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'collapse navbar-collapse',
                           'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'nav navbar-nav',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                           ?>
                     </div>
               </nav>
               <!-- #site-navigation -->
               <div class="social pull-right hidden-xs hidden-sm hidden-md col-lg-2">
                  <a class="sprite-facebook col-md-3 hidden-xs col-sm-2 col-lg-3" href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttp%253A%252F%252Fmakercon.com%252F%26t%3DHome&display=popup" target="_blank"></a>
                  <a class="sprite-twitter col-md-3 hidden-xs col-sm-2 col-lg-3" href="https://twitter.com/intent/tweet?text=Home&url=http%3A%2F%2Fmakercon.com%2F" target="_blank"></a>
                  <a class="sprite-google-plus col-md-3 hidden-xs col-sm-2 col-lg-3" href="https://plus.google.com/share?url=http%3A%2F%2Fmakercon.com%2F" target="_blank"></a>
                  <a class="sprite-linkedin col-md-3 hidden-xs col-sm-2 col-lg-3" href="https://www.linkedin.com/cws/share?isFramed=false&url=http%3A%2F%2Fmakercon%2Ecom%2F&token=" target="_blank"></a>
               </div>
            </div>
         </header>
      </div>
      <!-- #masthead -->
      <?php if ( is_front_page() || is_home() ) : ?>
      <div class="clearfix"></div>
      <div class="slider-wrap row">
         <!-- desktop logo -->
         <div class="container">
            <div class="col-md-4 col-lg-4 hidden-sm hidden-xs text-center">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-rocket-sponsor-intel-02.png" class="rocket img-responsive">
            </div>
            <div class="col-md-8 text-center slider">
               <?=do_shortcode('[home-slider]');?>
            </div>
         </div>
      </div>
      <?php endif; ?>
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

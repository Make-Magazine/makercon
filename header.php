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
    <script type="text/javascript" src="//use.typekit.net/brg6nyz.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WR8NLB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WR8NLB');</script>
	<!-- End Google Tag Manager -->
    <div id="page" class="hfeed site container">
      <?php do_action( 'before' ); ?>
      <header id="masthead" class="site-header" role="banner">
        <div class="row">
          <div class="site-branding col-md-3 col-xs-3 col-sm-3 col-lg-3">
            <?php if ( is_front_page() || is_home() ) : ?>
            <?php else : ?>
            <h1 title="MakerCon - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" width="360" height="auto"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h1>
            <?php endif; ?>
          </div>
          <nav id="site-navigation" class="navbar navbar-default col-md-7 col-xs-9 col-sm-7 col-lg-7" role="navigation">
            <?php wp_nav_menu( array( 
            'theme_location' => 'primary', 
            'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav pull-right', 
            'walker' => new Bootstrap_Walker_Nav_Menu() ) ); ?>
          </nav>
          <!-- #site-navigation -->
          <div class="social col-md-2 hidden-xs col-sm-2 col-lg-2">
              <a class="sprite-facebook" href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttp%253A%252F%252Fmakercon.com%252F%26t%3DHome&display=popup" target="_blank"></a>
              <a class="sprite-twitter" href="https://twitter.com/intent/tweet?text=Home&url=http%3A%2F%2Fmakercon.com%2F" target="_blank"></a>
              <a class="sprite-google-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fmakercon.com%2F" target="_blank"></a>
              <a class="sprite-linkedin" href="https://www.linkedin.com/cws/share?isFramed=false&url=http%3A%2F%2Fmakercon%2Ecom%2F&token=" target="_blank"></a>
          </div>
        </div>
      </header>
      </div>
      <!-- #masthead -->
      <?php if ( is_front_page() || is_home() ) : ?>
    <div class="clearfix"></div>
   <div class="slider-wrap row"><!-- desktop logo -->
            <div class="container">

        <div class="col-md-4 col-lg-4 hidden-sm hidden-xs text-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-rocket-sponsor.png" class="rocket img-responsive">
        </div>
        <div class="col-md-8 text-center slider">
                    <?=do_shortcode('[home-slider]');?>
          </div>
        </div>

    </div>

    <?php endif; ?>
        <div class="container">

    <div id="content" class="site-content row">

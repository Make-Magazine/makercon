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

<script type="text/javascript" src="//use.typekit.net/rya4lcn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header row" role="banner">
		<?php if ( ! is_front_page() ) : ?>
			<div class="blue-bar"></div>
		<?php endif; ?>
		<div class="site-branding col-md-4">
			<?php if ( is_front_page() || is_home() ) : ?>
				<h1 title="Make Magazine - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-01-2x.png" width="301" alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h1>
			<?php else : ?>
				<h2 title="Make Magazine - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-01-2x.png" width="301"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h2>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation nav pull-right col-md-8" role="navigation">
			
			<div class="social-links">
				<a href="#"><span class="social social-twitter"></span></a>
				<a href="#"><span class="social social-facebook"></span></a>
				<a href="#"><span class="social social-google"></span></a>
				<a href="#"><span class="social social-linkedin"></span></a>
			</div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav pull-right' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>
</div>
<div class="photo-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Join us for <span>MakerCon</span>!</h1>
				<h2>The impact of Makers and Making on:</h2>
				<h2>Education, the Economy, and Emerging Markets</h2>
			</div>
		</div>
	</div>
</div>
<div id="" class="hfeed site container">
	<?php endif; ?>


	<div id="content" class="site-content row">
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
		<div class="site-branding col-md-4">
			<?php if ( is_front_page() || is_home() ) : ?>

			<?php else : ?>
				<h2 title="Make Magazine - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" width="360" height="auto"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h2>
			<?php endif; ?>
		</div>


		<nav id="site-navigation" class="navbar navbar-default col-md-8" role="navigation">

			<div class="social">
				<?php

				if ( function_exists( 'sharing_display' ) ) {
				    sharing_display( '', true );
				}

				if ( class_exists( 'Jetpack_Likes' ) ) {
				    $custom_likes = new Jetpack_Likes;
				    echo $custom_likes->post_likes( '' );
				}
				?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav pull-right', 'walker' => new Bootstrap_Walker_Nav_Menu() ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>

</div>

<div class="photo-bar">
	<div class="">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon_Header_NY2014_04.gif" alt="MakerCon New York 2014">
			</div>
		</div>
	</div>

</div>
<div id="" class="hfeed site container">
	<?php endif; ?>


	<div id="content" class="site-content row">

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
				<h2 title="Make Magazine - <?php echo bloginfo( 'description' ); ?>"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/makercon-logo-02-1x.png" width="360" height="auto"  alt="Tech-savvy DIY Enthusiasts Innovative Projects and Ideas" /></a></h2>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation nav pull-right col-md-8" role="navigation">

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

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav pull-right' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) : ?>

</div>

<div class="photo-bar">
	<div class="">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MakerCon_Header_v4.gif" alt="MakerCon 2014">
			</div>
		</div>
	</div>
	<section class="call-box container">
		<div class="row">
			<div class="col-md-4">
				<h2>Call for Speakers</h2>
				<h4>Come speak at MakerCon</h4>
				<p class="padme"><a class="button button-red" href="<?php echo home_url( '/propose-a-session/' ); ?>">Register to Speak</a></p>
			</div>
			<div class="col-md-4">
				<h2>Register for MakerCon</h2>
				<h4>Join us in the Maker revolution</h4>
				<p class="padme"><a class="button button-red" href="<?php echo home_url( '/attend/' ); ?>">Register</a></p>
			</div>
			<div class="col-md-4">

				<h2>Sign Up for Updates</h2>
				<h4>Be notified of MakerCon updates</h4>

				<!-- Button trigger modal -->
				<p class="padme"><button class="button button-red" data-toggle="modal" data-target="#subscribe-modal">Sign Up</button></p>

				<!-- Modal -->

			</div>
		</div>
	</section><!-- .call-box -->
</div>
<!-- Add our subscription modal here. Nesting the modal can lead to unintended displays... -->
<div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Register for MakerCon</h4>
			</div>
			<div class="modal-body">
				<form class="form" role="form" action="http://newsletter.makezine.com/t/r/s/ttlusi/" method="post">
					<div class="form-group">
						<label class="sr-only" for="fieldName">Name</label>
						<input type="text" name="cm-name" class="form-control" id="fieldName" placeholder="Name" required>
					</div>
					<div class="form-group">
						<label class="sr-only" for="fieldEmail">Email address</label>
						<input type="email" name="cm-ttlusi-ttlusi" class="form-control" id="fieldEmail" placeholder="Enter email" required>
					</div>
					<button type="submit" class="btn btn-primary">Subscribe</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="" class="hfeed site container">
	<?php endif; ?>


	<div id="content" class="site-content row">

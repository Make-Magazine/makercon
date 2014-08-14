<?php
  /**
   * The template used for displaying page speakers within the loop
   *
   * @package makercon
   */

	global $wp_post_speaker_ids;
	global $wp_speaker_event_slug;

	if(!isset($wp_speaker_event_slug)) $wp_speaker_event_slug = get_post_meta($post->ID, 'speaker_event', true );
	if(!isset($wp_post_speaker_ids)) {
	$wp_speaker_posts = get_posts(array('post_type'=>'speaker','event' => $wp_speaker_event_slug, 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));
	} else {
		if(!is_array($wp_post_speaker_ids)) $wp_post_speaker_ids = explode(',',$wp_post_speaker_ids);
		$wp_speaker_posts = get_posts(array('post_type'=>'speaker','event' => $wp_speaker_event_slug, 'orderby' => 'title', 'post__in' => $wp_post_speaker_ids,'order' => 'ASC', 'posts_per_page' => -1 ));
	}
	
	foreach($wp_speaker_posts as $speaker_post) {
		setup_postdata($speaker_post); ?>
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php 
			if(get_post_meta($speaker_post->ID, '_thumbnail_id', true ) !== false) {
				echo get_the_post_thumbnail($speaker_post->ID, 'small-thumbnail' );
			} ?></div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="lead"><h3><?php echo($speaker_post->post_title); ?></h3></div>
			<?php echo($speaker_post->post_content); ?><br />
			<?php 
				$_twitter = get_post_meta($speaker_post->ID, 'twitter', true );
				if(($_twitter !== false) && ($_twitter != '')) {
						$_twitter_pos = strpos($_twitter, '@');
						$_twitter = ($_twitter_pos !== FALSE) ? substr($_twitter, 1): $_twitter;
						?><a href="https://twitter.com/<?php echo($_twitter); ?>" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @<?php echo($_twitter); ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><br><?php
				} ?>
			<?php 
				$_website = get_post_meta($speaker_post->ID, 'website', true );
				if(($_website !== false) && ($_website != '')) {
					echo("<b><a href=\"{$_website}\" target=\"_blank\">Website</a></b><br />\n");
				} ?>
			</div>
		</div><!-- speaker-<?php echo($speaker_post->ID); ?> --><hr />
		<?php

	}
?>

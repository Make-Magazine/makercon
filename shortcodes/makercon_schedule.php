<?php
add_shortcode('makercon_schedule', 'makercon_schedule_shortcode');

function makercon_schedule_shortcode($atts){
	extract(shortcode_atts(array(
	'track' => 'keynote',
	'event' => 'makercon-ny-2014'
	), $atts));

	$wp_sessions_posts = get_posts(array('post_type'=>'session',
		'tax_query' => array('relation' => 'AND',
			array('taxonomy' => 'event', 'field' => 'slug', 'terms' => array($event)),
			array('taxonomy' => 'track', 'field' => 'slug', 'terms' => array($track))
		),
		'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1 ));

	ob_start();
	?>
	<div class="sessions-list-area">
	<?php

		foreach($wp_sessions_posts as $session_post) {
			setup_postdata($session_post); ?>
			<div class="row">
				<div class="track-info">
					<p>PARTICULAR TRACK DESCRIPTION HERE (dynamic)</p>
				</div>
			</div>
		<div class="row sessions-wrap">
		  <div class="col-md-12 session">
		    <h2 class="session-title"><a href="<?php echo(get_post_permalink($session_post->ID)); ?>">
				<?php echo(esc_html($session_post->post_title)); ?></a></h2>
		    <p class="session-author"><a href="SESSION AUTHOR LINK">SESSION AUTHOR NAME</a></p>
		  </div>
		</div> <?php } ?>
	</div><?php
	$output_string = ob_get_contents();
	ob_end_clean();
	return $output_string;

}

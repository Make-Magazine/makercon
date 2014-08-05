<?php
  add_shortcode('home-slider', 'home_slider_shortcode');
  // Enables us to use a single shortcode as long as there is only one slider per site -- I mean, who uses two, amirite?
  function home_slider_shortcode() {
    $args = array('post_type' => 'ml-slider');
    $slider = get_posts($args);
    echo do_shortcode('[metaslider id='.$slider[0]->ID.']');
  }

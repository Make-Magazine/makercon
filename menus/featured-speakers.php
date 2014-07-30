<?php

add_action('admin_menu', 'featured_speakers_order');

function featured_speakers_order() {
  add_submenu_page('edit.php?post_type=speakers', 'Featured Order', 'Featured Order', 'manage_options', 'featured-speakers-order', 'featured_speakers_order_callback');
}

function featured_speakers_order_callback() {

  if (isset($_POST["featured-speaker-1"])) {
    update_option("featured-speaker-1", $_POST["featured-speaker-1"]);
  }
  if (isset($_POST["featured-speaker-2"])) {
    update_option("featured-speaker-2", $_POST["featured-speaker-2"]);
  }
  if (isset($_POST["featured-speaker-3"])) {
    update_option("featured-speaker-3", $_POST["featured-speaker-3"]);
  }
  if (isset($_POST["featured-speaker-4"])) {
    update_option("featured-speaker-4", $_POST["featured-speaker-4"]);
  }

  $featured_speaker_1 = get_option("featured-speaker-1");
  $featured_speaker_2 = get_option("featured-speaker-2");
  $featured_speaker_3 = get_option("featured-speaker-3");
  $featured_speaker_4 = get_option("featured-speaker-4");

  echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
  echo '<h2>Featured Speakers Order</h2>';

  $speakers = new WP_Query('post_type=speakers');
  ?>
  <form method="POST" action="">
    <table>
      <tr>
         <td>Speaker #1</td>
         <td>
          <select name="featured-speaker-1">
            <?php while ( $speakers->have_posts() ) : $speakers->the_post(); ?>
              <option value="<?php echo $speakers->post->ID ?>" <?php if($speakers->post->ID == $featured_speaker_1) echo 'selected="selected"'; ?> ><?php the_title(); ?></option>
            <?php endwhile; ?>
          </select>
         </td>
      </tr>
      <tr>
         <td>Speaker #2</td>
         <td>
          <select name="featured-speaker-2">
            <?php while ( $speakers->have_posts() ) : $speakers->the_post(); ?>
              <option value="<?php echo $speakers->post->ID ?>" <?php if($speakers->post->ID == $featured_speaker_2) echo 'selected="selected"'; ?> ><?php the_title(); ?></option>
            <?php endwhile; ?>
          </select>
         </td>
      </tr>
      <tr>
         <td>Speaker #3</td>
         <td>
          <select name="featured-speaker-3">
            <?php while ( $speakers->have_posts() ) : $speakers->the_post(); ?>
              <option value="<?php $speakers->post->ID ?>" <?php if($speakers->post->ID == $featured_speaker_3) echo 'selected="selected"'; ?> ><?php the_title(); ?></option>
            <?php endwhile; ?>
          </select>
         </td>
       </tr>
       <tr>
         <td>Speaker #4</td>
         <td>
          <select name="featured-speaker-4">
            <?php while ( $speakers->have_posts() ) : $speakers->the_post(); ?>
              <option value="<?php echo $speakers->post->ID ?>" <?php if($speakers->post->ID == $featured_speaker_4) echo 'selected="selected"'; ?> ><?php the_title(); ?></option>
            <?php endwhile; ?>
          </select>
         </td>
      </tr>
    </table>
    <p>
      <input type="submit" value="Save settings" class="button-primary"/>
    </p>
  </form>
  <?php
  echo '</div>';
}

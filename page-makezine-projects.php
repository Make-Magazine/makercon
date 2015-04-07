<?php
/**
* Template Name: Makezine Projects Feed Template
*
* @package    makercon
* @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
  <div class="row highlights">
    <div class="col-xs-12">
      <h2>Makezine Project Feed</h2>
    </div>

    <div class="col-xs-12">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <?php
        //grabs our post thumbnail image
        function get_first_image_url($html) {
        if (preg_match('/<img.+?src="(.+?)"/', $html, $matches)) {
        return $matches[1];
        }
        }
        ?>
        <?php
        //shortens description
        function shorten($string, $length) {
        $suffix = '&hellip;';
        $short_desc = trim(str_replace(array("\r", "\n", "\t"), ' ', strip_tags($string)));
        $desc = trim(substr($short_desc, 0, $length));
        $lastchar = substr($desc, -1, 1);
        if ($lastchar == '.' || $lastchar == '!' || $lastchar == '?')
        $suffix = '';
        $desc .= $suffix;
        return $desc;
        }
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-6 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <div class="">
            <h3 class="media-heading">
            <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
            </h3>
            <small><?php echo $item -> get_date('F j Y'); ?></small>
            <p><?php echo shorten($item -> get_description(), '50'); ?></p>
          </div>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=2');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=2');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=3');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=3');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=4');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=4');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=5');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=5');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=6');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=6');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=7');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=7');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=8');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=8');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=9');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=9');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=10');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=10');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=11');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=11');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=12');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=12');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=13');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=13');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=14');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=14');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=15');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=15');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=16');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=16');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=17');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=17');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=18');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=18');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=19');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=19');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=20');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=20');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=21');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=21');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=22');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=22');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=23');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=23');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=24');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=24');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=25');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=25');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=26');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=26');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=27');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=27');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=28');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=28');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=29');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=29');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=30');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=30');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=31');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=31');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=32');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=32');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=33');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=33');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=34');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=34');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=35');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=35');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=36');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=36');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=37');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=37');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=38');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=38');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=39');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=39');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=40');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=40');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=41');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=41');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=42');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=42');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=43');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=43');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=44');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=44');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=45');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=45');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=46');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=46');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=47');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=47');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=48');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=48');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=49');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=49');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=50');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=50');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=51');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=51');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=52');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=52');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=53');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=53');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=54');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=54');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=55');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=55');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=56');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=56');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=57');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=57');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=58');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=58');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=59');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=59');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=60');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=60');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=61');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=61');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=62');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=62');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=63');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=63');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=64');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=64');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=65');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=65');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=66');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=66');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=67');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=67');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=68');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=68');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=69');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=69');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=70');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=70');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=71');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=71');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=72');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=72');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=73');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=73');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=74');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=74');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=75');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=75');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=76');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=76');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=77');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=77');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=78');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=78');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=79');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=79');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=80');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=80');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=81');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=81');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=82');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=82');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=83');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=83');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=84');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=84');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=85');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=85');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=86');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=86');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=87');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=87');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=88');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=88');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=89');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=89');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=90');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=90');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=91');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=91');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=92');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=92');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=93');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=93');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=94');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=94');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=95');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=95');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=96');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=96');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=97');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=97');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=98');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=98');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=99');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=99');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=100');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=100');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=101');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=101');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=102');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=102');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=103');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=103');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=104');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=104');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=105');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=105');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=106');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=106');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=107');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=107');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=108');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=108');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=109');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=109');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=110');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=110');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=111');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=111');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=112');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=112');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=113');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=113');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=114');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=114');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=115');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=115');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=116');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=116');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=117');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=117');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=118');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=118');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=119');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=119');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=120');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=120');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=121');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=121');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=122');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=122');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=123');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=123');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=124');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=124');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=125');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=125');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=126');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=126');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=127');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=127');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=128');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=128');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=129');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=129');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=130');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=130');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=131');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=131');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=132');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=132');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=133');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=133');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=134');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=134');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=135');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=135');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=136');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=136');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=137');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=137');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=138');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=138');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=139');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=139');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=140');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=140');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=141');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=141');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=142');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=142');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=143');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=143');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=144');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=144');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=145');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=145');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=146');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=146');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=147');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=147');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=148');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=148');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=149');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=149');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=150');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=150');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=151');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=151');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=152');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=152');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=153');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=153');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=154');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=154');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=155');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=155');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=156');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=156');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=157');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=157');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=158');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=158');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=159');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=159');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=160');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=160');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=161');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=161');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=162');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=162');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=163');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=163');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=164');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=164');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=165');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=165');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=166');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=166');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=167');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=167');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=168');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=168');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=169');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=169');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=170');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=170');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=171');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=171');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=172');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=172');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=173');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=173');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=174');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=174');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=175');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=175');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=176');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=176');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=177');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=177');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=178');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=178');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=179');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=179');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=180');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=180');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=181');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=181');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=182');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=182');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=183');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=183');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=184');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=184');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=185');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=185');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=186');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=186');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=187');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=187');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=188');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=188');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=189');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=189');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=190');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=190');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=191');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=191');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=192');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=192');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=193');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=193');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=194');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=194');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  

    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=195');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=195');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=196');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=196');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=197');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=197');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=198');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=198');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=199');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=199');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=200');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(0, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
    <div class="col-xs-12" style="margin-top: 15px;">
      <div class="row">
        <?php
        $rss = fetch_feed('http://makezine.com/projects/feed/?paged=200');
        if (!is_wp_error($rss)) :
        $maxitems = $rss -> get_item_quantity(5); //gets latest 10 items This can be changed to suit your requirements
        $rss_items = $rss -> get_items(5, $maxitems);
        endif;
        ?>
        <!--start of displaying our feeds-->
        <?php
        if ($maxitems == 0) echo '<li>No items.</li>';
        else foreach ( $rss_items as $item ) :
        ?>
        <div class="col-xs-5 col-sm-2" style="margin-right: 38px;">
          <a class="mkpro-feed-image" href="<?php echo esc_url($item -> get_permalink()); ?>" target="_blank">
            <?php echo '<img class="img-responsive" src="' . get_first_image_url($item -> get_content()) . '" alt="MakerPro post featured image" />'; ?>
          </a>
          <h3 class="media-heading">
          <a href='<?php echo esc_url($item -> get_permalink()); ?>' title='<?php echo esc_html($item -> get_title()); ?>' target="_blank"> <?php echo esc_html($item -> get_title()); ?></a>
          </h3>
          <small><?php echo $item -> get_date('F j Y'); ?></small>
          <p><?php echo shorten($item -> get_description(), '50'); ?></p>
        </li>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  
  </div>
</article>
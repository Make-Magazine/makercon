<?php
/**
 * makercon functions and definitions
 *
 * @package makercon
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
  $content_width = 640; /* pixels */
}

if ( ! function_exists( 'makercon_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function makercon_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on makercon, use a find and replace
   * to change 'makercon' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'makercon', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'makercon' ),
    'pagetab' => __('Page Tab Menu', 'makercon' )
  ) );

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'makercon_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  // Enable support for HTML5 markup.
  add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );

  // Add image size for speakers
  add_image_size( 'makercon-thumbnail', 270, 270, true );

  add_image_size( 'small-thumbnail', 210, 210, true );
}
endif; // makercon_setup
add_action( 'after_setup_theme', 'makercon_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function makercon_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'makercon' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'makercon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function makercon_scripts() {
  wp_enqueue_style( 'makercon-bootstrap', get_stylesheet_directory_uri() . '/css/style.css' );
  wp_enqueue_style( 'makercon-fonts', get_stylesheet_directory_uri() . '/css/fonts.css' );

  // Drop the original CSS.
  // wp_enqueue_style( 'makercon-style', get_stylesheet_uri() );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'common-files', get_template_directory_uri() . '/js/common.js', array(), '20140820-1', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'makercon_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

//boostrap walker for navigation';
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

//boostrap walker for navigation';
require get_template_directory() . '/inc/tab-menu-walker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Move Jetpack share this location
 */

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );


/**
 * Load Gravity Forms Helper
 */
require get_template_directory() . '/inc/gravity-forms-helper/gravity-forms-helper.php';

/**
 * Load Speaker Post Type
 */

require get_template_directory() . '/post-types/speaker.php';


require get_template_directory() . '/menus/featured-speakers.php';

/**
 * Load Session Post Type
 */

require get_template_directory() . '/post-types/session.php';

/**
 * Load Company Post Type
 */

require get_template_directory() . '/post-types/company.php';

/**
 * Load Track Taxonomy
 */
require get_template_directory() . '/taxonomies/track.php';

/**
 * Load Event Taxonomy
 */
require get_template_directory() . '/taxonomies/event.php';

/**
 * Load Location Taxonomy
 */
require get_template_directory() . '/taxonomies/location.php';

/**
 * Load Time Taxonomy(Sessions)
 */
require get_template_directory() . '/taxonomies/time.php';

/**
 * Load Day Taxonomy(Sessions)
 */
require get_template_directory() . '/taxonomies/day.php';


/**
 * Load Advanced Custom Fields
 */
require get_template_directory() . '/inc/advanced-custom-fields/acf.php';

/**
 * Load Advanced Custom Fields
 */
require get_template_directory() . '/inc/acf-field-date-time-picker/acf-date_time_picker.php';

define( 'ACF_LITE', false );

/**
 * Load Home Slider
 */

require get_template_directory() . '/shortcodes/home-slider.php';

/**
 * Makecon_Schedule Shortcode
 */

require get_template_directory() . '/shortcodes/makercon_schedule.php';

/**
 * Makecon_Schedule Shortcode
 */
require get_template_directory() . '/shortcodes/makercon_sessions.php';

// Load the default fields.

// -- set post_type to alien - just in case 08.06.14

if( function_exists( "register_field_group" ) ) {
  register_field_group( array(
    'id' => 'acf_session-schedule',
    'title' => 'Session Schedule',
    'fields' => array(
      array(
        'key' => 'field_5335f93d5b09e',
        'label' => 'Start Time',
        'name' => 'start_time',
        'type' => 'date_time_picker',
        'show_date' => 'true',
        'date_format' => 'm/d/y',
        'time_format' => 'h:mm tt',
        'show_week_number' => 'false',
        'picker' => 'select',
        'save_as_timestamp' => 'true',
        'get_as_timestamp' => 'false',
      ),
      array(
        'key' => 'field_5335faedf0e3a',
        'label' => 'End Time',
        'name' => 'end_time',
        'type' => 'date_time_picker',
        'show_date' => 'true',
        'date_format' => 'm/d/y',
        'time_format' => 'h:mm tt',
        'show_week_number' => 'false',
        'picker' => 'select',
        'save_as_timestamp' => 'true',
        'get_as_timestamp' => 'false',
      ),
      array(
        'key' => 'field_53593fd8c4083',
        'label' => 'Room',
        'name' => 'room',
        'type' => 'radio',
        'choices' => array (
          'Auditorium' => 'Auditorium',
          'Room 102/103' => 'Room 102/103',
          'Room 104' => 'Room 104',
          'Room 105' => 'Room 105',
          'Room 202/203' => 'Room 202/203',
        ),
        'other_choice' => 1,
        'save_other_choice' => 1,
        'default_value' => '',
        'layout' => 'vertical',
      ),
      array(
        'key' => 'field_535946f7fda9c',
        'label' => 'Session Title Override',
        'name' => 'session_title_override',
        'type' => 'true_false',
        'message' => 'Override post title with session title',
        'default_value' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'alien',
          'order_no' => 0,
          'group_no' => 0,
        )
      ),
    ),
    'options' => array(
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array(
      ),
    ),
    'menu_order' => 0,
  ));
}


function add_google_analytics() { ?>

  <script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51157-24', 'makercon.com');
    ga('send', 'pageview', {
 	'page': location.pathname + location.search  + location.hash
	});

  </script>
<?php }

add_filter('wp_head', 'add_google_analytics');

function fb_home_image( $tags ) {
    if ( is_home() || is_front_page() ) {
        // Remove the default blank image added by Jetpack
        unset( $tags['og:image'] );
 
        $fb_home_img = 'http://makercon.com/wp-content/themes/makercon/img/makercon-logo-01.gif';
        $tags['og:image'] = esc_url( $fb_home_img );
    }
    return $tags;
}
add_filter( 'jetpack_open_graph_tags', 'fb_home_image' );

/**
 * Modal Window Builder
 */
function make_modal_builder( $atts, $content = null ) {

  extract( shortcode_atts( array(
    'launch'  => 'Launch Window',
    'title'   => 'Modal Title',
    'btn_class' => '',
    'embed' => ''
  ), $atts ) );

  $number = mt_rand();
  $output = '<a class="btn  ' . esc_attr( $btn_class ) . '" data-toggle="modal" href="#modal-' . $number . '">' . esc_html( $launch ) . '</a>';
  $output .= '<div id="modal-' . $number . '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
  $output .= '  <div class="modal-dialog">';
  $output .= '  <div class="modal-content">';
  $output .= '  <div class="modal-header">';
  $output .= '    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
  $output .= '    <h3>' . esc_html( $title ) . '</h3>';
  $output .= '  </div>';
  $output .= '  <div class="modal-body">';
  if ( wpcom_vip_is_valid_domain( $embed,  array('fora.tv', 'ustream.com', 'ustream.tv' ) ) ) {
    $output .= '<iframe src="' . esc_url( $embed ) . '" width="530" height="320" frameborder="0"></iframe>';
  } else {
    $output .= ( !empty( $embed ) ) ? wpcom_vip_wp_oembed_get( esc_url( $embed ), array( 'width' => 530 ) ) : '';
  }
  $output .=      wp_kses_post( $content );
  $output .= '  </div>';
  $output .= '  <div class="modal-footer">';
  $output .= '    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>';
  $output .= '  </div>';
  $output .= '</div>';
  $output .= '</div>';
  $output .= '</div>';


  return $output;
}
add_shortcode( 'modal', 'make_modal_builder' );

// Removing coment-reply .js

function clean_header(){
  wp_deregister_script( 'comment-reply' );
         }
add_action('init','clean_header');

// Remove Jetpack CSS
function remove_jetpack_styles(){
wp_deregister_style('AtD_style'); // After the Deadline
wp_deregister_style('jetpack-carousel'); // Carousel
wp_deregister_style('grunion.css'); // Grunion contact form
wp_deregister_style('the-neverending-homepage'); // Infinite Scroll
wp_deregister_style('infinity-twentyten'); // Infinite Scroll - Twentyten Theme
wp_deregister_style('infinity-twentyeleven'); // Infinite Scroll - Twentyeleven Theme
wp_deregister_style('infinity-twentytwelve'); // Infinite Scroll - Twentytwelve Theme
wp_deregister_style('noticons'); // Notes
wp_deregister_style('post-by-email'); // Post by Email
wp_deregister_style('publicize'); // Publicize
wp_deregister_style('sharedaddy'); // Sharedaddy
wp_deregister_style('sharing'); // Sharedaddy Sharing
wp_deregister_style('stats_reports_css'); // Stats
wp_deregister_style('jetpack-widgets'); // Widgets
}
add_action('wp_print_styles', 'remove_jetpack_styles');

<?php

// BEGIN - Load jQuery for thomaswicker.com

function my_init() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.24', true);
		wp_enqueue_script('jquery');

		// load a JS file from my theme: js/theme.js
		wp_enqueue_script('my_script', get_bloginfo('template_url') . '/js/theme.js', array('jquery'), '1.0', true);
	}
}
add_action('init', 'my_init');

add_filter( 'jetpack_enable_open_graph', '__return_false' );

// BEGIN LOAD THEME CSS

function theme_styles() {
  wp_enqueue_style( 'main1', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/components-font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'foundation-motion', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.css' );
  wp_enqueue_style( 'lightbox2', get_template_directory_uri() . '/bower_components/lightbox2/dist/css/lightbox.min.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/application.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// BEGIN - LOAD THEME JS

add_action( 'wp_enqueue_scripts', 'theme_js' );

function theme_js() {
    wp_register_script( 'motion-ui', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.js',array('jquery') );
    wp_register_script( 'foundationjs', get_template_directory_uri() . '/js/foundation.min.js',array('jquery') );
    wp_register_script( 'lightboxjs', get_template_directory_uri() . '/bower_components/lightbox2/dist/js/lightbox.min.js',array('jquery') );
    wp_register_script( 'masonryjs', get_template_directory_uri() . '/bower_components/masonry/dist/masonry.pkgd.min.js',array('jquery') );
    wp_register_script( 'appjs', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

    wp_enqueue_script( 'foundationjs' );
    wp_enqueue_script( 'motion-ui' );
    wp_enqueue_script( 'lightboxjs' );
    wp_enqueue_script( 'masonryjs' );
    wp_enqueue_script( 'appjs' );
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }
}


function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'excerpt-thumb', 0, 100, false );
    // define excerpt-thumb size here
    // in the example: 100px wide, height adjusts automatically, no cropping
}


// Changing excerpt length for posts on home page...
function new_excerpt_length($length) {
  return 150;
    // define length of excerpt in number of words
}
add_filter('excerpt_length', 'new_excerpt_length');




// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'lastfm',
    'id'   => 'thomaswicker-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'instagram',
    'id'   => 'instagram-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'alt-sidebar',
    'id'   => 'alt-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}
function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'culinary'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );


function wpse20150812_jetpack_publicize_support() {
    add_post_type_support( 'culinary', 'publicize' );
}
add_action('init', 'wpse20150812_jetpack_publicize_support');

add_action( 'pre_get_posts', 'wpse_242473_add_post_type_to_home' );

// code below adds portfolio_item to front page loop
function wpse_242473_add_post_type_to_home( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'portfolio_item') );
    }
}

?>

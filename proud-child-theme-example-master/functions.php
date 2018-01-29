<?php
/**
 * Proud Theme Starter
 *
 * This is the functions.php for the ProudCity subtheme
 */
define('PROUD_CHILD_THEME_ADVANCED', true);

/**
 * Add child theme asssets
 */
function add_assets() {

  // In advanced mode
  if (PROUD_CHILD_THEME_ADVANCED) {
    global $wp_styles;

    // Dequeue parent css
    wp_dequeue_style( 'proud-vendor/css' );
    wp_dequeue_style( 'proud/css' );
    wp_dequeue_style( 'proud/ie9-and-below' );

    // Enqueue our css
    wp_enqueue_style( 'proud-child/css',
        get_stylesheet_directory_uri() . '/dist/styles/style.css'
    );
    wp_enqueue_style( 'proud-child/ie9-and-below',
        get_stylesheet_directory_uri() . '/dist/styles/ie9-and-below.css'
    );
    $wp_styles->add_data( 'proud-child/ie9-and-below', 'conditional', 'lte IE 9' );
  }
  // Simple css changes
  else {
    wp_enqueue_style( 'proud-child/css',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'proud-vendor/css', 'proud/css' )
    );
  }
  // Optional: override default fonts
  //wp_enqueue_style('external-fonts', '//fonts.googleapis.com/css?family=Lato:400,900,700,300');
}
add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\\add_assets', 101);
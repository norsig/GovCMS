<?php

/**
 * Enqueue scripts and styles.
 */
function benjamin_scripts() {

    if(is_admin())
        return;

    $benjamin_color_scheme = get_theme_mod('color_scheme_setting', 'standard');

    $benjamin_color_scheme = $benjamin_color_scheme == 'standard'
        ? '' : '-'.$benjamin_color_scheme;


	wp_enqueue_script(
        'benjamin', get_stylesheet_directory_uri() . '/assets/js/uswds-min.js',
         null, null, true
    );
    wp_enqueue_style( 'benjamin',
         get_stylesheet_directory_uri() . '/assets/css/benjamin'.$benjamin_color_scheme.'.min.css' );

     // comment script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'benjamin_scripts' );

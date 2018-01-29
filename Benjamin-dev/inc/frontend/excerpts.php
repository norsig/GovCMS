<?php

/**
 * Custom Excerpt Length
 */
function benjamin_continue_reading_link() {
    global $summary_settings;
    $value = $summary_settings['read_more'] ? $summary_settings['read_more'] : '...';

    return ' <a href="'. esc_url( get_permalink() ) . '">' . $value . '</a>';
}


function benjamin_excerpt_length() {
    global $summary_settings;
    $value = $summary_settings['length'] ? $summary_settings['length'] : 55;

    return $value;
}

function benjamin_auto_excerpt_more( $more ) {
    return benjamin_continue_reading_link();
}

function benjamin_custom_excerpt_more( $output ) {
    if ( has_excerpt() && !is_attachment() ) {
        $output .= benjamin_continue_reading_link();
    }
    return $output;
}


if(get_option('rss_use_excerpt', true) == true) {
    $summary_settings = get_option('summary_settings', true);

    add_filter( 'excerpt_length', 'benjamin_excerpt_length' );
    add_filter( 'excerpt_more', 'benjamin_auto_excerpt_more' );
    add_filter( 'get_the_excerpt', 'benjamin_custom_excerpt_more' );
}

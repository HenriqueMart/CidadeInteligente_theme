<?php
/**
 * Theme functions and definitions.
 */
function templetprojeto_child_enqueue_styles() {

    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'Templet projeto-style' , get_template_directory_uri() . '/style.css' );
    } else {
        wp_enqueue_style( 'Templet projeto-minified-style' , get_template_directory_uri() . '/style.min.css' );
    }

    wp_enqueue_style( 'Templet projeto-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'Templet projeto-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'templetprojeto_child_enqueue_styles' );
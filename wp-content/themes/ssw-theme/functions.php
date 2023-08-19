<?php

if ( ! function_exists( 'ssw_support' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since SSW Theme 1.0
 *
 * @return void
 */
function ssw_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

}

endif;
add_action( 'after_setup_theme', 'ssw_support' );

/*-----------------------
Enqueue Styles
--------------*/

if( ! function_exists('ssw_styles')):
function ssw_styles(){

    // Register Style Sheet
    wp_enqueue_style('ssw-style', get_stylesheet_uri(), array(), wp_get_theme()-> get('Version'));
    wp_enqueue_style('ssw-style-blocks', get_template_directory_uri() . './assets/css/blocks.css');


}
endif; 

add_action( 'wp_enqueue_scripts', 'ssw_styles');
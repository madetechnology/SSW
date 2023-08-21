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

/*-------------Create Block Pattern - Sub Header ----------------*/
if( ! function_exists('sub_header_pattern')):
function sub_header_pattern() {
    register_block_pattern(
    'SSW Sub Header Pattern',
    array(
    'title'       => __( 'SSW Sub Header Pattern', 'Featured' ),
    'description' => _x( 'Your Description.', 'Block pattern description', 'Featured' ),
    'content'     => "<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"ssw-grey\",\"className\":\"breadcrumb-box\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group alignfull breadcrumb-box has-ssw-grey-background-color has-background\"><!-- wp:group {\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\",\"justifyContent\":\"space-between\"}} -->\n<div class=\"wp-block-group\"><!-- wp:post-title {\"level\":3,\"style\":{\"layout\":{\"selfStretch\":\"fit\",\"flexSize\":null}},\"backgroundColor\":\"black\",\"textColor\":\"ssw-white\",\"className\":\"breadcrumb-header\",\"fontSize\":\"medium\"} /-->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:group {\"backgroundColor\":\"ssw-green\",\"className\":\"breadcrumb_buttons\",\"layout\":{\"type\":\"flex\",\"flexWrap\":\"nowrap\"},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-group breadcrumb_buttons has-ssw-green-background-color has-background has-small-font-size\"><!-- wp:heading {\"level\":6,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"400\"}},\"textColor\":\"ssw-white\",\"fontSize\":\"small\"} -->\n<h6 class=\"wp-block-heading has-ssw-white-color has-text-color has-small-font-size\" style=\"font-style:normal;font-weight:400\"><strong>Home</strong> / </h6>\n<!-- /wp:heading -->\n\n<!-- wp:post-title {\"level\":6,\"isLink\":true,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"400\"}},\"textColor\":\"ssw-white\",\"fontSize\":\"small\"} /--></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div>\n<!-- /wp:group --></div>\n<!-- /wp:group --> ",
    )
    );
    }
endif; 
    add_action( 'init', 'sub_header_pattern' );

/*-------------Create Block Pattern for Grey Header ----------------*/
if( ! function_exists('sub_blank_header_pattern')):
    function sub_blank_header_pattern() {
        register_block_pattern(
        'Sub Header Pattern',
        array(
        'title'       => __( 'Sub Header Pattern', 'Featured' ),
        'description' => _x( 'Your Description.', 'Block pattern description', 'Featured' ),
        'content'     => "<!-- wp:group {\"layout\":{\"type\":\"default\"}} -->\n\n<div class=\"wp-block-group\"><!-- wp:group {\"align\":\"wide\",\"backgroundColor\":\"ssw-grey\",\"layout\":{\"type\":\"constrained\"}} -->\n\n<div class=\"wp-block-group alignwide has-ssw-grey-background-color has-background\"><!-- wp:spacer {\"height\":\"30px\"} -->\n\n<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n\n<!-- /wp:spacer --></div>\n\n<!-- /wp:group --></div>\n\n<!-- /wp:group -->",
        )
        );
        }
    endif; 
        add_action( 'init', 'sub_blank_header_pattern' );
    
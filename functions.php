<?php
/**
 * Functions.php
 *
 * This file contains all the theme functions and definitions
 *
 * @package wp-origin
 */

/**
 *  Main Setup function for the theme. This uses the 'after_setup_theme' hook and therefore gets called
 *  once the page has loaded and the theme has been setup.
 */
function origin_setup() {

    // Make theme available for translation
    load_theme_textdomain( 'origin', get_template_directory() . '/languages' );

    // Add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add starter content
    add_theme_support( 'starter-content', [
        'widgets' => [
            'sidebar-1' => [
                'search',
                'archives',
                'categories'
            ]
        ]
    ] );

}
add_action( 'after_setup_theme', 'origin_setup' );

/**
 * Register widget area.
 */
function origin_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'origin' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'origin' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'origin_widgets_init' );

/**
 *  Enqueue any scripts and styles required by the theme.
 */
function origin_scripts() {

    // Main stylesheet
    wp_enqueue_style( 'origin-style', get_stylesheet_uri() );

    // Main script file
    wp_enqueue_script( 'origin-scripts', get_template_directory_uri() . '/assets/js/all.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'origin_scripts' );



/**
 * Additional template-related functions to be used
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );
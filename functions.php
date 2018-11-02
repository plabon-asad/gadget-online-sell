<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */

function gos_theme_setup() {
    add_theme_support( 'title-tag' );

    //Enable custom logo to upload a images
    add_theme_support( 'custom-logo', array(
        'width' => '120',
        'height' => '20',
        'flex-weight' => true,
        'flex-height' => true
    ) );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /* Enable custom logo */
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'gos_theme_setup' );

//Show custom logo
function show_custom_logo() {
    if (has_custom_logo()){
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
}

/**
 * Include primary navigation menu
 */
function gos_nav_init() {
    register_nav_menus( array(
        'menu-1' => 'Primary Menu',
    ) );
}
add_action( 'init', 'gos_nav_init' );

/**
 * Register widget area.
 *
 */
function gos_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Add widgets',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'gos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gos_scripts() {
    wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'gos_scripts' );

function gos_create_post_custom_post() {
    register_post_type('custom_post',
        array(
            'labels' => array(
                'name' => __('Custom Post', 'untheme'),
            ),
            'public'       => true,
            'hierarchical' => true,
            'supports'     => array(
                'title',
                'editor',
                'excerpt',
                'custom-fields',
                'thumbnail',
            ),
            'taxonomies'   => array(
                'post_tag',
                'category',
            )
        ));
}
add_action('init', 'gos_create_post_custom_post'); // Add our work type
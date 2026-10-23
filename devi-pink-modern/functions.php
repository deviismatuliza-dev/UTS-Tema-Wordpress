<?php
/** Theme setup and assets for Devi Pink Modern. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function devi_pink_setup() {
    load_theme_textdomain( 'devi-pink-modern', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );
    add_theme_support( 'responsive-embeds' );
    register_nav_menus( array( 'primary' => __( 'Menu Utama', 'devi-pink-modern' ), 'footer' => __( 'Menu Footer', 'devi-pink-modern' ) ) );
}
add_action( 'after_setup_theme', 'devi_pink_setup' );

function devi_pink_assets() {
    $file = get_stylesheet_directory() . '/style.css';
    wp_enqueue_style( 'devi-pink-style', get_stylesheet_uri(), array(), file_exists( $file ) ? filemtime( $file ) : '1.2' );
}
add_action( 'wp_enqueue_scripts', 'devi_pink_assets' );

function devi_pink_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Artikel', 'devi-pink-modern' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widget yang tampil di samping daftar atau detail artikel.', 'devi-pink-modern' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'devi_pink_widgets_init' );

function devi_pink_excerpt_length( $length ) { return 22; }
add_filter( 'excerpt_length', 'devi_pink_excerpt_length', 99 );
function devi_pink_excerpt_more( $more ) { return '…'; }
add_filter( 'excerpt_more', 'devi_pink_excerpt_more' );

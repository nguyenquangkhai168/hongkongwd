<?php

function jks_theme_setup() {

    // Add theme support.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    // add_theme_support( 'woocommerce' );

    // Disables the block editor.
    add_filter( 'use_block_editor_for_post', '__return_false' );
    add_filter( 'use_widgets_block_editor', '__return_false' );

    // Register nav menu.
    register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'JKS' ),
		'secondary' => __( 'Secondary Menu', 'JKS' ),
	) );

    // Create ACF Plugin theme options
    if ( function_exists( 'acf_add_options_page' ) ) {
        acf_add_options_page( array(
            'page_title' => __( 'Website Setting', 'JKS' ),
            'menu_title' => __( 'Website Setting', 'JKS' ),
            'menu_slug'  => 'theme-settings',
            'capability' => 'edit_posts',
            'redirect'   => false
        ));
    }

}
add_action( 'after_setup_theme', 'jks_theme_setup' );

function jks_theme_widget() {

    if ( function_exists( 'register_sidebar' ) ) {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'JKS' ),
            'id'            => 'jks-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

    }
}
add_action( 'widgets_init', 'jks_theme_widget' );

function jks_theme_scripts() {
    $uri = get_template_directory_uri();

    // CSS
    wp_enqueue_style( 'bootstrap-style', $uri . '/assets/libs/bootstrap/css/bootstrap.min.css', array(), false );
    wp_enqueue_style( 'carousel', $uri . '/assets/libs/owlcarousel/css/owl.carousel.min.css', array(), false );
    wp_enqueue_style( 'fancybox', $uri . '/assets/libs/fancybox/css/fancybox.css', array(), false );
    wp_enqueue_style( 'macy', $uri . '/assets/libs/macyjs/css/macy.css', array(), false );
	wp_enqueue_style( 'carousel-theme', $uri . '/assets/libs/owlcarousel/css/owl.theme.default.min.css', array(), false );
    wp_enqueue_style( 'fontawesome', $uri . '/assets/libs/fontawesome/all.min.css', array(), false );
    wp_enqueue_style( 'style', $uri . '/assets/css/style.css', array(), false );

    // JS
    wp_enqueue_script( 'bootstrap-script', $uri . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js', array(), false, true );
    wp_enqueue_script( 'carousel-script', $uri . '/assets/libs/owlcarousel/js/owl.carousel.min.js', array(), false, true );
    wp_enqueue_script( 'fancybox-umd', $uri . '/assets/libs/fancybox/js/fancybox.umd.js', array(), false, true );
    wp_enqueue_script( 'fancybox-jquery', $uri . '/assets/libs/fancybox/js/jquery.fancybox.min.js', array(), false, true );
    wp_enqueue_script( 'macy-script', $uri . '/assets/libs/macyjs/js/macy.js', array(), false, true );  
    wp_enqueue_script( 'main-script', $uri . '/assets/js/main.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'jks_theme_scripts' );